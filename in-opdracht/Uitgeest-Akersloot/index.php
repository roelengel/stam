<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Uitgeest &#38; Akersloot';
	$regio_db = 'Uitgeest-Akersloot';

	$h1 = 'Herstofferen in Uitgeest & Akersloot – Zitcomfort op Maat';
	$meta_title = 'Stoffeerder Uitgeest & Akersloot – Stoelen, Fauteuils & Maatwerk';
	$meta_description = 'Stam Stoffeeratelier helpt klanten in Uitgeest en Akersloot met het stofferen van stoelen, fauteuils en maatwerk kussens. Sterke stoffen en vakwerk voor langdurig gebruik.';



?>


	
	<? include('../regio.php');?>
