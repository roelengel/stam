<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Beverwijk';
	$regio_db = 'Beverwijk';

	$h1 = 'Herstofferen in Beverwijk – Woning & Horeca';
	$meta_title = 'Stoffeerder Beverwijk – Stoelen, Fauteuils & Horeca';
	$meta_description = 'Voor Beverwijk stoffeert Stam Stoffeeratelier stoelen, fauteuils en horecameubilair. Sterke materialen en nette afwerking voor intensief gebruik.';
?>


	
	<? include('../regio.php');?>
