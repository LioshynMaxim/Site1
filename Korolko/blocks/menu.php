<nav>
	<div id="templatemo_menu">
		<div id="pettabs" class="indentmenu">

			<? 
			if (isset($idPage)) {
				$indexClass = "";
				$termOfRepairClass = "";
				$contactsClass = "";
				$servicesClass = "";
				$str = "selected";
				if ($idPage == 1){
					$indexClass = $str;
				}elseif ($idPage == 2) {
					$termOfRepairClass = $str;
				}elseif ($idPage == 3) {
					$guaranteeClass = $str;
				}elseif ($idPage == 4) {
					$articleClass = $str;
				}elseif ($idPage == 5) {
					$commentClass = $str;
				}else {
					$contactsClass = "selected";
				}
			}

			?> 
			
			<ul>
				<li><a href="index.php" class="<?php echo $indexClass; ?>">Главная</a></li>
				<li><a href="termsOfRepair.php" class="<?php echo $termOfRepairClass; ?>">Правила Ремонта</a></li>
				<li><a href="guarantee.php" class="<?php echo $guaranteeClass; ?>">Гарантия</a></li>
				<li><a href="article.php" class="<?php echo $articleClass; ?>">Новости</a></li>
				<li><a href="comment.php" class="<?php echo $commentClass; ?>">Отзывы</a></li>
				<li><a href="contacts.php" style="border-right: none;" class="<?php echo $contactsClass; ?>">Контакты</a></li>
			</ul>
			<img src="../images/logo.png" alt="logo SmartFix">
			<p>Срочный ремонт от 15 минут.<br>
				Будем рады помочь Вам <br>
				с 10:00 ч. до 20:00 ч. ежедневно!
			</p>
			
		</div>

	</div>  
</nav>