<?php
include('../db.php');
$roomid=$_POST['roomid'];
$FName=$_POST['FirstName'];
$LName=$_POST['LastName'];
$EMail=$_POST['EMail'];
$Phone=$_POST['TelePhone'];
$Address=$_POST['Address'];
$IAmount=$_POST['InitialAmount'];
$UName=$_POST['UserName'];
$Password=$_POST['Password'];
mysql_query("UPDATE Customer Set FirstName='$FName',LastName='$LName',EMail='$EMail',Telephone='$Phone'
,Address='$Address',InitialAmount='$IAmount',UserName='$UName',Password='$Password' Where ID='$roomid'");
header("location: AddCustomer.php");
?>