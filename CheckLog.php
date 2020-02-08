<?php
session_start();
include('db.php');
mysql_select_db("Bus_Station",$bd)or die("cannot select DB");


$myusername=$_POST['usernameu'];
$mypassword=$_POST['passwordu'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM Customer WHERE UserName='$myusername' and Password = '$mypassword'";
$result=mysql_query($sql,$bd);

$count=mysql_num_rows($result);

if($count==1){
$_SESSION['usernameu'] = $_POST['usernameu'];
header("location:indexs.php");
}
else
{
	header("location:index.php");
}
?>