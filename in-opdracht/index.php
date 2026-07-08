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
		<title>Stam Stoffeeratelier | Stofferen in opdracht</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		
		<meta name="title" content="Stam Stoffeeratelier | Stofferen In Opdracht">
		<meta name="description" content="Heb jij thuis iets staan wat je wilt laten stofferen? Een meubelstuk met sentimentele waarde of een tuinbank die om maatwerk vraagt? Neem contact op voor een gratis offerte. ">
		
		<meta property="og:title" content="Stam Stoffeeratelier | Stofferen In Opdracht">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/social.jpg">	
		
	
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
								<li class="menu-itemD"><a href="#"><span class="active-D">In Opdracht</span></a></li>
								<li class="menu-itemD"><a href="../eigen-lijn/">Shop</a></li>
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
		
<!-- desktop stoel content   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		
<!--in opdracht desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="space_100"></div>
		<div id="header-D-dark">
			<div id="space_50"></div>
			<div id="header-D-content">
				<div id="header-D-content-1">
					<img src="../_images/inopdracht-desktop.jpg" style="width:100%;">

				</div>
				<div id="header-D-content-2">
					<div id="header-D-content-2-text">
						<h1 class="s36" style="margin-top:5px;">Stofferen<br>in opdracht</h1>
						Heb jij thuis iets staan wat je wilt laten stofferen? Een meubelstuk met sentimentele waarde of een tuinbank die om maatwerk vraagt? Neem contact op voor een gratis offerte.

						<div id="space_20"></div>
						<div id="header-D-buttons">
							<div id="header-D-button1">
								<button class="button-orange-full button-desktop w200" onclick="location.href='../contact'">Stel een vraag</button>
							</div>
							<div id="header-D-buttonspace">&nbsp;</div>
							<div id="header-D-button2">
								<button class="button-white-line button-desktop w200" onclick="location.href='../contact'">Offerte</button>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div id="space_1"></div>
		</div>

<!--KOSTEN desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="small-content" >
			<div id="small-content-smaller">

				<div id="space_20"></div>
				<h2 class="s24">Aan welke kosten moet je denken?</h1>
				De kosten van iets laten stofferen hangen af van de complexiteit van jouw meubelstuk, de hoeveelheid stof en eventuele verborgen gebreken (zoals een kapotte vulling).
				<br><br>
				Hieronder geef ik een indicatie waar je aan moet denken. De prijzen zijn in Euro's en inclusief BTW.				
				<div id="space_20"></div>
				
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_feauteuil.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Fauteuils</div>
						<div id="kosten-table-M-right-2">200,- &nbsp; tot &nbsp; 550,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-200-550.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Een fauteuil stofferen varieert erg in prijs. Dit heeft met de grootte en complexiteit te maken van de stoel.</div>
					</div>
					<div id="space_20"></div>
				</div>
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_stoel.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Eetkamerstoelen</div>
						<div id="kosten-table-M-right-2">60,- &nbsp; tot &nbsp; 180,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-60-180.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Eetkamerstoelen zijn gemiddeld genomen een kleine klus. Afhankelijkheden zijn de hoeveelheid stof en hoe eenvoudig de stoel te demonteren is.</div>
					</div>
					<div id="space_20"></div>
				</div>	
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_tuinbank.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Tuinkussens</div>
						<div id="kosten-table-M-right-2">40,- &nbsp; tot &nbsp; 400,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-40-400.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Tuinkussens zijn volledig afhankelijk van de hoeveelheid. Een klein kussentje zal misschien 20 of 30 Euro zijn. Een complete tuinbank kan oplopen tot 300 tot 400 Euro.</div>
					</div>
					<div id="space_20"></div>
				</div>					
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_camper.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Caravan inrichting</div>
						<div id="kosten-table-M-right-2">100,- &nbsp; tot &nbsp; 600,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-100-600.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Ik stoffeer ook volledige (sta)caravans. Bij het volledig opnieuw stofferen van alle banken en matrassen ga je naar de bovenkant van deze prijsinschatting.</div>
					</div>
					<div id="space_20"></div>
				</div>	
				<div id="space_20"></div>
				Voor een goede prijsinschatting kun je mij altijd foto's mailen of WhatsAppen. 
				<div id="space_10"></div>
				<button class="button-dark-line button-desktop" onclick="location.href='../contact'">Stuur mij een foto</button>	
			</div>
		</div>
		<div id="space_50"></div>
		
		
<!--stoffenkiezer desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D-blue">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="header-D-content">
				<div id="header-D-content-center">
						<h1 class="s36 ">Op zoek naar een mooie stof?</h1>
						Kies eenvoudig een stof uit. Zoek je iets anders laat het ons weten.<br>
						Wij werken samen met meerdere leveranciers
						<div id="space_20"></div>
						<button class="button-white-line button-desktop w200" onclick="location.href='../stoffenkiezer'">Stoffenkiezer</button>
						<div id="space_50"></div>
					
				</div>
			</div>
			<div id="space_1"></div>
		</div>
			
		<div id="carr-D-blue">
			<div id="carr-D-type1c-firstspace"><div id="space_3"></div></div><div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=effen">
					<img src="../_images/stof1.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Effen</div>
					<div id="caroussel-D-title">Hopper Teal</div>
				</a>
			</div>
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof2.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Barbados Negro</div>
				</a>
			</div>			
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=buitenstof">
					<img src="../_images/stof3.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Buitenstof</div>
					<div id="caroussel-D-title">Screen 21-N Oranje/Terra</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=rib">
					<img src="../_images/stof4.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Rib</div>
					<div id="caroussel-D-title">Runagain Geel</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=velours">
					<img src="../_images/stof5.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Velours</div>
					<div id="caroussel-D-title">Ikoo Donker Blauw</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof6.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Curry Mini</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/">
					<img src="../_images/meerstoffen.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Bekijk meer</div>
					<div id="caroussel-D-title">Kies uit meer dan 1000 stoffen</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			<div id="space_50_eigenlijn_anchor"></div>
		</div>			

		
			
						
<!-- desktop STOELEN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="content-D">
			<div id="content-D-content">
				<div id="space_20"></div>
				<h1 class="s36 ">Mijn werk</h1>
				Bekijk hieronder een greep uit mijn stoffeerklussen in opdracht.
				<div id="space_1"></div>
				<? $counter = "0";?>
<?
				$sql->Query("SELECT * FROM stoelen WHERE  type = 'in_opdracht' ORDER BY id DESC");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$title = $sql->data[title];
							$images = $sql->data[images];
							$volgorde = $sql->data[volgorde];
							$price = $sql->data[price];
							$color = $sql->data[color];
							$counter = $counter +1;
							
?>
							<div id="gallery-D-item">
								<a href="stoel.php?id=<? echo $id;?>" class="link-white">
										<img src="../_images/in-opdracht-car<? echo $id;?>.jpg" style="width:100%;" class="car-image" >
										<div id="space_20"></div>
										<div id="gallery-D-item-title-50"><? echo $title;?></div>
										<div id="space_20"></div>

								</a>
							</div>
				<? if ($counter != 4 && $counter != 8 && $counter != 12  && $counter != 16  && $counter != 20  && $counter != 24 && $counter != 28   && $counter != 32  && $counter != 36   ){?><div id="gallery-D-space">&nbsp;</div><?}?>				

				
				
<?
						}

?>					

				<div id="space_50"></div>
				<div id="space_20"></div>
				
				
				
			</div>
		</div>
		
		<div id="small-content">
			<div id="meer-eigen-lijn-M-content">
				<span style="font-size:24px; font-weight:900;">Wil jij iets laten stofferen?</span>
				<div id="space_20"></div>
				<div id="space_10"></div>


				Ik ben heel goed te bereiken. Geen ingewikkelde formulieren. Stuur mij een bericht per WhatsApp, mail of Instagram en ik reageer zo snel mogelijk!
				<div id="space_20"></div>
				<div id="contact-M-acc-1">
					<a href="https://wa.me/31643094294">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een WhatsApp <span class="phone-number">&nbsp;(06 43 094 294)</span></div>

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
			<div id="space_100"></div>
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

<!--navigatie mobile   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
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
	
<!--header mobile ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_50"></div>
		<div id="space_20"></div>
		<div id="pagina-inopdracht-M-topimage">
			<img src="../_images/top-image-inopdracht-M.jpg" style="width:100%;">
		</div>
		<div id="pagina-inopdracht-M">
			<div id="pagina-inopdracht-M-content">
				<div id="space_1"></div>

				<h1 class="white-text s24">Wil jij iets laten stofferen?</h1>
				Heb jij thuis iets staan wat je wilt laten stofferen? Een meubelstuk met sentimentele waarde of een tuinbank die om maatwerk vraagt? 
				<div id="space_20"></div>
			</div>

			<div id="blok-top-M-buttons">
				<button class="button-orange-full w150 mt7" onclick="location.href='../contact'">Stel een vraag</button>
				&nbsp;&nbsp;
				<button class="button-white-line w150 mt7" onclick="location.href='../contact'">Offerte</button>
			</div>
			<div id="space_50"></div> 	
			
		</div>
		
<!--header mobile ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_10"></div>

		<div id="pagina-M">
			<div id="pagina-M-content">
				<div id="space_1"></div>
				<h2 class="s24">Aan welke kosten moet je denken?</h1>
				De kosten van iets laten stofferen hangen af van de complexiteit van jouw meubelstuk, de hoeveelheid stof en eventuele verborgen gebreken (zoals een kapotte vulling).
				<br><br>
				Hieronder geef ik een indicatie waar je aan moet denken. De prijzen zijn in Euro's en inclusief BTW.				
				<div id="space_20"></div>
				
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_feauteuil.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Fauteuils</div>
						<div id="kosten-table-M-right-2">200,- &nbsp; tot &nbsp; 550,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-200-550.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Een fauteuil stofferen varieert erg in prijs. Dit heeft met de grootte en complexiteit te maken van de stoel.</div>
					</div>
					<div id="space_20"></div>
				</div>
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_stoel.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Eetkamerstoelen</div>
						<div id="kosten-table-M-right-2">60,- &nbsp; tot &nbsp; 180,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-60-180.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Eetkamerstoelen zijn gemiddeld genomen een kleine klus. Afhankelijkheden zijn de hoeveelheid stof en hoe eenvoudig de stoel te demonteren is.</div>
					</div>
					<div id="space_20"></div>
				</div>	
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_tuinbank.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Tuinkussens</div>
						<div id="kosten-table-M-right-2">40,- &nbsp; tot &nbsp; 400,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-40-400.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Tuinkussens zijn volledig afhankelijk van de hoeveelheid. Een klein kussentje zal misschien 20 of 30 Euro zijn. Een complete tuinbank kan oplopen tot 300 tot 400 Euro.</div>
					</div>
					<div id="space_20"></div>
				</div>					
				<div id="kosten-table-M">
					<div id="space_20"></div>
					<div id="kosten-table-M-left"><img src="../_images/icons-stam_camper.svg" style="width:100%;"></div>
					<div id="kosten-table-M-right">
						<div id="kosten-table-M-right-1">Caravan inrichting</div>
						<div id="kosten-table-M-right-2">100,- &nbsp; tot &nbsp; 600,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-100-600.png" style="width:100%;"></div>
						<div id="kosten-table-M-right-4">Ik stoffeer ook volledige (sta) caravans. Bij het volledig opnieuw stofferen van alle banken en matrassen ga je naar de bovenkant van deze prijsinschatting.</div>
					</div>
					<div id="space_20"></div>
				</div>	
				<div id="space_20"></div>
				Voor een goede prijsinschatting kun je mij altijd foto's mailen of WhatsAppen. 
				<div id="space_10"></div>
				<button class="button-dark-line" onclick="location.href='../contact'">Stuur mij een foto</button>	
			</div>

		</div>	
		
	
<!--Mobile blok Stoffenkiezer   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_50"></div>
		<div id="blok-bottom-M" class="bg-color-stoffenkiezer white-text">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="blok-top-M-title">
				<h1 class="s24">Op zoek naar een<br>mooie stof?</h1>
			</div>
			<div id="blok-top-M-subtitle">
				Kies eenvoudig een stof uit. Zoek je iets anders laat het ons weten.Wij werken samen met meerdere leveranciers
			</div>
			
			<div id="caroussel-M">
				<div id="space_20"></div>
				<div id="caroussel-M-emptyitem">&nbsp;</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=effen" class="link-white">
					<img src="../_images/stof1.jpg" class="car-image" >
					<div id="caroussel-M-subtitle">Effen</div>
					<div id="caroussel-M-title">Hopper Teal</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof2.jpg"  class="car-image">
					<div id="caroussel-M-subtitle">Patroon</div>
					<div id="caroussel-M-title">Gobelin Barbados Negro</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=buitenstof">
					<img src="../_images/stof3.jpg"  class="car-image">
					<div id="caroussel-M-subtitle">Buitenstof</div>
					<div id="caroussel-M-title">Screen 21-N Oranje/Terra</div>
					</a>
				</div>	
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=rib">
					<img src="../_images/stof4.jpg" class="car-image" >
					<div id="caroussel-M-subtitle">Rib</div>
					<div id="caroussel-M-title">Runagain Geel</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/">
					<img src="../_images/meerstoffen.jpg" class="car-image" >
					<div id="caroussel-M-subtitle">Bekijk meer</div>
					<div id="caroussel-M-title">Kies uit meer dan 1000 stoffen</div>
					</a>
				</div>					
				<div id="caroussel-M-emptyitem">&nbsp;</div>
				<div id="space_20"></div>
			</div>
			<div id="space_20"></div>
			<div id="blok-top-M-buttons">
				<button class="button-white-line " onclick="location.href='../stoffenkiezer/index.php'">Stoffenkiezer</button>
			</div>
			<div id="space_50"></div>
			
		</div>		
	
		
		
		
		
		
<!--ijn werk   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="pagina-M">
			<div id="space_20"></div>
			<div id="pagina-M-content">
				<h2 class="s24">Mijn werk</h2>
				Bekijk hieronder een greep uit mijn stoffeerklussen in opdracht.
				<div id="space_20"></div>
			</div>
			
		</div>
		
		
<?
					$sql->Query("SELECT * FROM stoelen WHERE  type = 'in_opdracht' ORDER BY id DESC");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$title = $sql->data[title];
							$images = $sql->data[images];
							$volgorde = $sql->data[volgorde];
							$price = $sql->data[price];
							$color = $sql->data[color];
							
?>
							<div id="list-item-M">
								<a href="stoel.php?id=<? echo $id;?>" class="link-white">
									<div id="list-item-inopdracht-M-left">
										<img src="../_images/in-opdracht-car<? echo $id;?>.jpg" style="width:100%;" >
									</div>
									<div id="list-item-inopdracht-M-right">
										<div id="space_90"></div>
										<div id="list-item-M-right-title2"><? echo $title;?></div>
									</div>

								</a>
							</div>
							<div id="space_20"></div>

				
				
<?
						}

?>		
		
		
		
		<div id="meer-eigen-lijn-M">
				<div id="space_50"></div>
				<div id="meer-eigen-lijn-M-content">
					<span style="font-size:24px; font-weight:900;">Wil jij iets laten stofferen?</span>
					<div id="space_20"></div>
					<div id="space_10"></div>

					
					<div style="clear:both; width:100%;">
						<div style="width:25%; float:left;">
							<img src="../_images/nina-small2.jpg" style="width:100%; border-radius: 100px;">
						</div>
						<div style="width:5%; float:left;"> &nbsp;</div>
						<div style="width:70%; float:left;">
							Ik ben heel goed te bereiken. Geen ingewikkelde formulieren. Stuur mij een bericht per WhatsApp, mail of Instagram en ik reageer zo snel mogelijk!
						</div>
					
					
					</div>
					
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

		
		
		
<!--END OF MOBILE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?
		  }
?>
	
		<? include('../_includes/footer.php');?>

		
		
		<!--GET BROWSER WIDTH  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
					<script>
						const heightOutput = document.querySelector("#height");
						const widthOutput = document.querySelector("#width");

						function updateSize() {
							var newWidth = '5%';
							if(window.innerWidth > 1555){
								newWidth = ((window.innerWidth -1400) /2) + 'px';
							}

							document.getElementById("carr-D-type1c-firstspace").style.width = newWidth;

						}

						updateSize();
						window.addEventListener("resize", updateSize);	

						
						
					</script>			
		
		
	</body>
</html>