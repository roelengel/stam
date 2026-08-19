<html>
	<head>
		<? include('../../_includes/google-analytics.php');?>

		<meta charset="utf-8">
		<title><? echo $seo_title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../../style2.css"/>
		<link type="text/css" rel="stylesheet" href="../style-advies.css"/>

		<meta name="title" content="<? echo $seo_title;?>">
		<meta name="description" content="<? echo $meta_description;?>">

		<meta property="og:title" content="<? echo $seo_title;?>">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/<? echo $image;?>">

		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">

		<link rel="shortcut icon" href="../../_images/ssa-favicon.ico" type="image/x-icon">
		<link rel="icon" href="../../_images/ssa-favicon.ico" type="image/x-icon">
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
		<div id="advies-hero-D">
			<img src="../../_images/<? echo $image;?>" style="width:100%;">
		</div>

		<div id="space_50"></div>

<!--artikel content   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
		<div id="advies-content-D">
			<h1 class="s36"><? echo $h1;?></h1>
			<div id="space_20"></div>
			<div id="advies-intro"><? echo $intro;?></div>

			<div id="space_50"></div>

<!--prijs quote blok   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
			<div id="advies-prijsblok">
				<div id="advies-prijsblok-label"><? echo $prijsblok_label;?></div>
				<div id="advies-prijsblok-prijs">&euro; <? echo $prijs_van;?> - &euro; <? echo $prijs_tot;?></div>
				<div id="advies-prijsblok-context"><? echo $prijs_context;?></div>
			</div>

			<div id="space_50"></div>

			<div id="advies-body"><? echo $body;?></div>

			<div id="space_50"></div>

<!--contact cta   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    -->
			<div id="meer-eigen-lijn-D-content">
				<span style="font-weight:900; font-size:24px;">Benieuwd wat het bij jou kost?</span>
				<div id="space_10"></div>
				Stuur een foto van je meubelstuk en ik geef je een concrete prijsindicatie.
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
			<h1 class="s24"><? echo $h1;?></h1>
			<div id="space_10"></div>
			<div id="advies-intro"><? echo $intro;?></div>

			<div id="space_20"></div>

			<div id="advies-prijsblok">
				<div id="advies-prijsblok-label"><? echo $prijsblok_label;?></div>
				<div id="advies-prijsblok-prijs">&euro; <? echo $prijs_van;?> - &euro; <? echo $prijs_tot;?></div>
				<div id="advies-prijsblok-context"><? echo $prijs_context;?></div>
			</div>

			<div id="space_20"></div>

			<div id="advies-body"><? echo $body;?></div>

			<div id="space_50"></div>

			<div id="meer-eigen-lijn-M-content">
				<span style="font-weight:900; font-size:24px;">Benieuwd wat het bij jou kost?</span>
				<div id="space_10"></div>
				Stuur een foto van je meubelstuk en ik geef je een concrete prijsindicatie.
				<div id="space_20"></div>
				<div id="contact-M-acc-1">
					<a href="https://wa.me/31643094294">
						<div id="space_20"></div>
						<div id="contact-M-acc-left">Stuur een WhatsApp</div>
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

			<div id="space_50"></div>
		</div>

<?
		  }
?>

		<? include('../../_includes/footer.php');?>

	</body>
</html>
