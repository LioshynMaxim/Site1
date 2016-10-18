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

	<title>Гарантии</title>
</head>
<body>
	<div id="templatemo_wrapper">
		<div id="templatemo_container">

			<?php 
			$idPage = 3;
			include 'blocks/header.php'; 
			?>
			
			<?php 
			include 'blocks/buttonPanel.php'; 
			?>

			<div id="templatemo_content">
				<div id="content_top"></div>

				<div class="templatemo_content_section_01">
					<div class="section_01_left">

						<?
						$sql = "SELECT * FROM basicinformation";
						$result = $mysqli -> query($sql, MYSQLI_USE_RESULT);
						$row = $result -> fetch_assoc();
						echo $row['guarantee'];
						$result ->free();

						?>
						
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