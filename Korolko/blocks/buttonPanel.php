
<div id="buttonPanel">
	
	<br>
	<a href="javascript:sh(1)" class="a-btn">
		<span><img src="images/555.png" alt="телефон" /></span>
		<span><img src="images/555.png" alt="телефон" /></span>
		<span>&nbsp;Телефоны</span>
	</a>

	<a href="javascript:sh(2)" class="a-btn">
		<span><img src="images/333.png" alt="планшет" /></span>
		<span><img src="images/333.png" alt="планшет" /></span>
		<span>&nbsp;Планшеты</span>
	</a>

	<a href="javascript:sh(3)" class="a-btn">
		<span><img src="images/222.png" alt="ноутбук" /></span>
		<span><img src="images/222.png" alt="ноутбук" /></span>
		<span>&nbsp;Ноутбуки</span>
	</a>

	<a href="javascript:sh(4)" class="a-btn">
		<span><img src="images/111.png" alt="аксессуары" /></span>
		<span><img src="images/111.png" alt="аксессуары" /></span>
		<span>Аксессуары</span>
	</a>


	<? 

	function printServices($table){
		global $mysqli;
		$sql = "SELECT * FROM " . $table;
		$result = $mysqli->query($sql);

		print("<div id='btnLeft'>
			<ul>");
			while ($row = $result->fetch_assoc()) {
				if(! ($row['id'] & 1 )){ 
					printf("<li><img src='images/galochka.png' alt='галочка' /><a href='#'> %s</a></li>",$row['serices']);
				}
			}
			print("</ul>		</div>");

			$result = $mysqli->query($sql);

			print("<div id='btnRight'>
				<ul>");
				while ($row = $result->fetch_assoc()) {
					if( ($row['id'] & 1 )){ 
						printf("<li><img src='images/galochka.png' alt='галочка'/><a href='#'> %s</a></li>",$row['serices']);
					}
				}
				print("</ul>			</div>");
				$result->close();
			};

			?>
		</div>


		<div id="btn_spoiler">
			<div id="btn_spoiler_top"></div>

			<div id="btn1" style="display:none">

				<div class="autoplay slider">
					<div>
						<a href="article.php?page=price&namesubject=apple&typedevice=phone" target="_blank"><img src="images/logoPhone/apple.png" alt="apple" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=samsung&typedevice=phone" target="_blank"><img src="images/logoPhone/samsung.png" alt="samsung" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=sony&typedevice=phone" target="_blank"><img src="images/logoPhone/sony.png" alt="sony" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=htc&typedevice=phone" target="_blank"><img src="images/logoPhone/htc.png" alt="htc" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=nokia&typedevice=phone" target="_blank"><img src="images/logoPhone/nokia.png" alt="nokia" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=huawei&typedevice=phone" target="_blank"><img src="images/logoPhone/huawei.png" alt="huawei" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=lg&typedevice=phone" target="_blank"><img src="images/logoPhone/lg.png" alt="lg" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=asus&typedevice=phone" target="_blank"><img src="images/logoPhone/asus.png" alt="asus" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=prestigio&typedevice=phone" target="_blank"><img src="images/logoPhone/prestigio.png" alt="prestigio" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=meizu&typedevice=phone" target="_blank"><img src="images/logoPhone/meizu.png" alt="meizu" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=xiaomi&typedevice=phone" target="_blank"><img src="images/logoPhone/xiaomi.png" alt="xiaomi" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=fly&typedevice=phone" target="_blank"><img src="images/logoPhone/fly.png" alt="fly" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=alcatel&typedevice=phone" target="_blank"><img src="images/logoPhone/alcatel.png" alt="alcatel" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=zte&typedevice=phone" target="_blank"><img src="images/logoPhone/zte.png" alt="zte" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=lenovo&typedevice=phone" target="_blank"><img src="images/logoPhone/lenovo.png" alt="lenovo" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=explay&typedevice=phone" target="_blank"><img src="images/logoPhone/explay.png" alt="explay" /></a>
					</div>
				</div>
				<? 
				printServices("Servicesforthephone");
				?>			

			</div>

			<div id="btn2" style="display:none">

				<div class="autoplay slider">
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/apple.png" alt="apple" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/samsung.png" alt="samsung" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/sony.png" alt="sony" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/huawei.png" alt="huawei" /></a>
					</div>

					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/prestigio.png" alt="prestigio" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/lenovo.png" alt="lenovo" /></a>
					</div>

					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/asus.png" alt="asus" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/logoPhone/explay.png" alt="explay" /></a>
					</div>

				</div>

				<? 
				printServices("Servicesforthetablet");
				?>
				
			</div>

			<div id="btn3" style="display:none">

				<div class="autoplay slider">
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/apple.png" alt="apple" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=hp&typedevice=notebook" target="_blank"><img src="images/logoPhone/hp.png" alt="hp" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/samsung.png" alt="samsung" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/sony_vaio.png" alt="sony vaio" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=toshiba&typedevice=notebook" target="_blank"><img src="images/logoPhone/toshiba.png" alt="toshiba" /></a>
					</div>	
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/lenovo.png" alt="lenovo" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/asus.png" alt="asus" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=acer&typedevice=notebook" target="_blank"><img src="images/logoPhone/acer.png" alt="acer" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/lg.png" alt="lg" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/sony.png" alt="sony" /></a>
					</div>
					
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/Fujitsu.png" alt="Fujitsu" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=dell&typedevice=notebook" target="_blank"><img src="images/logoPhone/dell.png" alt="dell" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=Compaq&typedevice=notebook" target="_blank"><img src="images/logoPhone/Compaq.png" alt="Compaq" /></a>
					</div>
					
					<div>
						<a href="article.php?page=price&namesubject=Emachines&typedevice=notebook" target="_blank"><img src="images/logoPhone/emachines.png" alt="emachines" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/NEC.png" alt="NEC" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/packard_bell.png" alt="packard bell" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/MSI.png" alt="MSI" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=notebook" target="_blank"><img src="images/logoPhone/Panasonic.png" alt="Panasonic" /></a>
					</div>
				</div>
				
				<? 
				printServices("Servicesforthenotebook");
				?>
				
			</div>

			<div id="btn4" style="display:none">

				<div class="autoplay slider">
					<div>
						<a href="article.php?page=price&namesubject=cube&typedevice=accessories" target="_blank"><img src="images/accessories/cube.png" alt="cube" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/accessories/headphones.png" alt="headphones" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=cube&typedevice=accessories" target="_blank"><img src="images/accessories/Cabel1.png" alt="Cabe" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/accessories/Cabel2.png" alt="Cabel" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=cube&typedevice=accessories" target="_blank"><img src="images/accessories/ZY1.png" alt="ZY" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/accessories/ZY2.png" alt="ZY" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=cube&typedevice=accessories" target="_blank"><img src="images/accessories/Cabel1.png" alt="Cabel" /></a>
					</div>
					<div>
						<a href="article.php?page=price&namesubject=default&typedevice=default" target="_blank"><img src="images/accessories/Cabel2.png" alt="Cabel" /></a>
					</div>
					

				</div>

				<? 
				//printServices("accessories");
				?>

			</div>

		</div>