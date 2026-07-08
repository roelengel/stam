<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Zaanstreek';
	$regio_db = 'Zaanstreek';

?>


	
	<? include('../regio.php');?>
