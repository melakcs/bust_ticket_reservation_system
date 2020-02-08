<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$BusType=$_POST['type'];
	$Seat=$_POST['seat'];
	$Driver=$_POST['driver'];
	$Level=$_POST['level'];
	$Route=$_POST['route'];
	$Distance=$_POST['distance'];
	$Price=$_POST['price'];
	$Elapsed=$_POST['elapsed'];
	mysql_query("UPDATE route SET BusType='$BusType', SeatNo='$Seat', Driver='$Driver', Level='$Level', Route='$Route',Distance='$Distance',Price='$Price',Elapsed='$Elapsed' WHERE ID='$roomid'");
	header("location: route.php");
?>