<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );


	$Categorie_Selectie = $_GET['category'];

	include ('../_includes/mobile_check.php');
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
								<li class="menu-itemD"><a href="../eigen-lijn/">Shop</a></li>
								<li class="menu-itemD"><a href="#"><span class="active-D">Stoffenkiezer</span></a></li>
								<li class="menu-itemD"><a href="#"><div style="width:70px; height:20px;">&nbsp;</div></a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../over-mij/">Over Mij</a></li>
								<li class="menu-itemD menu-itemD-small"><a href="../garantie/">Garantie</a></li>
								<li class="menu-itemD"><a href="../contact/"><button class="button-dark-line button-desktop " onclick="location.href='../contact'">Contact</button></a></li>
							</ul>
						</nav>
				</div>				
			</div>
		</div>

		
<!--Filter desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="filter-D">
			<div id="filter-D-content">
				<div id="space_20"></div>
				<div id="space_5"></div>
				<center>
				<div id="filter-D-content-box">
					<? if ($Categorie_Selectie == ''){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>
					<? if ($Categorie_Selectie == 'effen'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'rib'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>
					<? if ($Categorie_Selectie == 'boucle'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>	
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'velours'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>
					<? if ($Categorie_Selectie == 'patroon'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'skaileer'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=skaileer"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Skaileer</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'buitenstof'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>				
				
				</div>
				</center>
				<div id="space_20"></div>
			</div>
		</div>

<!--stoffen items desktop   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="space_100"></div>
		<div id="space_100"></div>
		<div id="space_20"></div>
		<div id="space_10"></div>
		<div id="items-D">
			<div id="items-D-content">
				
				<div id="items-D-item">
					<div id="items-D-item-intro">
						<div id="space_10"></div>
						<div id="items-D-item-intro-content">
					<?
							if ($Categorie_Selectie == ''){
							?><h1 class="s24">Effen stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.  <?
							}
							elseif ($Categorie_Selectie == 'effen'){
							?><h1 class="s24">Effen stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}			
							elseif ($Categorie_Selectie == 'rib'){
							?><h1 class="s24">Rib stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}	
							elseif ($Categorie_Selectie == 'boucle'){
							?><h1 class="s24">Boucl&#233; stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}								  
							elseif ($Categorie_Selectie == 'velours'){
							?><h1 class="s24">Velours stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}
							elseif ($Categorie_Selectie == 'patroon'){
							?><h1 class="s24">Patroonstoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}									   
							elseif ($Categorie_Selectie == 'skaileer'){
							?><h1 class="s24">Skaileer</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken. <?
							}	
							elseif ($Categorie_Selectie == 'buitenstof'){
							?><h1 class="s24">Buitenstoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}	
					?>
						</div>
					</div>
				</div>
				<div id="items-D-item-space"></div>
				
				
			<? $counter = "1";?>
			<?
					if ($Categorie_Selectie == ''){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Effen' ORDER BY id ASC ");
					}
					elseif ($Categorie_Selectie == 'effen'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Effen' ORDER BY id ASC ");
					}			
					elseif ($Categorie_Selectie == 'rib'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Rib' ORDER BY id ASC ");
					}	
					elseif ($Categorie_Selectie == 'boucle'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Boucle' ORDER BY id ASC ");
					}									  
					elseif ($Categorie_Selectie == 'velours'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Velours' ORDER BY id ASC ");
					}
					elseif ($Categorie_Selectie == 'patroon'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Patroon' ORDER BY id ASC ");
					}									   
					elseif ($Categorie_Selectie == 'skaileer'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Skaileer' ORDER BY id ASC ");
					}	
					elseif ($Categorie_Selectie == 'buitenstof'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Buitenstof' ORDER BY id ASC ");
					}									   
								   
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$name = ucwords($sql->data['name']);
							$active = $sql->data[active];
							$category = $sql->data[category];
							$url = $sql->data[url];
							$counter = $counter + "1";
							
							
								$last3_of_url = substr($url, -3);
								if($last3_of_url == 'jpg'){
									$url_full_image = rtrim($url, ".jpg");
									$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpg";
									$url_full_image = $url_full_image.$extension;
								}
								if($last3_of_url == 'peg'){
									$url_full_image = rtrim($url, ".jpeg");
									$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpeg";
									$url_full_image = $url_full_image.$extension;
								}							
							
					?>				
				<div id="items-D-item">
					<div id="items-D-item-container">
						<a href="full-picture-stof.php?title=<? echo $name;?>&id=<? echo $id;?>">
						<div id="items-D-item-image" style="background-image: url('<? echo $url;?>'); background-size:cover; background-position: center center;"></div>
						</a>
						<div id="items-D-item-text">
							<div id="stof-D-right-content">
								<div id="stof-D-right-content-top"></div>
								<div id="stof-D-right-content-text">
									<div id="stof-D-right-content-text-container">
										<div id="stof-D-cat" style="clear:both;"><? echo $category;?></div>
										<div id="stof-D-name"><? echo $name;?> </div>
									</div>
								</div>
								<div id="stof-D-right-content-share">
									<a href="mailto:nina@stamstoffeeratelier.nl?subject=Ik vind deze stof wel iets: <? echo $name; ?> (categorie <? echo $category;?>) | www.stamstoffeeratelier.nl/stoffenkiezer/full-picture-stof.php?id=<? echo $id;?>"><img src="../_images/send-dark.png" style="width:20px;"></a>
								</div>
								<div id="stof-D-right-content-bottom"></div>
							</div>						
						
						</div>
					</div>
				</div> 
				<? if ($counter != 3 && $counter != 6 && $counter != 9  && $counter != 12  && $counter != 15  && $counter != 18 && $counter != 21   && $counter != 24  && $counter != 27  && $counter != 30  && $counter != 33  && $counter != 36  && $counter != 39  && $counter != 42  && $counter != 45  && $counter != 48 && $counter != 51  && $counter != 54  && $counter != 57 && $counter != 60  && $counter != 63  && $counter != 66  && $counter != 69  && $counter != 72  && $counter != 75  && $counter != 78  && $counter != 81  && $counter != 84  && $counter != 87  && $counter != 90  && $counter != 93  && $counter != 96  && $counter != 99  && $counter != 102   && $counter != 105   && $counter != 108   && $counter != 111   && $counter != 114   && $counter != 117   && $counter != 120   && $counter != 123   && $counter != 126   && $counter != 129   && $counter != 132   && $counter != 135   && $counter != 138   && $counter != 141   && $counter != 144   && $counter != 147   && $counter != 150   && $counter != 153   && $counter != 156   && $counter != 159   && $counter != 162   && $counter != 165   && $counter != 168    ){?><div id="items-D-item-space"></div><?}?>
				
				
<?
					}
?>
				<div id="space_50"></div>
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
		<div id="navigatie-M">
			<div id="space_10"></div>
			<div id="space_10"></div>
			<div id="navigatie-M-container">
				<div id="navigatie-M-space">&nbsp;</div>
				<a href="../index.php">
				<div id="navigatie-M-back">
					<div id="space_10"></div>
					<img src="../_images/back.png" style="height:13px;">
				</div>
				</a>
				<div id="navigatie-M-text">
					<div id="space_5"></div>
					Kies een stof
				</div>
				<div id="navigatie-M-logo"><a href="../index.php"><img src="../_images/logo-icon.png" style="width:30px;"></a></div>
				<div id="navigatie-M-space">&nbsp;</div>
			</div>
			<div id="space_20"></div>
			<div id="navigatie-M-container">
				<div id="navigatie-M-tags">
					<? if ($Categorie_Selectie == ''){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>					
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>
					<? if ($Categorie_Selectie == 'effen'){?>
					<a href="index.php?category=effen"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'rib'){?>
					<a href="index.php?category=rib"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>						

					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>	
					<? if ($Categorie_Selectie == 'boucle'){?>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Boucl&#233;</div></a>	
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					

					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>						
					<? if ($Categorie_Selectie == 'velours'){?>
					<a href="index.php?category=velours"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>						
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>
					<? if ($Categorie_Selectie == 'patroon'){?>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>						
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'skaileer'){?>
					<a href="index.php?category=skaileer"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Skaileer</div></a>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>						
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Buitenstof</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					<? if ($Categorie_Selectie == 'buitenstof'){?>
					<a href="index.php?category=buitenstof"><div id="navigatie-M-tag-active" class="navigatie-M-tag-space-left"><div id="space_8"></div>Buitenstof</div></a>
					<a href="index.php?category=effen"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Effen</div></a>
					<a href="index.php?category=rib"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Rib</div></a>
					<a href="index.php?category=boucle"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Boucl&#233;</div></a>						
					<a href="index.php?category=velours"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Velours</div></a>
					<a href="index.php?category=patroon"><div id="navigatie-M-tag" class="navigatie-M-tag-space-between"><div id="space_8"></div>Patroon</div></a>
					<div id="navigatie-M-tag-laatstespace"></div>
					<?}?>					
					
				</div>
			</div>			
		</div>
		
		
<!--content info block  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_100"></div>
		<div id="space_50"></div>
		<div id="info-M">
			<div id="info-M-content">
				<div id="space_20"></div>
				<div id="info-M-content-space">&nbsp;</div>
				<div id="info-M-content-content">
			<?
							if ($Categorie_Selectie == ''){
							?><h1 class="s24">Effen stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.  <?
							}
							elseif ($Categorie_Selectie == 'effen'){
							?><h1 class="s24">Effen stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}			
							elseif ($Categorie_Selectie == 'rib'){
							?><h1 class="s24">Rib stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}	
							elseif ($Categorie_Selectie == 'boucle'){
							?><h1 class="s24">Boucl&#233; stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}								  
							elseif ($Categorie_Selectie == 'velours'){
							?><h1 class="s24">Velours stoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}
							elseif ($Categorie_Selectie == 'patroon'){
							?><h1 class="s24">Patroonstoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}									   
							elseif ($Categorie_Selectie == 'skaileer'){
							?><h1 class="s24">Skaileer</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken. <?
							}	
							elseif ($Categorie_Selectie == 'buitenstof'){
							?><h1 class="s24">Buitenstoffen</h1>Je ziet hier een kleine selectie. Ik heb een groot assortiment aan prachtige stoffen in allerlei verschillende prijsklassen. Kom langs om alle stoffen te bekijken.<?
							}	
			?>
					
				</div>
				<div id="info-M-content-space">&nbsp;</div>
				<div id="space_20"></div>
			</div>
		</div>
		
		<div id="space_20"></div>
		
<!--content items  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		
		<div id="items-M">
			<div id="items-M-content">
			
			

			<?
					if ($Categorie_Selectie == ''){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Effen' ORDER BY id ASC ");
					}
					elseif ($Categorie_Selectie == 'effen'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Effen' ORDER BY id ASC ");
					}			
					elseif ($Categorie_Selectie == 'rib'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Rib' ORDER BY id ASC ");
					}
					elseif ($Categorie_Selectie == 'boucle'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Boucle' ORDER BY id ASC ");
					}								   
					elseif ($Categorie_Selectie == 'velours'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Velours' ORDER BY id ASC ");
					}
					elseif ($Categorie_Selectie == 'patroon'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Patroon' ORDER BY id ASC ");
					}									   
					elseif ($Categorie_Selectie == 'skaileer'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Skaileer' ORDER BY id ASC ");
					}	
					elseif ($Categorie_Selectie == 'buitenstof'){
					$sql->Query("SELECT * FROM stoffen_4_to_be_sure WHERE  active = 'ja' AND category = 'Buitenstof' ORDER BY id ASC ");
					}									   
								   
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$id = $sql->data[id];
							$name = ucwords($sql->data['name']);
							$active = $sql->data[active];
							$category = $sql->data[category];
							$url = $sql->data[url];
							
								$last3_of_url = substr($url, -3);
								if($last3_of_url == 'jpg'){
									$url_full_image = rtrim($url, ".jpg");
									$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpg";
									$url_full_image = $url_full_image.$extension;
								}
								if($last3_of_url == 'peg'){
									$url_full_image = rtrim($url, ".jpeg");
									$url_full_image = substr($url_full_image, 0, -8) . "\n";
									$extension = ".jpeg";
									$url_full_image = $url_full_image.$extension;
								}						
?>
						<!-- opzet met 100% width tiles
						<div id="item-M">
							<div id="item-M-image" style="background-image: url('<? echo $url;?>'); background-size:cover; background-position: center center;"></div>
							<div id="space_20"></div>
							<div id="item-M-text">
								<div id="item-M-text-space">&nbsp;</div>
								<div id="item-M-text-titel">
									<div id="item-M-text-titel-cat"><? echo $category;?></div>
									<div id="item-M-text-titel-name"><? echo $name;?></div>
								</div>
								<div id="item-M-text-share">
									<div id="space_8"></div>
									<a href="https://wa.me/31643094294/?text=Ik vind deze stof wel iets: <? echo $name; ?> (categorie <? echo $category;?>)"><img src="../_images/send-dark.png" style="width:20px;"></a>
								</div>
								<div id="item-M-text-space">&nbsp;</div>
							</div>
							<div id="space_20"></div>
						</div>
						<div id="space_20"></div>
						<div id="space_10"></div>
						-->
						<div id="list-M">
							<a href="full-picture-stof.php?title=<? echo $name;?>&id=<? echo $id;?>">
							<div id="list-M-left" style="background-image: url('<? echo $url;?>'); background-size:cover; background-position: center center;"></div>
							</a>
							<div id="list-M-right">
								<div id="list-M-right-space">&nbsp;</div>
								<div id="list-M-right-content">
									<div id="list-M-right-content-top"></div>
									<div id="list-M-right-content-text">
										<div id="list-M-right-content-text-container">
											<div id="list-M-cat" style="clear:both;"><? echo $category;?></div>
											<div id="list-M-name"><? echo $name;?></div>
										</div>
									</div>
									<div id="list-M-right-content-share">
										<a href="https://wa.me/31643094294/?text=Ik vind deze stof wel iets: <? echo $name; ?> (categorie <? echo $category;?>) | www.stamstoffeeratelier.nl/stoffenkiezer/full-picture-stof.php?id=<? echo $id;?>"><img src="../_images/send-dark.png" style="width:20px;"></a>
									</div>
									<div id="list-M-right-content-bottom"></div>
								</div>
								<div id="list-M-right-space">&nbsp;</div>
							</div>
						</div>
						<div id="space_20"></div>
						<div id="space_10"></div>				
		
<?
						}
?>
		
			</div>
		</div>		
		
		
		
<!--end of mobile check   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?
		  }
?>		
		
		
		<? include('../_includes/footer.php');?>



	</body>
</html>