<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Haarlem';
	$regio_db = 'Haarlem';

	$h1 = 'Herstofferen in Haarlem – Design & Vakmanschap';
	$meta_title = 'Stoffeerder Haarlem – Stoelen, Fauteuils & Design';
	$meta_description = 'Voor Haarlem stoffeert Stam Stoffeeratelier stoelen, fauteuils en maatwerk kussens. Perfecte afwerking en duurzame materialen voor moderne en klassieke interieurs.';


?>


	
	<? include('../regio.php');?>
