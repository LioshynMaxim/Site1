<?
include "blocks/db.php";
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>
  <?php 
  include 'blocks/head.php'; 
  ?>
  
  <meta name="description" content="Ремонт телефонов в Минске дёшево быстро и качественно. Починим ваш телефон на 30% дешевле, чем конкуренты за 15 минут в вашем присутствии. "/> 

  <meta name="keywords" content="ремонт iPhone, срочный ремонт мобильного, сломался iPhone, заменить батарею, ремонт iphone в Минске, замена экрана iphone, замена батареи, замена аккумулятора, iPhone 4, iPhone 4s, iPhone 5, iPhone 5c, iPhone 5s, iPhone 6, iPhone 6 plus, iPhone 6s, iPhone 6s plus"/>
  
  <meta name="abstract" content="Ремонт мобильных телефонов, ремонт сотовых телефонов, перепрошивка, ремонт КПК, ремонт смартфонов, диагностика мобильного телефона, ремонт сотовых телефонов, ремонт радиотелефонов. Поиск, сравнение услуг, все цены в Минске, Уручье"/>
  
  
  <meta name="title" content="Объявление Срочный ремонт телефонов в Минске за считанные минуты., Минск. Предлагаю услуги - Срочный ремонт телефонов в Минске за считанные минуты., Ремонт мобильных телефонов Минск, Уручье" />

  <title>Контакты</title>
  
</head>
<body>
  <div id="templatemo_wrapper">
    <div id="templatemo_container">

      <?php 
      $idPage = 6;
      include 'blocks/header.php'; 
      ?>

      <?php 
      include 'blocks/buttonPanel.php'; 
      ?>

      <div id="templatemo_content">
       <div id="content_top"></div>

       <div class="templatemo_content_section_01">
         <div class="section_01_left">
          <h1>Контактная информация:</h1>

          <?
          $sql = "SELECT * FROM basicinformation";
          $result = $mysqli -> query($sql, MYSQLI_USE_RESULT);
          $row = $result -> fetch_assoc();
          ?>

          <ul id="contact_box">
            <li><? echo $row['phonemts'];?></li>
            <li><? echo $row['phonevelcom'];?></li>
            <li><? echo $row['phonelife'];?></li>
            <li><? echo $row['viber'];?></li>
          </ul>
          <br>
          <br>
          <h1>Наш адрес:</h1>
          <h2><? echo $row['address'];?><br>
            Будем рады помочь Вам с 10:00 до 20:00 ежедневно.</h2>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=XPBQJTVYlsZHm3RwYzK-U88RntPUva-n&width=500&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>
            
            <br>
            <? $result -> free();?>
            <?php  
            include "blocks/mail.php";
            ?>

          </div> 

          <?php 
          include "blocks/newsPanel.php"; 
          ?>

          <div class="cleaner">&nbsp;</div>
        </div>

        <?php 
        include "blocks/contactFooter.php"; 
        ?>


      </div>

      <?php 
      include "blocks/footer.php"; 
      ?>
    </div>
  </div>
</body>
</html>