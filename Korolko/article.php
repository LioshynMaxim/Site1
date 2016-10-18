<?php
include "blocks/db.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}else{
  $id = -1;
}

if (isset($_GET['page'])) {
  $page = $_GET['page'];
}


?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>
  <?php 
  include 'blocks/head.php'; 
  ?>

  <?
  if($page == 'price'){
    $namesubject = $_GET['namesubject'];
    $typedevice = $_GET['typedevice'];
    $sql = "SELECT * FROM price WHERE namesubject = '".$namesubject."' AND typedevice = '".$typedevice."' ";
    $result = $mysqli->query($sql, MYSQLI_USE_RESULT);

    while ($row = $result->fetch_assoc()) {
      printf('<meta name="description" content="%s"/> 
        <meta name="keywords" content="%s"/>
        <meta name="abstract" content="%s"/>  
        <meta name="title" content="%s" />', $row['metadescription'], $row['keywords'], $row['abstract'], $row['title']);
    }
  }

  ?>
<title>Ремонт телефонов, планшетов, ноутбуков</title>
</head>
<body>
  <div id="templatemo_wrapper">
    <div id="templatemo_container">

      <?php 
      $idPage = 4;
      include 'blocks/header.php'; 
      ?>

      <?php 
      include 'blocks/buttonPanel.php'; 
      ?>
      <div id="templatemo_content">
       <div id="content_top"></div>

       <div class="templatemo_content_section_01">

        <?
        if($page != 'price'){
          ?>
          <div class="section_01_left">

           <?
           if ($page == 'news') {

            $sql = "SELECT * FROM news WHERE id = ";
            $result = $mysqli->query($sql . $id, MYSQLI_USE_RESULT);
            $row = $result->fetch_assoc();
            printf("<h1>%s</h1><p>%s</br>\n", $row['title'], $row['maintext']);
            $result->close(); 

          }else{
            $result = $mysqli->query("SELECT * FROM news"); 
            printf("<h1>Новости нашего ремонта</h1>");
            while ($row = $result->fetch_assoc()) {
              printf("<h3>%s</h3>
                <p>%s</p>
                <a href='article.php?id=%d&page=news'>Далее</a>\n<br><br>", $row['title'], $row['discription'], $row['id']);
            }
          }          

          ?>         
        </div>

        <? 
        include "blocks/newsPanel.php";
      }else{
        $namesubject = $_GET['namesubject'];
        $typedevice = $_GET['typedevice'];
        $sql = "SELECT * FROM price WHERE namesubject = '".$namesubject."' AND typedevice = '".$typedevice."' ";
        $result = $mysqli->query($sql, MYSQLI_USE_RESULT);

        while ($row = $result->fetch_assoc()) {
          printf("
            <div id='price'>
              <h1>%s</h1>
              %s
            </div>", $row['discription'], $row['service'], $row['cost']);            
        }
      }


      ?>

      <div class="cleaner">&nbsp;</div>
    </div>

    <?php 
    include "blocks/contactFooter.php"; 
    ?>


  </div>

  <?php 
  include "blocks/footer.php"; ?>
</div>
</div>
</body>
</html>