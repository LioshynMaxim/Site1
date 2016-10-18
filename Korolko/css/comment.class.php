<?php

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
		
		$link_open = '';
		$link_close = '';
		
		if($d['url']){
			
			// Если был введн URL при добавлении комментария,
			// определяем открывающий и закрывающий теги ссылки
			
			$link_open = '<a href="'.$d['url'].'">';
			$link_close =  '</a>';
		}
		
		// Преобразуем время в формат UNIX:
		$d['dt'] = strtotime($d['dt']);
		
		// Нужно для установки изображения по умолчанию:
		/*$url = 'http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]).'/img/default_avatar.gif';

		<div class="avatar">
				'.$link_open.'
				<img src="img/default_avatar.gif" />
				'.$link_close.'
			</div>
*/

		return '
		
		<div class="comment">
			
			

			<div class="name">'.$link_open.$d['name'].$link_close.', '.$link_open.$d['age'].$link_close.', '.$link_open.$d['city'].$link_close.'</div>
			<div class="name">'.$link_open.$d['phone'].$link_close.'</div>
			<div class="date" title="Added at '.date('H:i \o\n d M Y',$d['dt']).'">'.date('d M Y',$d['dt']).'</div>
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
		
		$errors = array();
		$data	= array();
		
		// Используем функцию filter_input, введенную в PHP 5.2.0

		if(!($data['name'] = filter_input(INPUT_POST,'name',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['name'] = 'Пожалуйста, введите имя.';
		}

		if(!($data['text_comment'] = filter_input(INPUT_POST,'text_comment',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['text_comment'] = 'Пожалуйста, введите текст комментария.';
		}
		
		if(!($data['age'] = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT)))
		{
			$errors['age'] = 'Пожалуйста, введите правильный возраст.';
		}

		if(!($data['city'] = filter_input(INPUT_POST,'city',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			
			$errors['city'] = 'Пожалуйста, введите город.';
		}
		
		if(!($data['phone'] = filter_input(INPUT_POST,'phone',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			
			$errors['phone'] = 'Пожалуйста, введите телефон.';
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