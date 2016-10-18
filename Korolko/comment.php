<?

// Сообщение об ошибке:
error_reporting(E_ALL^E_NOTICE);

include "blocks/db.php";
include "blocks/comment.class.php";


/*
/ Выбираем все комментарии и наполняем массив $comments объектами
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
  $comments[] = new Comment($row);
}

?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>

  <? 
  include 'blocks/head.php'; 
  ?>

  <meta name="description" content="Ремонт телефонов в Минске дёшево быстро и качественно. Починим ваш телефон на 30% дешевле, чем конкуренты за 15 минут в вашем присутствии. "/> 

  <meta name="keywords" content="ремонт iPhone, срочный ремонт мобильного, сломался iPhone, заменить батарею, ремонт iphone в Минске, замена экрана iphone, замена батареи, замена аккумулятора, iPhone 4, iPhone 4s, iPhone 5, iPhone 5c, iPhone 5s, iPhone 6, iPhone 6 plus, iPhone 6s, iPhone 6s plus"/>

  <meta name="abstract" content="Ремонт мобильных телефонов, ремонт сотовых телефонов, перепрошивка, ремонт КПК, ремонт смартфонов, диагностика мобильного телефона, ремонт сотовых телефонов, ремонт радиотелефонов. Поиск, сравнение услуг, все цены в Минске"/>

  <meta name="title" content="Отзывы о ремонте, ремонт телефонов, честные комментарии" />

  <title>Ремонт телефонов, планшетов, ноутбуков</title>

</head>
<body>
  <div id="templatemo_wrapper">
    <div id="templatemo_container">

      <? 
      $idPage = 5;
      include 'blocks/header.php'; 
      ?>
      
      <? 
      include 'blocks/buttonPanel.php'; 
      ?>

      <div id="templatemo_content">
       <div id="content_top"></div>

       <div class="templatemo_content_section_01">
         <div class="section_01_left">
          <div id="main">

            <?
            
            foreach($comments as $c){
              echo $c->markup(); //Вывод комментариев один за другим
            }

            ?>

          </div>
          <div id="addCommentContainer">
            <form class="contact_form" id="addCommentForm" method="post" action="#">
              <ul>
                <li>
                 <h2>Пожалуйста, оставьте свой отзыв о нашем сервисе</h2>
               </li>
               <li>
                <label for="name">Ваше имя:</label>
                <input type="text" name="name" id="name" placeholder="Steve Jobs" required />
              </li>
              <li>
                <label for="name">Возраст:</label>
                <input type="text" name="age" id="age" placeholder="20" required pattern="[0-9][0-9]"/>
              </li>
              <li>
                <label for="name">Ваш город:</label>
                <input type="text" name="city" id="city" placeholder="Los Angeles" required />
              </li>
              <li>
                <label for="name">Марка устройства:</label>
                <input type="text" name="phone" id="phone" placeholder="Apple" required />
              </li>
              <li>
                <label for="message">Ваш отзыв:</label>
                <textarea name="text_comment" id="text_comment" cols="30" rows="6" required ></textarea>
              </li>
              <li>

                <button class="submit" type="submit" value="Отправить">Отправить отзыв</button>
              </li>
            </ul>
          </form>
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/scriptComment.js"></script>

      </div> 

      <?php 
      include "blocks/newsPanel.php"; 
      ?>

      <div class="cleaner">&nbsp;</div>
    </div>

    <?php 
    include "blocks/contactFooter.php"; ?>


  </div>

  <?php 
  include "blocks/footer.php"; ?>
</div>
</div>
</body>
</html>