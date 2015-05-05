<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'bluedb';

if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db)){
	echo 'Cannot connect to Database at the moment';
	die(mysql_error());

}
?>

