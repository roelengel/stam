<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );


	$title = $_GET['title'];
	$id = $_GET['id'];

	include ('../_includes/mobile_check.php');

					$sql->Query("SELECT * FROM stoffen_3 WHERE  id = $id ");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$name = $sql->data[name];
							$active = $sql->data[active];
							$category = $sql->data[category];
							$url = $sql->data[url];
							$counter = $counter + "1";
							
							
								$last3_of_url = substr($url, -3);
								if($last3_of_url == 'jpg'){
									$url_full_image = rtrim($url, ".jpg");
									//$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpg";
									$url_full_image = $url_full_image.$extension;
								}
								if($last3_of_url == 'peg'){
									$url_full_image = rtrim($url, ".jpeg");
									//$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpeg";
									$url_full_image = $url_full_image.$extension;
								}
								if($last3_of_url == 'ebp'){
									$url_full_image = rtrim($url, ".jpeg");
									//$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".webp";
									$url_full_image = $url_full_image.$extension;
								}	
							
						}
?>

<html>
	<head>
		<? include('../_includes/google-analytics.php');?>

		
		<meta charset="utf-8">
		<title>Stam Stoffeeratelier | kies een mooie stof</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="../style2.css"/>
		<link type="text/css" rel="stylesheet" href="style-stoffenkiezer.css"/>
		
		<meta name="title" content="Stam Stoffeeratelier | kies een mooie stof">
		<meta name="description" content="Een mooie stof uitkiezen is nog best ingewikkeld. Kies bij Stam Stoffeeratelier een mooie stof met onze handige tool.">
		
		<meta property="og:title" content="Stam Stoffeeratelier | kies een mooie stof">
		<meta property="og:image" content="https://www.stamstoffeeratelier.nl/_images/social2.jpg">	
		
	
		<!--adobe font   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<link rel="stylesheet" href="https://use.typekit.net/vna7rrh.css">
	</head>
	<body style="background-color:#230702; color:#ffffff;">

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
		

		<div id="space_50"></div>
			<div id="stof-D-fullscreen-container">
				<div id="space_1">
				<div id="stof-D-fullscreen-container1">
					<div id="space_5"></div>
					<a onclick="history.back()" style="cursor:pointer;">
						<img src="../_images/back-white.png" style="height:13px;">&nbsp;&nbsp; terug 
					</a>
				</div>
				<div id="stof-D-fullscreen-container2">
					<h2 style="margin:0px;"><? echo $name;?></h2>
				</div>
				<div id="stof-D-fullscreen-container3">
					&nbsp;
				</div>
				<div id="space_20"></div>
				<a onclick="history.back()" style="cursor:pointer;"><img src="<? echo $url_full_image;?>" style="width:100%;" ></a>
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

		
<!--navigatie   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigatie-M" style="background-color:#230702; border:0px; height:70px;">
			<div id="space_10"></div>
			<div id="space_10"></div>
			<div id="navigatie-M-container">
				<div id="navigatie-M-space">&nbsp;</div>
				<a onclick="history.back()" style="cursor:pointer;">
				<div id="navigatie-M-back">
					<div id="space_10"></div>
					<img src="../_images/back-white.png" style="height:13px;">
				</div>
				</a>
				<div id="navigatie-M-text">
					<div id="space_5"></div>
					<? echo $name;?>
				</div>
				<div id="navigatie-M-logo"><img src="../_images/logo-icon.png" style="width:30px;"></div>
				<div id="navigatie-M-space">&nbsp;</div>
			</div>			
		</div>
				<div id="space_20"></div>
				<a onclick="history.back()" style="cursor:pointer;"><img src="<? echo $url_full_image;?>" style="width:100%;" ></a>
	
		
		
<!--end of mobile check   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?
		  }
?>		
		
		
		
	</body>
</html>