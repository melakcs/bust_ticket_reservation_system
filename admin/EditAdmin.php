<?php
include('../db.php');
$roomid=$_POST['roomid'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("UPDATE admin Set username='$username',password='$password' Where id='$roomid'");
header("location: dashboard.php");
?>