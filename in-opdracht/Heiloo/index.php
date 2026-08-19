<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Heiloo';
	$regio_db = 'Heiloo';

	$h1 = 'Stoffeerder Heiloo – Stoelen, Fauteuils & Tuinkussens';
	$meta_title = 'Herstofferen in Heiloo – Zitcomfort & Maatwerk';
	$meta_description = 'Stam Stoffeeratelier helpt klanten in Heiloo met het stofferen van stoelen, fauteuils en tuinkussens. Duurzame materialen en vakmanschap voor langdurig zitcomfort.';


?>


	
	<? include('../regio.php');?>
