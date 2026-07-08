<?
	include ('../../_includes/mobile_check.php');

	require("../../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );	

	$regio = 'Beverwijk';
	$regio_db = 'Beverwijk';

?>


	
	<? include('../regio.php');?>
