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
$sql_Table="CREATE TABLE IF NOT EXISTS Route(ID Int Not Null,BusType varchar(30),SeatNo Int,Driver varchar(30),Level Int,Route varchar(40),Distance Int,Elapsed varchar(6),Price Int,Primary Key(ID))";
$sql_Table_run=mysql_query($sql_Table,$bd);
$id=$_POST['id'];
$type=$_POST['type'];
$seat=$_POST['seat'];
$driver=$_POST['driver'];
$level=$_POST['level'];
$route=$_POST['route'];
$distance=$_POST['distance'];
$elapsed=$_POST['elapsed'];
$price=$_POST['price'];
$Insert="INSERT INTO Route(ID,BusType,SeatNo,Driver,Level,Route,Distance,Elapsed,Price) Values ('$id','$type','$seat','$driver','$level','$route','$distance','$elapsed','$price')";
$Insert_run=mysql_query($Insert,$bd);
header("location: Route.php");

?>