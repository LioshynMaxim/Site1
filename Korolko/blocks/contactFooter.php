<div class="templatemo_content_section_02">

	<?
	$sql = "SELECT * FROM basicinformation";
	$result = $mysqli -> query($sql, MYSQLI_USE_RESULT);
	$row = $result -> fetch_assoc();
	?>

	<div class="section_02_subsection">
		<h2>Мы в сети</h2>
		<p>Найти нас в социальных сетях можно по следующим ссылкам:</p>

		<ul id="social_box">
			<li><? echo $row['socialinstagram'];?></li>
			<li><? echo $row['socialvk'];?></li>                
		</ul>

	</div>

	<div class="section_02_subsection">
		<h2>Контакты</h2>

		<ul id="social_box">
			<li><? echo $row['phonemts'];?></li>
			<li><? echo $row['phonevelcom'];?></li>
			<li><? echo $row['phonelife'];?></li>
			<li><? echo $row['viber'];?></li>
		</ul>

	</div>
	<div class="section_02_subsection" style="border-right: none;">
		<h2>Схема проезда</h2>

		<p>Наш адрес: <br><? echo $row['address'];?></p>
		<a rel="simplebox" href="images/mapbig.png">
			<img src="images/mapsmall.png" width="250" alt="схема проезда" />
		</a>
		<? $result -> free();?>

		<script type="text/javascript" src="js/simplebox_util.js"></script>
		<script type="text/javascript">
			(function(){
				var boxes=[],els,i,l;
				if(document.querySelectorAll){
					els=document.querySelectorAll('a[rel=simplebox]'); 
					Box.getStyles('simplebox_css','css/simplebox.css');
					Box.getScripts('simplebox_js','js/simplebox.js',function(){
						simplebox.init();
						for(i=0,l=els.length;i<l;++i)
							simplebox.start(els[i]);
						simplebox.start('a[rel=simplebox_group]'); 
					});
				}
			})();
		</script>
	</div>

	<div class="cleaner">&nbsp;</div>
	
</div>