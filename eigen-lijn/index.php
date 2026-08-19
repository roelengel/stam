<?
	include ('../_includes/mobile_check.php');

	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	


?>
<html>
	<head>
		<? include('../_includes/google-analytics.php');?>


		<meta charset="utf-8">
		<title>Stam Stoffeeratelier | Eigen Lijn |  <? echo $title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		
		<meta name="title" content="Stam Stoffeeratelier | Eigen Lijn Refurnish">
		<meta name="description" content="Met mijn eigen Refurnish lijn koop ik oude stoelen en knap ik ze weer op. Alles wat nodig is voor goed zitcomfort en een gave look.">
		
		<meta property="og:title" content="Stam Stoffeeratelier | Eigen Lijn Refurnish">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/social3.jpg">	
		<meta property="og:image:secure_url" content="https://www.stamstoffeeratelier.nl/_images/social3.jpg">	
		<meta property="og:image:width" content="1024">	
		<meta property="og:image:height" content="683">	
	
		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">
		<link rel="stylesheet" href="https://use.typekit.net/zqj1mvu.css">
		
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
								<li class="menu-itemD"><a href="../in-opdracht/">In Opdracht</a></li>
								<li class="menu-itemD"><a href="../eigen-lijn/"><span class="active-D">Shop</span></a></li>
								<li class="menu-itemD"><a href="../stoffenkiezer/">Stoffenkiezer</a></li>
								<li class="menu-itemD"><a href="#"><div style="width:70px; height:20px;">&nbsp;</div></a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../over-mij/">Over Mij</a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../garantie/">Garantie</a></li>
								<li class="menu-itemD"><a href="mailto:nina@stamstoffeeratelier.nl"><button class="button-dark-line button-desktop " onclick="location.href='../contact'">Contact</button></a></li>
							</ul>
						</nav>
				</div>				
			</div>
		</div>
		
<!-- desktop header  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		
				<div id="space_100"></div>

<!-- desktop STOELEN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="content-D">
			<div id="content-D-content">
				<div id="gallery-D-text">
					<div id="space_20"></div>
					<div id="space_10"></div>
					<h1 class="s36 " style="margin-top:5px;">Stoelen uit mijn eigen lijn</h1>
						Met mijn eigen Refurnish lijn koop ik oude stoelen en knap ik ze weer op. Zie je iets moois? Neem dan even contact op. De voorraad is niet altijd actueel..
									
				</div>
				<div id="gallery-D-space">&nbsp;</div>

				<? $counter = "1";?>
<?
				$sql->Query("SELECT * FROM stoelen WHERE  type = 'eigen_lijn' ORDER BY id DESC");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$title = $sql->data[title];
							$images = $sql->data[images];
							$volgorde = $sql->data[volgorde];
							$price = $sql->data[price];
							$uitverkocht = $sql->data[uitverkocht];
							$color = $sql->data[color];
							$counter = $counter +1;
							
?>
							<div id="gallery-D-item">
								<a href="stoel.php?id=<? echo $id;?>" class="link-white">
										<img src="../_images/eigen-lijn-M-car<? echo $id;?>.jpg" class="car-image" style="width:100%;">
									
										<div id="space_20"></div>
										
										<div id="gallery-D-item-bottompart">
											<div id="gallery-D-item-title"><? echo $title;?></div>
											<div id="space_5"></div>
											<div id="gallery-D-item-price"><? echo $price;?>,-</div>
											<? if ($uitverkocht == 'verkocht'){?> 
												<div id="space_5"></div>
												<div class="uitverkocht-tag">
													<? echo $uitverkocht;?>
												</div>
											<? } ?>
											<div id="space_20"></div>
						
										</div>
		
								</a>
							</div>
				<? if ($counter != 4 && $counter != 8 && $counter != 12  && $counter != 16  && $counter != 20  && $counter != 24 && $counter != 28   && $counter != 32  && $counter != 36   ){?><div id="gallery-D-space">&nbsp;</div><?}?>				

				
				
<?
						}

?>					
				<div id="space_100"></div>
				
				
				
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

<!--NAVIGATIE MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigatie-M-sticky">
			<div id="navigatie-M-container">
				<div id="navigatie-M-1">&nbsp;</div>
				<div id="navigatie-M-2">
						<div id="space_20"></div>
						<div id="space_5"></div>
						<a href="../index.php"><img src="../_images/logo-klein-hor.png" style="height: 36px;"></a>
				</div>
				<div id="navigatie-M-3">
					<div id="space_20"></div>
					<div id="space_20"></div>
					<a href="../mobile-menu/">
						<img src="../_images/hamburger.png" style="width:20px;">
					</a>
				
				</div>
				<div id="navigatie-M-4">&nbsp;</div>
			</div>
		</div>
	
<!--HEADER  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_100"></div>
		<!--
		<div style="clear:both;">
			<img src="../_images/top-image-eigenlijn-M.jpg" style="width:100%;">
			<div style="margin-top:-400px; margin-left:40%;">
				<span style="font-family: cinema-script; font-size:50px; font-weight:300;color: #ffffff;">Refurnish</span><h1 class="s24 white-text" style="margin-top:5px;">Mijn eigen lijn</h1>
		
			</div>
		</div>
		-->

		<div id="blok-top-M" class="dark-text">
			<div id="blok-top-M-subtitle">
				 <h1 class="s24 " style="margin-top:5px;">Stoelen uit mijn eigen lijn</h1>
			</div>
			<div id="blok-top-M-subtitle">
				Met mijn eigen Refurnish lijn koop ik oude stoelen en knap ik ze weer op.  Zie je iets moois? Neem dan even contact op. De voorraad is niet altijd actueel.
				
			</div>
			
		</div>
		
		<div id="space_20"></div>
		<div id="space_20"></div>			
<?
					$sql->Query("SELECT * FROM stoelen WHERE  type = 'eigen_lijn' ORDER BY id DESC");
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
							<div id="list-item-M">
								<a href="stoel.php?id=<? echo $id;?>" class="link-white">
									<div id="list-item-M-left" style="background-image: url('../_images/eigen-lijn-M-car<? echo $id;?>.jpg'); background-size:140px;" class="border-S">
										

										<div id="favorite-container-M">
											<table style="font-size:14px; color: #3B3B3B;">
												<tr>
													<td><img src="../_images/heart.svg" style="height:17px;" ></td>
													<td><? echo rand(10,30);?></td>
												</tr>
											</table>
										</div>


									</div>
									<div id="list-item-M-right">
										<div id="space_90"></div>
										<div id="list-item-M-right-title"><? echo $title;?></div>
										<div id="list-item-M-right-price"><? echo $price;?>,-</div>
										<? if ($uitverkocht == 'verkocht'){?> 
											<div id="space_5"></div>
											<div class="uitverkocht-tag">
												<? echo $uitverkocht;?>
											</div>
										<? } ?>										
									</div>

								</a>
							</div>
							<div id="space_20"></div>

				
				
<?
						}

?>		
	
		<div id="meer-eigen-lijn-M">
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="meer-eigen-lijn-M-content">
					<span style="font-size:24px; font-weight:900;">Interesse in een stoel?</span>
					<div id="space_20"></div>
					<div id="space_10"></div>

					
					Zie je iets moois? Vraag mij dan even of de stoel nog beschikbaar is.
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
				<div id="space_20"></div>
			

				
		</div>
		
		
	
		
 	
<?
		  }
?>
	
		<? include('../_includes/footer.php');?>

	</body>
</html>