<?
include "blocks/db.php";
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>
	<title>Ремонт телефонов, планшетов, ноутбуков</title>
	<?php 
	include 'blocks/head.php'; 
	?>
	<meta name="description" content="Ремонт телефонов в Минске дёшево быстро и качественно. Починим ваш телефон на 30% дешевле, чем конкуренты за 15 минут в вашем присутствии. "/> 

	<meta name="keywords" content="ремонт iPhone, срочный ремонт мобильного, сломался iPhone, заменить батарею, ремонт iphone в Минске, замена экрана iphone, замена батареи, замена аккумулятора, iPhone 4, iPhone 4s, iPhone 5, iPhone 5c, iPhone 5s, iPhone 6, iPhone 6 plus, iPhone 6s, iPhone 6s plus"/>

	<meta name="abstract" content="Ремонт мобильных телефонов, ремонт сотовых телефонов, перепрошивка, ремонт КПК, ремонт смартфонов, диагностика мобильного телефона, ремонт сотовых телефонов, ремонт радиотелефонов. Поиск, сравнение услуг, все цены в Минске, Уручье">
	
	<meta name="title" content="Срочный ремонт телефонов в Минске за считанные минуты., Минск. Предлагаю услуги - Срочный ремонт телефонов в Минске за считанные минуты., Ремонт мобильных телефонов Минск, Уручье">

	<meta name="yandex-verification" content="269cf1ec3f72fad5">
</head>
<body>

	<div id="templatemo_wrapper">
		<div id="templatemo_container">

			<? 
			$idPage = 1;
			include 'blocks/header.php'; 
			?>
			
			<?
			include 'blocks/buttonPanel.php'; 
			?>

			<div id="templatemo_content">
				<div id="content_top"></div>

				<div class="templatemo_content_section_01">

					<?
					$sql = "SELECT * FROM basicinformation";
					$result = $mysqli -> query($sql, MYSQLI_USE_RESULT);
					$row = $result -> fetch_assoc();
					echo $row['indexpage'];
					$result -> free();
					?>


					<div class="cleaner"></div>
				</div>
				

				<div class="down-button">
					<h1>Наши преимущества:</h1>
					<div class="btn-down">						
						<img class="a-btn-down" src="images/7_years_experience.png" alt="7 лет работы">
						<p>7 лет опыта работы на рынке ремонта</p>
					</div>
					<div class="btn-down">
						<img class="a-btn-down" src="images/each_customer_is_satisfied_with_the_repair_of.png" alt="Каждый клиент доволен выполненным ремонтом">
						<p>Каждый клиент доволен выполненным ремонтом</p>
					</div>
					<div class="btn-down">						
						<img class="a-btn-down" src="images/having_handed_in_for_repair_we-you_save.png" alt="Сдав в ремонт Нам - Вы экономите">
						<p>Сдав в ремонт <br> Нам - Вы экономите</p>
					</div>
					<div class="btn-down">
						<img class="a-btn-down" src="images/individual_approach_to_each_client.png" alt="Индивидуальный подход к каждому клиенту">
						<p>Индивидуальный подход к каждому клиенту</p>
					</div>
					<div class="btn-down">						
						<img class="a-btn-down" src="images/the_majority_of-repairs_for_60_minutes.png" alt="7 лет работы">
						<p>Большинство ремонтов за 60 минут</p>
					</div>
					
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

	<div class="redir">
		<a href="uruche.smartfix.by">Уручье</a>
	</div>
</body>
</html>