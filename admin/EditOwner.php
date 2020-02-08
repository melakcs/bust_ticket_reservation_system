<?php
include('../db.php');
$roomid=$_POST['roomid'];
$OName=$_POST['OName'];
$Phone=$_POST['TelePhone'];
$Address=$_POST['Address'];
$BusId=$_POST['BusID'];
mysql_query("UPDATE Owner Set OName='$OName',BusId='$BusId',Telephone='$Phone'
,Address='$Address' Where ID='$roomid'");
header("location: AddOwner.php");
?>