<?
	include ('../_includes/mobile_check.php');



?>
<html>
	<head>
		<? include('../_includes/google-analytics.php');?>

		
		<meta charset="utf-8">
		<title>Menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		<link type="text/css" rel="stylesheet" href="style-mobile-menu.css"/>
		

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
		
		
Deze pagina werkt alleen op jouw mobiele telefoon. We zijn er mee bezig!
		
		
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
					<div id="space_3"></div>
					<a onclick="history.back()">
						<img src="../_images/cross.png" style="width:16px;">
					</a>
				
				</div>
				<div id="navigatie-M-4">&nbsp;</div>
			</div>
		</div>
		
		
		
		<div id="mobile-menu-page">
			<div id="space_100"></div>
			<div id="space_20"></div>
			<a href="../index.php" class="focus-in-expand">Home</a>
			<div id="space_30"></div>
			
			<a href="../in-opdracht/" class="focus-in-expand">In opdracht</a>
			<div id="space_10"></div>
			<a href="../eigen-lijn/" class="focus-in-expand">Shop</a>
			<div id="space_10"></div>
			<a href="../stoffenkiezer/" class="focus-in-expand">Stoffenkiezer</a>
			<div id="space_50"></div>
			
			<a href="../over-mij" class="focus-in-expand menu-itemD-smallmobile">Over mij</a>
			<div id="space_10"></div>
			<a href="../garantie" class="focus-in-expand menu-itemD-smallmobile">Garantie</a>
			<div id="space_10"></div>
			
			<a href="../contact"><button class="button-dark-line button-desktop focus-in-expand w150" onclick="location.href='../contact/'">Contact</button></a>
		</div>
		
<?
		  }
?>
	

		
	</body>
</html>