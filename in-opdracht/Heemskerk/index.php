<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Heemskerk';
	$regio_db = 'Heemskerk';

	$h1 = 'Stoffeerder in Heemskerk – Specialist in Zitcomfort';
	$meta_title = 'Stoffeerder Heemskerk – Stoelen, Fauteuils & Tuinkussens';
	$meta_description = 'Stam Stoffeeratelier helpt klanten in Heemskerk met het stofferen van stoelen, fauteuils en tuinkussens. Vakwerk, duurzame stoffen en perfecte afwerking.';


?>


	
	<? include('../regio.php');?>
