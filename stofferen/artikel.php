<html>
	<head>
		<? include('../../_includes/google-analytics.php');?>

		<meta charset="utf-8">
		<title><? echo $seo_title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../../style2.css"/>
		<link type="text/css" rel="stylesheet" href="../style-stofferen.css"/>

		<meta name="title" content="<? echo $seo_title;?>">
		<meta name="description" content="<? echo $meta_description;?>">

		<meta property="og:title" content="<? echo $seo_title;?>">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/<? echo $image;?>">

		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">

		<link rel="shortcut icon" href="../../_images/ssa-favicon.ico" type="image/x-icon">
		<link rel="icon" href="../../_images/ssa-favicon.ico" type="image/x-icon">
		
		
		<!--CODE VOOR GOOGLE EN AI   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
				<script type="application/ld+json">
				{
				  "@context": "https://schema.org",
				  "@type": "Service",
				  "serviceType": "<?= $h1; ?>",
				  "description": "<?= $meta_description; ?>",
				  "image": "https://www.stamstoffeeratelier.nl/_images/<?= $image; ?>",
				  "provider": {
					"@type": "LocalBusiness",
					"@id": "https://www.stamstoffeeratelier.nl/#localbusiness",
					"name": "Stam Stoffeeratelier",
					"url": "https://www.stamstoffeeratelier.nl/",
					"telephone": "+31643094294",
					"address": {
					  "@type": "PostalAddress",
					  "streetAddress": "Anna Reynvaanstraat 32",
					  "addressLocality": "Heemskerk",
					  "postalCode": "1963 BV",
					  "addressRegion": "Noord-Holland",
					  "addressCountry": "NL"
					}
				  }
				}
				</script>
		
	</head>
	<body>

<?
		if ($device == 'desktop'){
?>
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->

<!--navigatie desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="navigatie-D">
			<div id="navigatie-D-content">
				<div id="navigatie-D-1"><a href="../../index.php"><img src="../../_images/logo-klein-hor.png" style="height: 35px; margin-top:17px;"></a></div>
				<div id="navigatie-D-2">
						<nav>
							<ul>
								<li class="menu-itemD"><a href="../../index.php">Home</a></li>
								<li class="menu-itemD"><a href="../../in-opdracht/">In Opdracht</a></li>
								<li class="menu-itemD"><a href="../../eigen-lijn/">Shop</a></li>
								<li class="menu-itemD"><a href="../../stoffenkiezer/">Stoffenkiezer</a></li>
								<li class="menu-itemD"><a href="#"><div style="width:70px; height:20px;">&nbsp;</div></a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../../over-mij/">Over Mij</a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../../garantie/">Garantie</a></li>
								<li class="menu-itemD"><a href="../../contact/"><button class="button-dark-line button-desktop " onclick="location.href='../../contact'">Contact</button></a></li>
							</ul>
						</nav>
				</div>
			</div>
		</div>

		<div id="space_100"></div>

<!--artikel hero afbeelding   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->


		<div id="space_50"></div>

<!--artikel content   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="advies-content-D">
			<div id="advies-hero-D">
				<img src="../../_images/<? echo $image;?>" class="border-S">
			</div>
			<div id="space_10"></div>
			<h1 class="s36"><? echo $h1;?></h1>
			<div id="advies-intro"><? echo $intro;?></div>


<!--prijs quote blok   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
			<? if ($toon_prijs == "nee") { ?>
			<?}else{?>
				<div id="advies-prijsblok">
					<div id="advies-prijsblok-label"><? echo $prijsblok_label;?></div>
					<div id="advies-prijsblok-prijs">&euro; <? echo $prijs_van;?> - &euro; <? echo $prijs_tot;?></div>
					<div id="advies-prijsblok-context"><? echo $prijs_context;?></div>
				</div>
			<?}?>
<!--body   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
				<div id="advies-body"><? echo $body;?></div>

				<div id="space_50"></div>

<!--contact cta   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
			<div id="meer-eigen-lijn-D-content" style="margin-left:0%; margin-right:0%; width:100%;">
				<h2><? echo $cta_form_beneden;?></h2>

				<div id="space_20"></div>
				<div id="contact-M-acc-1">
					<a href="https://wa.me/31643094294">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een WhatsApp <span class="phone-number">&nbsp;(06 43 094 294)</span></div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
				<div id="contact-M-acc-2">
					<a href="mailto:nina@stamstoffeeratelier.nl">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een mail</div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
				<div id="contact-M-acc-3">
					<a href="https://www.instagram.com/nina.stoffeert/">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een DM via Instagram</div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
			</div>

			<? if ($body2_tonen != "ja") { ?><div id="space_100"></div><? } ?>
			<? if ($body2_tonen == "ja") { ?><div id="space_30"></div><? } ?>
			
			
			
<!--tweede body   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
				<? if ($body2_tonen == "ja") { ?>
				<div id="advies-body"><? echo $body2;?></div>

				<div id="space_50"></div>
				<? } ?>
		
<!--contact cta 2  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
				<? if ($body2_tonen == "ja") { ?>

			<div id="meer-eigen-lijn-D-content" style="margin-left:0%; margin-right:0%; width:100%;">
				<h2><? echo $cta_form_beneden;?></h2>

				<div id="space_20"></div>
				<div id="contact-M-acc-1">
					<a href="https://wa.me/31643094294">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een WhatsApp <span class="phone-number">&nbsp;(06 43 094 294)</span></div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
				<div id="contact-M-acc-2">
					<a href="mailto:nina@stamstoffeeratelier.nl">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een mail</div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
				<div id="contact-M-acc-3">
					<a href="https://www.instagram.com/nina.stoffeert/">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een DM via Instagram</div>
						<div id="contact-M-acc-right"><div id="space_3"></div><img src="../../_images/forward.png" style="height: 13px;"></div>
						<div id="space_20"></div>
					</a>
				</div>
			</div>

			<div id="space_100"></div>
				<? } ?>
		
		</div>
<!--stoffenkiezer desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D-blue">
			<div id="space_50"></div>
			<div id="header-D-content">

						<h1 class="s36 ">Op zoek naar een mooie stof?</h1>
						Kies eenvoudig een stof uit. Zoek je iets anders laat het ons weten.<br>
						Wij werken samen met meerdere leveranciers
						<div id="space_20"></div>
						<button class="button-white-line button-desktop w200" onclick="location.href='../../stoffenkiezer'">Stoffenkiezer</button>
						<div id="space_50"></div>
					
			</div>
			<div id="space_1"></div>
		</div>
			
		<div id="carr-D-blue">
			<div id="carr-D-type1b-firstspace"><div id="space_3"></div></div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=effen">
					<img src="../../_images/stof1.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Effen</div>
					<div id="caroussel-D-title">Hopper Teal</div>
				</a>
			</div>
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=patroon">
					<img src="../../_images/stof2.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Barbados Negro</div>
				</a>
			</div>			
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=buitenstof">
					<img src="../../_images/stof3.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Buitenstof</div>
					<div id="caroussel-D-title">Screen 21-N Oranje/Terra</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=rib">
					<img src="../../_images/stof4.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Rib</div>
					<div id="caroussel-D-title">Runagain Geel</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=velours">
					<img src="../../_images/stof5.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Velours</div>
					<div id="caroussel-D-title">Ikoo Donker Blauw</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>	
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/index.php?category=patroon">
					<img src="../../_images/stof6.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Patroon</div>
					<div id="caroussel-D-title">Gobelin Curry Mini</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			
			<div id="carr-D-type1">
				<div id="space_50"></div>
				<a href="../../stoffenkiezer/">
					<img src="../../_images/meerstoffen.jpg" class="car-image" >
					<div id="caroussel-D-subtitle">Bekijk meer</div>
					<div id="caroussel-D-title">Kies uit meer dan 1000 stoffen</div>
				</a>
			</div>				
			<div id="carr-D-type1-space">&nbsp;</div>				
			<div id="space_50_eigenlijn_anchor"></div>
		</div>			
		
		
		
		
		
<!--Over mij desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="header-D-overmij">
			<div id="space_50"></div>
			<div id="header-D-content">
				<div id="header-D-content-1">
					<a href="../../over-mij/"><img src="../../_images/over-mij-D.jpg" style="width:100%;" class="border-S"></a>

				</div>
				<div id="header-D-content-2">
					<div id="space_20"></div>
					<div id="header-D-content-2-text">
						<h1 class="s36 ">Ik ben Nina Stam</h1>
						"Ik wil vooral mooie meubels maken met unieke stoffen en combinaties"

						<div id="space_20"></div>
						<div id="header-D-buttons">
							<div id="header-D-button1">
								<button class="button-white-line button-desktop w200" onclick="location.href='../../over-mij'">Over mij</button>
							</div>
							<div id="header-D-buttonspace">&nbsp;</div>
							<div id="header-D-button2">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="space_50"></div>
		</div>			

<?
		}
		  if ($device == 'mobile'){
?>
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->

<!--header   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="navigatie-M-sticky">
			<div id="navigatie-M-container">
				<div id="navigatie-M-1">&nbsp;</div>
				<div id="navigatie-M-2">
						<div id="space_20"></div>
						<div id="space_5"></div>
						<a href="../../index.php"><img src="../../_images/logo-klein-hor.png" style="height: 36px;"></a>
				</div>
				<div id="navigatie-M-3">
					<div id="space_20"></div>
					<div id="space_20"></div>
					<a href="../../mobile-menu/">
						<img src="../../_images/hamburger.png" style="width:20px;">
					</a>
				</div>
				<div id="navigatie-M-4">&nbsp;</div>
			</div>
		</div>

<!--artikel hero afbeelding mobile   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="advies-hero-M">
			<img src="../../_images/<? echo $image;?>" style="width:100%;">
		</div>

		<div id="space_20"></div>

<!--artikel content mobile   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="advies-content-M">
			<h1><? echo $h1;?></h1>
			<div id="space_10"></div>
			<div id="advies-intro"><? echo $intro;?></div>

			<? if ($toon_prijs == "nee") { ?>
			<?}else{?>
				<div id="space_20">
				</div><div id="advies-prijsblok">
					<div id="advies-prijsblok-label"><? echo $prijsblok_label;?></div>
					<div id="advies-prijsblok-prijs">&euro; <? echo $prijs_van;?> - &euro; <? echo $prijs_tot;?></div>
					<div id="advies-prijsblok-context"><? echo $prijs_context;?></div>
				</div>
			<?}?>

		
			<div id="advies-body"><? echo $body;?></div>


			
			
		</div>
<!--Mobile CTA  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="meer-eigen-lijn-M">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="meer-eigen-lijn-M-content">
				<h2><? echo $cta_form_beneden;?></h2>

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
		</div>

<!--body TWEE ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<? if ($body2_tonen == "ja") { ?>
			<div id="advies-content-M">
				<div id="advies-body"><? echo $body2;?></div>
			</div>
		<? } ?>
		
<!--Mobile CTA TWEE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<? if ($body2_tonen == "ja") { ?>		
		<div id="meer-eigen-lijn-M">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="meer-eigen-lijn-M-content">
				<h2><? echo $cta_form_beneden;?></h2>

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
		</div>		
		<? } ?>
		
		
		
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
					<a href="../../stoffenkiezer/index.php?category=effen" class="link-white">
					<img src="../../_images/stof1.jpg" class="car-image" >
					<div id="caroussel-M-title">Teal</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../../stoffenkiezer/index.php?category=patroon">
					<img src="../../_images/stof2.jpg"  class="car-image">
					<div id="caroussel-M-title">Gobelin Barbados Negro</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../../stoffenkiezer/index.php?category=buitenstof">
					<img src="../../_images/stof3.jpg"  class="car-image">
					<div id="caroussel-M-title">Buitenstof Terra</div>
					</a>
				</div>	
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../../stoffenkiezer/index.php?category=rib">
					<img src="../../_images/stof4.jpg" class="car-image" >
					<div id="caroussel-M-title">Grove Rib Geel</div>
					</a>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<a href="../../stoffenkiezer/">
					<img src="../../_images/meerstoffen.jpg" class="car-image" >
					<div id="caroussel-M-title">Kies uit meer dan 1000 stoffen</div>
					</a>
				</div>	
				<div id="caroussel-L-M-emptyitem">&nbsp;</div>
				<div id="space_20"></div>
			</div>
			<div id="space_20"></div>
			<div id="blok-top-M-buttons">
				<button class="button-white-line" onclick="location.href='../../stoffenkiezer/index.php'">Stoffenkiezer</button>
			</div>
			<div id="space_50"></div>
			
		</div>	

		<div id="space_50"></div>

		
		
	<!--OVERMIJ   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="blok-bottom-M" class="bg-color-overmij white-text">
			<div id="space_20"></div>
			<div id="space_10"></div>
			<div id="blok-top-M-title">
				<h1 class="s24">Ik ben Nina Stam
			</div>
			<div id="blok-top-M-subtitle">
				"Ik wil vooral mooie meubels maken met unieke stoffen en combinaties" 			
			</div>
			<div id="space_20"></div>
			<div id="blok-top-M-image">
				<a href="../../over-mij/"><img src="../../_images/overmij-m2.jpg" style="width:100%;" class="border-S"></a>
			</div>
			<div id="space_20"></div>
			<div id="blok-top-M-buttons">
				<button class="button-white-line w150" onclick="location.href='../../over-mij'">Over mij</button>
			</div>
			<div id="space_50"></div>


		</div>		
		

<?
		  }
?>

		<? include('../../_includes/footer.php');?>

					<!--GET BROWSER WIDTH  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
					<script>
							function updateSize() {
							var newWidth = '5%';
							if (window.innerWidth > 1555) {
								newWidth = ((window.innerWidth - 1400) / 2) + 'px';
							}

							const ids = [
								"carr-D-type1-firstspace",
								"carr-D-type1b-firstspace",
								"carr-D-type2-firstspace"
							];

							ids.forEach(id => {
								const el = document.getElementById(id);
								if (el) el.style.width = newWidth;
							});
						}

						updateSize();
						window.addEventListener("resize", updateSize);

						
						
					</script>	
			
			
	</body>
</html>
