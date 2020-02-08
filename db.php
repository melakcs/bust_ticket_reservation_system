<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "Bus_Station";
$prefix = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
$CDB = mysql_query("Create Database IF NOT EXISTS Bus_Station");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>