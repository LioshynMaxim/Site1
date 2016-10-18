<?

class Comment
{

	private $data = array();
	
	public function __construct($row)
	{
		/*
		/	Конструктор
		*/
		
		$this->data = $row;
	}
	
	public function markup()
	{
		/*
		/	Данный метод выводит разметку XHTML для комментария
		*/
		
		// Устанавливаем псевдоним, чтобы не писать каждый раз $this->data:
		$d = &$this->data;
		$date;

		
		$link_open = '';
		$link_close = '';
		
		$monthes = array(
			'Jan' => 'Января', 'Feb' => 'Февраля', 'Mar' => 'Марта', 'Apr' => 'Апреля',
			'May' => 'Мая', 'Jun' => 'Июня', 'Jul' => 'Июля', 'Aug' => 'Августа',
			'Sep' => 'Сентября', 'Oct' => 'Октября', 'Nov' => 'Ноября', 'Dec' => 'Декабря'
			);
		

		// Преобразуем время в формат UNIX:
		$d['dt'] = strtotime($d['dt']);		
		//$date = date('H:i \o\n d M Y',$d['dt']).'">'.date('d M Y',$d['dt']);
		$date = date('H:i \o\n d M Y',$d['dt']).'">'.date('d ',$d['dt']).$monthes[date('M',$d['dt'])].date(' Y',$d['dt']);

		return '
		
		<div class="comment">
			<div class="name">'.$link_open.$d['name'].$link_close.', '.$link_open.$d['age'].$link_close.', '.$link_open.$d['city'].$link_close.'</div>
			<div class="name">'.$link_open.$d['phone'].$link_close.'</div>
			<div class="date" title="Added at '.$date.'</div>
				<p>'.$d['text_comment'].'</p>
			</div>
			';
		}

		public static function validate(&$arr)
		{
		/*
		/	Данный метод используется для проверки данных отправляемых через AJAX.
		/
		/	Он возвращает true/false в зависимости от правильности данных, и наполняет
		/	массив $arr, который преается как параметр либо данными либо сообщением об ошибке.
		*/
		/* Временно отключил, так как валидация будет происходить визуально прямо в форме*/
		$errors = array();
		$data	= array();
		
		// Используем функцию filter_input, введенную в PHP 5.2.0

		if(!($data['name'] = filter_input(INPUT_POST, 'name', FILTER_CALLBACK, array('options'=>'Comment::validate_text'))))
		{
			$errors['name'] = 'Пожалуйста, введите имя.';
		}

		if(!($data['age'] = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT)))
		{
			$errors['age'] = 'Пожалуйста, введите правильный возраст.';
		}

		if(!($data['city'] = filter_input(INPUT_POST,'city',FILTER_CALLBACK, array('options'=>'Comment::validate_text'))))
		{
			
			$errors['city'] = 'Пожалуйста, введите город.';
		}

		if(!($data['phone'] = filter_input(INPUT_POST,'phone',FILTER_CALLBACK, array('options'=>'Comment::validate_text'))))
		{
			
			$errors['phone'] = 'Пожалуйста, введите телефон.';
		}


		if(!($data['text_comment'] = filter_input(INPUT_POST,'text_comment', FILTER_CALLBACK, array('options'=>'Comment::validate_text'))))
		{
			$errors['text_comment'] = 'Пожалуйста, введите текст комментария.';
		}
		
		
		// Используем фильтр с возвратной функцией:
		
		if(!empty($errors)){
			
			// Если есть ошибки, копируем массив $errors в $arr:
			
			$arr = $errors;
			return false;
		}
		
		// Если данные введены правильно, подчищаем данные и копируем их в $arr:
		
		foreach($data as $k=>$v){
			$arr[$k] = mysql_real_escape_string($v);
		}
		
		return true;
		
	}

	private static function validate_text($str)
	{
		/*
		/	Данный метод используется как FILTER_CALLBACK
		*/
		
		if(mb_strlen($str,'utf8')<1)
			return false;
		
		// Кодируем все специальные символы html (<, >, ", & .. etc) и преобразуем
		// символ новой строки в тег <br>:
		
		$str = nl2br(htmlspecialchars($str));
		
		// Удаляем все оставщиеся символы новой строки
		$str = str_replace(array(chr(10),chr(13)),'',$str);
		
		return $str;
	}

}

?>