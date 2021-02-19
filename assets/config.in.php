<?php
/*$cn = mysql_connect("localhost","root","");
mysql_query("use admin_rplbooking");*/
$cn = mysql_connect("localhost","admin_royal","rpldb@120160");
mysql_query("use admin_rplbooking");
/* $cn = mysql_connect("172.29.31.60","club","hrapsl");
mysql_query("use club2016"); */
/* $cn = mysql_connect("localhost","interhom_ecommerce","pa$$w0rd");
mysql_query("use interhom_ecommerce"); */

/*'hostname' => 'localhost',
	'username' => 'admin_royal',
	'password' => 'royal@123',
	'database' => 'admin_rplbooking',*/

mysql_query("SET NAMES utf8");
if(!$cn){
	echo "Error Connect Database  <br>";
	exit;
}
?>
