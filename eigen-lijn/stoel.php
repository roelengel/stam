<?
	include ('../_includes/mobile_check.php');

	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	


	$id = $_GET['id'];


					$sql->Query("SELECT * FROM stoelen WHERE id = $id ");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$title = $sql->data[title];
							$images = $sql->data[images];
							$volgorde = $sql->data[volgorde];
							$price = $sql->data[price];
							$uitverkocht = $sql->data[uitverkocht];
							$color = $sql->data[color];
							$meerdere_items = $sql->data[meerdere_items];
						}

?>
<html>
	<head>
		<? include('../_includes/google-analytics.php');?>


		<meta charset="utf-8">
		<title>Stam Stoffeeratelier | Eigen Lijn |  <? echo $title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		
		<meta name="title" content="Stam Stoffeeratelier | <? echo $title;?>">
		<meta name="description" content="Wil jij een stoel, bank, kruk, hondenmand, buitenkussens of bootkussens laten stofferen? In ons atelier pakken wij elke klus met veel zorgvuldigheid aan.">
		
		<meta property="og:title" content="Stam Stoffeeratelier | <? echo $title;?>">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/eigen-lijn-M-large<? echo $id;?>-1.jpg">	
		
	
		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">
		
		<!--lottie files   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		
		<link rel="shortcut icon" href="../_images/ssa-favicon.ico" type="image/x-icon">
		<link rel="icon" href="../_images/ssa-favicon.ico" type="image/x-icon">
		
		
	</head>
	<body>

<?
		if ($device == 'desktop'){
?>	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		
		
<!--navigatie desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="navigatie-D">
			<div id="navigatie-D-content">
				<div id="navigatie-D-1"><a href="../index.php"><img src="../_images/logo-klein-hor.png" style="height: 35px; margin-top:17px;"></a></div>
				<div id="navigatie-D-2">
						<nav>
							<ul>
								<li class="menu-itemD"><a href="../index.php">Home</a></li>
								<li class="menu-itemD"><a href="../in-opdracht/">In Opdracht</span></a></li>
								<li class="menu-itemD"><a href="index.php"><span class="active-D">Eigen Lijn</span></a></li>
								<li class="menu-itemD"><a href="../stoffenkiezer/">Stoffenkiezer</a></li>
								<li class="menu-itemD"><a href="#"><div style="width:70px; height:20px;">&nbsp;</div></a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../over-mij/">Over Mij</a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../garantie/">Garantie</a></li>
								<li class="menu-itemD"><a href="../contact/"><button class="button-dark-line button-desktop " onclick="location.href='../contact'">Contact</button></a></li>
							</ul>
						</nav>
				</div>				
			</div>
		</div>

		<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto; rotate:90deg; position:fixed; bottom: 45%; left: 92%; z-index:997;" loop  autoplay></lottie-player>

		
<!-- desktop stoel content   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="stoel-content-M">
			<div id="stoel-content-M-blok" style="background-color:#<? echo $color;?>" class="animate-bottom-top-m">
				<div id="stoel-content-M-blok-title" >
					<? echo $title;?>
					<div id="space_5"></div>
					<span style="font-weight:900; font-size:28px;"><? echo $price;?>,-</span><br>
						<? if ($meerdere_items > 1){?>
							<span style="font-size:12px;">Prijs per stoel<br> Nog <? echo $meerdere_items;?> beschikbaar</span><br>
						<?}?>
					
					<? if ($uitverkocht == 'verkocht'){?> 
						<div id="space_5"></div>
						<div class="uitverkocht-tag-white">
							<span style="color: #<? echo $color;?>"><? echo $uitverkocht;?></span>
						</div>
					<? } ?>	
					
				</div>
			</div>
			
			<div id="stoel-D-car">
				<div id="stoel-D-car-item" style="background-image: url('../_images/eigen-lijn-M-large<? echo $id;?>-1.jpg');" >
					&nbsp;
				</div>
				
				<div id="stoel-D-car-item-text" class="animate-right-1" >
					<div id="space_100" style="width:380px"></div>
					<div id="space_50" style="width:380px"></div>

				<div id="meer-eigen-lijn-D-content">
					<span style="font-size:20px;"><? echo $title;?></span><br>
					<span style="font-size:28px; font-weight:900;"><? echo $price;?>,-</span>
					<div id="space_10"></div>
					
					<? if ($uitverkocht == 'verkocht'){?> 
						<div id="space_5"></div>
						<div class="uitverkocht-tag">
							<? echo $uitverkocht;?>
						</div>
					<? } ?>	
					
						<? if ($meerdere_items > 1){?>
							<span style="font-size:12px;">Prijs per stoel<br> Nog <? echo $meerdere_items;?> beschikbaar</span><br>
						<?}?>
					<div id="space_20"></div>
					<div id="space_10"></div>

					
					Interesse? Check  of dit item nog op voorraad is.
					<div id="space_20"></div>
					<div id="contact-M-acc-1">
						<a href="https://wa.me/31643094294">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een WhatsApp</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>
					<div id="contact-M-acc-2">
						<a href="mailto:nina@stamstoffeeratelier.nl">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een mail</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>					
					<div id="contact-M-acc-3">
						<a href="https://www.instagram.com/nina.stoffeert/">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een DM via Instagram</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>
				</div>					
					
				</div>
				
				<? if ($images >"1"){?>
				<div id="stoel-D-car-item-margin" style="background-image: url('../_images/eigen-lijn-M-large<? echo $id;?>-2.jpg'); " class="animate-right-2" >
					&nbsp
				</div>
				<? } ?>			
				<? if ($images >"2"){?>
				<div id="stoel-D-car-item-margin" style="background-image: url('../_images/eigen-lijn-M-large<? echo $id;?>-3.jpg'); " class="animate-right-3" >
					&nbsp;
				</div>
				<? } ?>	
				<? if ($images >"3"){?>
				<div id="stoel-D-car-item-margin" style="background-image: url('../_images/eigen-lijn-M-large<? echo $id;?>-4.jpg'); ">
					&nbsp;
				</div>
				<? } ?>					
				<? if ($images >"4"){?>
				<div id="stoel-D-car-item-margin" style="background-image: url('../_images/eigen-lijn-M-large<? echo $id;?>-5.jpg'); ">
					&nbsp;
				</div>
				<? } ?>	
			
			</div>

		
				
			
		
		</div>
		
		
		
		
		
		
<?
		 }
		  if ($device == 'mobile'){
?>	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	

<!--top navigatie mobile   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
	<div id="navigatie-stoel-M">
		<div id="space_10"></div>
		<div id="space_10"></div>
		<div id="navigatie-stoel-M-container">
			<div id="navigatie-stoel-M-1">&nbsp;</div>
			<a onclick="history.back()">
				<div id="navigatie-stoel-M-2">
					<div id="space_10"></div>
					<img src="../_images/back.png" style="height:13px;">
				</div>
			</a>
			<div id="navigatie-stoel-M-3">
				<div id="space_5"></div>
				<a href="index.php">Eigen lijn</a> 
			</div>
			<div id="navigatie-stoel-M-4"><a href="../index.php"><img src="../_images/logo-icon.png" style="width:30px;"></a></div>
			<div id="navigatie-stoel-M-5">&nbsp;</div>

			
		</div>	
	</div>
	
<!--content stoel mobile   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="stoel-content-M">
			<div id="stoel-content-M-blok" style="background-color:#<? echo $color;?>" class="animate-bottom-top-m">
				<div id="stoel-content-M-blok-title"><? echo $title;?></div>
				<div id="stoel-content-M-blok-price"><? echo $price;?>,-</div>
						<? if ($meerdere_items > 1){?>				
						<div id="stoel-content-M-blok-title">
							<span style="font-size:12px;">Prijs per stoel<br> Nog <? echo $meerdere_items;?> beschikbaar</span><br>
						</div>

				
						<?}?>
				
					<? if ($uitverkocht == 'verkocht'){?> 
						<div id="space_5"></div>
						<div id="stoel-content-M-blok-title">
							<div class="uitverkocht-tag-white">
								<span style="color: #<? echo $color;?>"><? echo $uitverkocht;?></span>
							</div>
						</div>
					<? } ?>					
				
			</div>
			<div id="stoel-content-M-image">
				<img src="../_images/eigen-lijn-M-large<? echo $id;?>-1.jpg" style="width:100%;">

				<? if ($images >"1"){?>
					<img src="../_images/eigen-lijn-M-large<? echo $id;?>-2.jpg" style="width:100%;">
				<? } ?>			
				<? if ($images >"2"){?>
					<img src="../_images/eigen-lijn-M-large<? echo $id;?>-3.jpg" style="width:100%;">
				<? } ?>	
				<? if ($images >"3"){?>
					<img src="../_images/eigen-lijn-M-large<? echo $id;?>-4.jpg" style="width:100%;">
				<? } ?>	
				<? if ($images >"4"){?>
					<img src="../_images/eigen-lijn-M-large<? echo $id;?>-5.jpg" style="width:100%;">
				<? } ?>	
				
			</div>
		</div>
			
			
<!--mobile: meer over stoel en meer stoelen  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
			<div id="meer-eigen-lijn-M">
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="meer-eigen-lijn-M-content">
					<span style="font-size:20px;"><? echo $title;?></span><br>
					<span style="font-size:28px; font-weight:900;"><? echo $price;?>,-</span>
					
					<? if ($uitverkocht == 'verkocht'){?> 
						<div id="space_5"></div>
						<div class="uitverkocht-tag">
							<? echo $uitverkocht;?>
						</div>
					<? } ?>	
					
					<div id="space_10"></div>
					

						<? if ($meerdere_items > 1){?>
						<span style="font-size:12px;">Prijs per stoel<br> Nog <? echo $meerdere_items;?> beschikbaar</span><br>
						<?}?>
					
					<div id="space_20"></div>
					<div id="space_10"></div>

					
					Interesse? Check  of dit item nog op voorraad is.  
					<div id="space_20"></div>
					<div id="contact-M-acc-1">
						<a href="https://wa.me/31643094294">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een WhatsApp</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>
					<div id="contact-M-acc-2">
						<a href="mailto:nina@stamstoffeeratelier.nl">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een mail</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>					
					<div id="contact-M-acc-3">
						<a href="https://www.instagram.com/nina.stoffeert/">
							<div id="space_20"></div>
							<div id="contact-M-acc-left">Stuur een DM via Instagram</div>
							<div id="contact-M-acc-right"><div id="space_3"></div><img src="../_images/forward.png" style="height: 13px;"></div>
							<div id="space_20"></div>
						</a>
					</div>
				</div>
				

					<div id="space_50"></div>
					
					
				<div id="eigen-lijn-M2-content">
					<div id="space_50"></div>
					<span style="font-weight:900; font-size:24px;">Meer van mijn eigen lijn</span>
				</div>
				
				<div id="caroussel-M">
					<div id="space_20"></div>
					<div id="caroussel-M-emptyitem">&nbsp;</div>
					
<?
					$sql->Query("SELECT * FROM stoelen WHERE  type = 'eigen_lijn' AND id != $id ORDER BY id DESC" );
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$title = $sql->data[title];
							$images = $sql->data[images];
							$volgorde = $sql->data[volgorde];
							$price = $sql->data[price];
							$color = $sql->data[color];
							$uitverkocht = $sql->data[uitverkocht];
							
?>
							<div id="caroussel-M-item" class="slide-in-M">
								<a href="stoel.php?id=<? echo $id;?>" class="link-white">
									<img src="../_images/eigen-lijn-M-car<? echo $id;?>.jpg" class="car-image" >
									
									<div id="carrousel-L-M-bottom-darktext" >
										<div id="space_10"></div>
										<div id="caroussel-L-M-title"><? echo $title;?></div>
										<div id="caroussel-L-M-price"><? echo $price;?>,-</div>

										
										
											<? if ($uitverkocht == 'verkocht'){?> 
												<div id="space_5"></div>
												<div id="stoel-content-M-blok-title">
													<div class="uitverkocht-tag">
														<? echo $uitverkocht;?>
													</div>
												</div>
											<? } ?>		
										<div id="space_20"></div>
									</div>

								</a>
							</div>
				
				
				
<?
						}

?>	
					<div id="caroussel-M-emptyitem">&nbsp;</div>
					<div id="space_100"></div>
				</div>	
				
						<? include('../_includes/footer.php');?>
			</div>
			
			
			<? if ($images >"1"){?>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto; position:fixed; bottom: 2%; left: 45%; z-index:997;" loop  autoplay></lottie-player>
			<? }?>

 	
<?
		  }
?>
	
	</body>
</html>