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
$sql_Table="CREATE TABLE IF NOT EXISTS Customer(ID Int Not Null,FirstName CHAR(30),LastName CHAR(30),EMail CHAR(30),TelePhone CHAR(12),Address CHAR(30),InitialAmount Int,CurrentAmount Int,UserName CHAR(30),Password CHAR(30),Primary Key(ID))";
$sql_Table_run=mysql_query($sql_Table,$bd);
$ID = $_POST['ID'];
$FName= $_POST['FName'];
$LName= $_POST['LName'];
$Email= $_POST['Email'];
$Phone= $_POST['Phone'];
$Address= $_POST['Address'];
$IAmount= $_POST['IAmount'];
$CAmount= $_POST['CAmount'];
$UName= $_POST['UName'];
$Pass= $_POST['Pass1'];
$Insert="INSERT INTO Customer (ID, FirstName, LastName, EMail,TelePhone,Address,InitialAmount,CurrentAmount,UserName,Password)
VALUES
('$ID','$FName','$LName','$Email','$Phone','$Address','$IAmount','$CAmount','$UName','$Pass')";
$Insert_run=mysql_query($Insert,$bd);
$select=mysql_query("Select InitialAmount,CurrentAmount From Customer");
while($row=mysql_fetch_array($select))
{	
	$InitialA=$row['InitialAmount'];
	$CurrentA=$row['CurrentAmount'];
}
 $res=mysql_query("Update Customer Set CurrentAmount=$InitialA Where InitialAmount='$InitialA'");
 if($res)
 {
	 echo "Success";
 }
 else
 {
	 echo "Failure";
 }
 
//header("location: AddCustomer.php");
?>
