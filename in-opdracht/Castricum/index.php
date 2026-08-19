<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Castricum';
	$regio_db = 'Castricum';

	$h1 = 'Herstofferen in Castricum – Zitmeubilair & Maatwerk';
	$meta_title = 'Stoffeerder Castricum – Stoelen, Fauteuils & Horeca';
	$meta_description = 'Stam Stoffeeratelier stoffeert stoelen, fauteuils en horecameubilair voor klanten in Castricum. Duurzame stoffen en perfecte afwerking voor elke stijl.';


?>


	
	<? include('../regio.php');?>
