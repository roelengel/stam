<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Zaanstreek';
	$regio_db = 'Zaanstreek';

	$h1 = 'Herstofferen in de Zaanstreek – Zitmeubilair & Comfort';
	$meta_title = 'Stoffeerder Zaanstreek – Stoelen, Fauteuils & Maatwerk';
	$meta_description = 'Stam Stoffeeratelier stoffeert stoelen, fauteuils en tuinkussens voor klanten in de Zaanstreek. Sterke stoffen en nette afwerking voor elk interieur.';
?>



	
	<? include('../regio.php');?>
