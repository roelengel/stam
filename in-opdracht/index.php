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
					<img src="../_images/inopdracht-desktop.jpg" style="width:100%;" alt="Nina Stam - eigenaar van Stam Stoffeeraltelier - in haar werkplaats">

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
						<div id="kosten-table-M-right-2">200,- &nbsp; tot &nbsp; 1.000,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-200-1000.png" style="width:100%;"></div>
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
		
		
<!--CATEGORIEEN DESKTOP  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D">
			<div id="space_50"></div>
			<div id="header-D-content">
				<div id="header-D-content-left">
						<h1 class="s36" style="margin-top:5px;">Wat wil jij laten stofferen?</h1></a>
						<div id="space_10"></div>
				</div>
			</div>
			<div id="space_1"></div>
		</div>
		<div id="categorien-D">
			<div id="categorie-D" style="background-image: url(../../_images/categorie-stoel.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/stoelen-eetkamerstoelen-stofferen/">
					<div id="categorie-D-text">
						Stoelen en eetkamerstoelen
						<div id="space_30"></div>
					</div>
				</a>
			</div>
			<div id="categorie-D" class="categorie-D-space" style="background-image: url(../../_images/categorie-horeca.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/stofferen-in-de-horeca/">
					<div id="categorie-D-text">
						<span class="tag-category">Zakelijk</span>
						Horeca terrasen en horeca binnen
						<div id="space_30"></div>
					</div>
				</a>
			</div>
			<div id="categorie-D" class="categorie-D-space" style="background-image: url(../../_images/categorie-fauteuil.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/fauteuil-stofferen/">
					<div id="categorie-D-text">
						Fauteuils
						<div id="space_30"></div>
					</div>
				</a>
			</div>
		</div>
		
		<div id="space_50"></div>

		<div id="categorien-D">
			<div id="categorie-D" style="background-image: url(../../_images/categorie-caravan.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/caravans-stacaravans-campers-stofferen/">
					<div id="categorie-D-text">
						Caravans, stacaravans en campers
						<div id="space_30"></div>
					</div>
				</a>
			</div>
			<div id="categorie-D" class="categorie-D-space" style="background-image: url(../../_images/categorie-sportclub.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/sportkantines-fitnessapparaten-stofferen/">
					<div id="categorie-D-text">
						<span class="tag-category">Zakelijk</span>
						Sportkantines en fitnessapparaten
						<div id="space_30"></div>
					</div>
				</a>
			</div>
			<div id="categorie-D" class="categorie-D-space" style="background-image: url(../../_images/categorie-tuinkussens-beeld04.jpg); background-size:100%; background-position: top center;">
				<a href="../../stofferen/tuinkussens-laten-maken/">
					<div id="categorie-D-text">
						Tuinkussens
						<div id="space_30"></div>
					</div>
				</a>
			</div>
		</div>	
	
		<div id="space_50"></div>

		<div id="categorien-D">
			<div id="categorie-D" style="background-image: url(../../_images/categorie-boot.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/bootkussens-laten-maken/">
					<div id="categorie-D-text">
						Bootkussens
						<div id="space_30"></div>
					</div>
				</a>
			</div>
			<div id="categorie-D" class="categorie-D-space" style="background-image: url(../../_images/categorie-eetkamerbank.jpg); background-size:100%; background-position: center center;">
				<a href="../../stofferen/eetkamerbank-op-maat-stofferen/">
					<div id="categorie-D-text">
						Eetkamerbanken op maat
						<div id="space_30"></div>
					</div>
				</a>
			</div>
		</div>	
	
		<div id="space_50"></div>
		
		
		
<!--stoffenkiezer desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D-blue">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="header-D-content">
						<h1 class="s36 ">Op zoek naar een mooie stof?</h1>
						Kies eenvoudig een stof uit. Zoek je iets anders laat het ons weten.<br>
						Wij werken samen met meerdere leveranciers
						<div id="space_20"></div>
						<button class="button-white-line button-desktop w200" onclick="location.href='../stoffenkiezer'">Stoffenkiezer</button>
						<div id="space_50"></div>
					
			</div>
			<div id="space_1"></div>
		</div>
			
		<div id="carr-D-blue">
			<div id="carr-D-type1-firstspace"><div id="space_3"></div></div><div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=effen" alt="stof - effen teal">
					<img src="../_images/stof1.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Effen</div>
					<div id="caroussel-D-title">Teal</div>
				</a>
			</div>
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof2.jpg" class="car-image" alt="stof - patroon gobelin barbados negro" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Barbados Negro</div>
				</a>
			</div>			
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=buitenstof">
					<img src="../_images/stof3.jpg" class="car-image" alt="buitenstof - oranje/terra" >
					<div id="caroussel-D-subtitle">Buitenstof</div>
					<div id="caroussel-D-title">Oranje/Terra</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=rib">
					<img src="../_images/stof4.jpg" class="car-image" alt="stof - grove rib geel" >
					<div id="caroussel-D-subtitle">Rib</div>
					<div id="caroussel-D-title">Grove Rib Geel</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=velours">
					<img src="../_images/stof5.jpg" class="car-image" alt="stof - velours donker blauw">
					<div id="caroussel-D-subtitle">Velours</div>
					<div id="caroussel-D-title"> Donker Blauw</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof6.jpg" class="car-image" alt="stof - patroon gobelin curry mini" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Curry Mini</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../stoffenkiezer/">
					<img src="../_images/meerstoffen.jpg" class="car-image" alt="bekijk meer stoffen" >
					<div id="caroussel-D-subtitle">Bekijk meer</div>
					<div id="caroussel-D-title">Kies uit meer dan 1000 stoffen</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			<div id="space_50_eigenlijn_anchor"></div>
		</div>			

		
			
						
<!--PORTFOLIO DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D-dark">
			<div id="space_50"></div>
			<div id="header-D-content">
				<div id="header-D-content-1">
					<div id="header-D-content-2-text">
						<h2 class="s36 ">Mijn werk</h2>
						Bekijk hieronder een greep uit mijn stoffeerklussen in opdracht.
					</div>					

				</div>
			</div>
			<div id="space_1"></div>
		</div>
		<div id="carr-D-dark">
			
			<div id="carr-D-type1b-firstspace">&nbsp;</div> 

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
						<div id="carr-D-type1">
							<div id="space_50"></div>
							<a href="stoel.php?id=<? echo $id;?>">
								<img src="../../_images/in-opdracht-car<? echo $id;?>.jpg" style="width:100%;" class="car-image"  alt="<? echo $title;?>" >
								<div id="caroussel-D-title"><? echo $title;?></div>
							</a>
						</div>
						<div id="carr-D-type1-space">&nbsp;</div>
<?
						}

?>				
			
			
			<div id="carr-D-type1-space">&nbsp;</div>
			
			
			<div id="space_50"></div>
		</div>
		
<!--NEEM CONTACT OP dekstop  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="neem-contact-op-D">
			<div id="neem-contact-op-D-content">
				<div id="space_50"></div>
				<div id="space_10"></div>
				<h2>Wil jij iets laten stofferen?</span></h2>
				Ik ben heel goed te bereiken. Geen ingewikkelde formulieren. Stuur mij een bericht per WhatsApp, mail of Instagram en ik reageer zo snel mogelijk!<br><br>
				<div style="width:10%; float:left;">
					<img src="../../_images/nina-small2.jpg" style="width:100%; border-radius: 100px;">
				</div>
				<div style="width:2%; float:left;"> &nbsp;</div>
				<div style="width:80%; float:left;">
					<div id="space_20"></div>
					<span class="font-weight-600">Nina Stam</span><br>
					Eigenaar Stam Stoffeeratelier
				</div>
				<div id="space_20"></div>
				<div id="contact-D-acc-1">
					<a href="https://wa.me/31643094294">
						<div id="space_20"></div>
						<div id="contact-D-acc-left">Stuur een WhatsApp <span class="phone-number">&nbsp;(06 43 094 294)</span></div>
						<div id="contact-D-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
				<div id="contact-D-acc-2">
					<a href="mailto:nina@stamstoffeeratelier.nl">
						<div id="space_20"></div>
						<div id="contact-D-acc-left">Stuur een mail</div>
						<div id="contact-D-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>					
				<div id="contact-D-acc-3">
					<a href="https://www.instagram.com/nina.stoffeert/">
						<div id="space_20"></div>
						<div id="contact-D-acc-left">Stuur een DM via Instagram</div>
						<div id="contact-D-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
			</div>
			<div id="space_100"></div>
		</div>
	
		
		
<!--FAQ dekstop  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="FAQ-D">
			<div id="space_50"></div>
				<?php
					require_once __DIR__ . '/../FAQ/index.php';
					require_once __DIR__ . '/../FAQ/faq-accordion.php';

					$faqs = get_faqs_by_category($all_faqs, [
						'algemeen',
						'eetkamerstoelen',
						'fauteuils',
						'tuinkussens',
						'caravans-campers'
					]);
					render_faq_accordion($faqs);
				?>
			<div id="space_50"></div>
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
			<img src="../_images/top-image-inopdracht-M.jpg" style="width:100%;" alt="Nina Stam - eigenaar van Stam Stoffeeraltelier - in haar werkplaats">
		</div>
		<div id="pagina-inopdracht-M">
			<div id="pagina-inopdracht-M-content">
				<div id="space_1"></div>

				<h1 class="white-text s24">Wil jij iets laten stofferen?</h1>
				Heb jij thuis iets staan wat je wilt laten stofferen? Een meubelstuk met sentimentele waarde of een tuinbank die om maatwerk vraagt? 
				<div id="space_20"></div>
			</div>

			<div id="blok-top-M-buttons">
				<button class="button-orange-full w100pr mt7" onclick="location.href='../contact'">Stel een vraag</button>
				<br>
				<button class="button-white-line w100pr mt7" onclick="location.href='../contact'">Offerte</button>
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
						<div id="kosten-table-M-right-2">200,- &nbsp; tot &nbsp; 1.000,-</div>
						<div id="kosten-table-M-right-3"><img src="../_images/prijs-200-1000.png" style="width:100%;"></div>
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


<!--CONTACT MOBIEL   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
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
		</div>

<!--Mobile categorieen  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_50_eigenlijn_anchor"></div>		
		<div id="blok-top-M" class="dark-text">
			<div id="blok-top-M-title">
				<a href="eigen-lijn/" style="color: #230702; text-decoration:none;"><h1 class="s24" style="margin-top:5px;">Wat wil jij laten stofferen?</h1></a>
			</div>
			<div id="space_10"></div>
			
			<div id="caroussel-L-M">
				<div id="caroussel-M-emptyitem">&nbsp;</div>

				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-stoel.jpg); background-size:100%;">					
					<a href="../../stofferen/stoelen-eetkamerstoelen-stofferen/">
						<div id="category-M">
							Stoelen en eetkamerstoelen<br><br>
						</div>
					</a>
				</div>
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-horeca.jpg); background-size:100%;">					
					<a href="../../stofferen/stofferen-in-de-horeca/">
						<div id="category-M">
							<span class="tag-category">Zakelijk</span>
							Horeca terrassen en horeca binnen<br><br>
						</div>
					</a>
				</div>	
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-fauteuil.jpg); background-size:100%;">					
					<a href="../../stofferen/fauteuil-stofferen/">
						<div id="category-M">
							Fauteuils<br><br>
						</div>
					</a>
				</div>						
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-caravan.jpg); background-size:100%;">					
					<a href="../../stofferen/caravans-stacaravans-campers-stofferen/">
						<div id="category-M">
							Caravans, stacaravans en campers<br><br>
						</div>
					</a>
				</div>	
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-sportclub.jpg); background-size:100%;">					
					<a href="../../stofferen/sportkantines-fitnessapparaten-stofferen/">
						<div id="category-M">
							<span class="tag-category">Zakelijk</span>
							Sportkantines en fitnessapparaten<br><br>
						</div>
					</a>
				</div>	
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-tuinkussens.jpg); background-size:100%;">					
					<a href="../../stofferen/tuinkussens-laten-maken/">
						<div id="category-M">
							Tuinkussens<br><br>
						</div>
					</a>
				</div>					

				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-boot.jpg); background-size:100%;">					
					<a href="../../stofferen/bootkussens-laten-maken/">
						<div id="category-M">
							Bootkussens<br><br>
						</div>
					</a>
				</div>
				
				<div id="caroussel-L-M-item-category" class="slide-in-M" style="background-image: url(../../_images/categorie-eetkamerbank.jpg); background-size:100%;">					
					<a href="../../stofferen/eetkamerbank-op-maat-stofferen">
						<div id="category-M">
							Eetkamerbanken en op maat banken<br><br>
						</div>
					</a>
				</div>
								
				
				<div id="caroussel-L-M-emptyitem">&nbsp;</div>
				
			</div>
			<div id="space_50"></div>
		</div>	


<!--Mobile blok Stoffenkiezer   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
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
					<img src="../_images/stof1.jpg" class="car-image" alt="stof - teal">
					<div id="caroussel-M-title">Teal</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=patroon">
					<img src="../_images/stof2.jpg"  class="car-image" alt="stof - gobelin barbados negro">
					<div id="caroussel-M-title">Gobelin Barbados Negro</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=buitenstof">
					<img src="../_images/stof3.jpg"  class="car-image" alt="buitenstof - terra">
					<div id="caroussel-M-title">Buitenstof Terra</div>
					</a>
				</div>	
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/index.php?category=rib">
					<img src="../_images/stof4.jpg" class="car-image" alt="stof - grove rib geel" >
					<div id="caroussel-M-title">Grove Rib Geel</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../stoffenkiezer/">
					<img src="../_images/meerstoffen.jpg" class="car-image" alt="bekijk meer stoffen - stapel van stoffen" >
					<div id="caroussel-M-title">Kies uit meer dan 1000 stoffen</div>
					</a>
				</div>					
				<div id="caroussel-L-M-emptyitem">&nbsp;</div>

				<div id="space_20"></div>
			</div>
			
			<div id="space_20"></div>
			<div id="blok-top-M-buttons">
				<button class="button-white-line " onclick="location.href='../stoffenkiezer/index.php'">Stoffenkiezer</button>
			</div>
			<div id="space_50"></div>
			
		</div>		
	
		
		
		
		
		
<!--PORTFOLIO MOBIEL   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="blok-top-M" class="bg-color-dark1 white-text">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="blok-top-M-title">
				<a href="in-opdracht/"><h2 class="s24 white-text" style="text-decoration:none;">Mijn werk</h1></a>
			</div>
			<div id="blok-top-M-subtitle">
				Bekijk hieronder een greep uit mijn stoffeerklussen in opdracht.		
			</div>
		</div>
	
		<div id="blok-bottom-M" class="bg-color-dark1 white-text">

			
			<div id="caroussel-M">
				<div id="space_20"></div>
				<div id="caroussel-M-emptyitem">&nbsp;</div>
				
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
				
						<div id="caroussel-M-item" class="slide-in-M">
							<a href="../stoel.php?id=<? echo $id;?>">
								<img src="../../_images/in-opdracht-car<? echo $id;?>.jpg" style="width:100%;" alt="<? echo $title;?>" class="car-image" >
								<div id="caroussel-M-title"><? echo $title;?></div>
							</a>
						</div>				
<?
						}

?>					
				<div id="caroussel-L-M-emptyitem">&nbsp;</div>
				<div id="space_20"></div>
			</div>
			<div id="space_50"></div>
		</div>
		
<!--CONTACT MOBIEL   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
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

<!--FAQ mobile  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="FAQ-M">
			<div id="FAQ-M-content">
				<div id="space_50"></div>
				<?php
					require_once __DIR__ . '/../FAQ/index.php';
					require_once __DIR__ . '/../FAQ/faq-accordion.php';

					$faqs = get_faqs_by_category($all_faqs, [
						'algemeen',
						'eetkamerstoelen',
						'fauteuils',
						'tuinkussens',
						'caravans-campers'
					]);
					render_faq_accordion($faqs);
				?>
				<div id="space_50"></div>
			</div>		
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

							document.getElementById("carr-D-type1-firstspace").style.width = newWidth;
							document.getElementById("carr-D-type1b-firstspace").style.width = newWidth;
							document.getElementById("carr-D-type2-firstspace").style.width = newWidth;
						}

						updateSize();
						window.addEventListener("resize", updateSize);	

						
						
					</script>				
		
		
	</body>
</html>