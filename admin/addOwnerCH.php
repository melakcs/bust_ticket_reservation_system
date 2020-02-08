<?php
include('../db.php');

$sql="CREATE DATABASE IF NOT EXISTS Bus_Station";
if (mysql_query($sql,$bd))
  {
  echo "Database Bus Station created successfully ";
  }
else
  {
  echo "Error creating database: " . mysql_error($bd);
  }
  // Connect to server and select databse.
mysql_select_db("Bus_Station",$bd);
// Create table
$sql_Table="CREATE TABLE IF NOT EXISTS Owner(ID Int Not Null,OName CHAR(30),BusId Int,Address CHAR(30),TelePhone CHAR(12),Primary Key(ID))";
$sql_Table_run=mysql_query($sql_Table,$bd);
$ID = $_POST['id'];
$oname= $_POST['oname'];
$busid= $_POST['busid'];
$address= $_POST['address'];
$tele= $_POST['tele'];
$Insert="INSERT INTO Owner(ID,OName,BusId, Address,TelePhone)
VALUES
('$ID','$oname','$busid','$address','$tele')";
$Insert_run=mysql_query($Insert,$bd);
if($Insert_run)
{
header("location: AddOwner.php");
}
else
{
	echo "asdas". mysql_error($bd);
}

?>
