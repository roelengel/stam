<?
	include ('../_includes/mobile_check.php');



?>
<html>
	<head>
		<? include('../_includes/google-analytics.php');?>


		<meta charset="utf-8">
		<title>Garantievoorwaarden</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		

		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">

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
		<div id="navigatie-D">
			<div id="navigatie-D-content">
				<div id="navigatie-D-1"><a href="../index.php"><img src="../_images/logo-klein-hor.png" style="height: 35px; margin-top:17px;"></a></div>
				<div id="navigatie-D-2">
						<nav>
							<ul>
								<li class="menu-itemD"><a href="../index.php">Home</a></li>
								<li class="menu-itemD"><a href="../in-opdracht/">In Opdracht</a></li>
								<li class="menu-itemD"><a href="../eigen-lijn/">Shop</a></li>
								<li class="menu-itemD"><a href="../stoffenkiezer/">Stoffenkiezer</a></li>
								<li class="menu-itemD"><a href="#"><div style="width:70px; height:20px;">&nbsp;</div></a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../over-mij/">Over Mij</a></li>
								<li class="menu-itemD menu-itemD-small"><a href="index.php"><span class="active-D">Garantie</span></a></li>
								<li class="menu-itemD"><a href="../contact"><button class="button-dark-line button-desktop " onclick="location.href='../contact'">Contact</button></a></li>
							</ul>
						</nav>

				</div>				
			</div>
		</div>	
		<div id="space_100"></div>
		<div id="space_50"></div>
		
		<div id="small-content">

				<div id="meer-eigen-lijn-M-content">
					<span style="font-size:24px; font-weight:900;">Garantievoorwaarden</span>
					<div id="space_20"></div>
					<div id="space_10"></div>
					Na aankoop heeft u 1 jaar garantie op de stoffering van uw meubel bij normaal gebruik.<br><br>
					Wat valt onder deze garantie:<br>
					<ul>
						<li>het loslaten van naden</li>
						<li>het loslaten van knopen</li>
						<li>het loslaten van nietjes</li>
					</ul>
					
					<br><br>
					Wat valt niet onder deze garantie:<br>
					<ul>
						<li>slijtage</li>
						<li>beschadigingen door huisdieren, scherpe voorwerpen of sigaretten</li>
					</ul>
					
					<br><br>					


					
					
						 
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
		
		
<!--header   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
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

		
<!--contactopties   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	

		<div id="space_100"></div>
		<div id="meer-eigen-lijn-M">
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="meer-eigen-lijn-M-content">
					<span style="font-size:24px; font-weight:900;">Garantievoorwaarden</span>
					<div id="space_20"></div>
					<div id="space_10"></div>
					Na aankoop heeft u 1 jaar garantie op de stoffering van uw meubel bij normaal gebruik.<br><br>
					Wat valt onder deze garantie:<br>
					<ul>
						<li>het loslaten van naden</li>
						<li>het loslaten van knopen</li>
						<li>het loslaten van nietjes</li>
					</ul>
					
					<br><br>
					Wat valt niet onder deze garantie:<br>
					<ul>
						<li>slijtage</li>
						<li>beschadigingen door huisdieren, scherpe voorwerpen of sigaretten</li>
					</ul>
					
					<br><br>					


					
					
						 
				</div>
				
		</div>
		
<?
		  }
?>
	
		<? include('../_includes/footer.php');?>
		
	</body>
</html>