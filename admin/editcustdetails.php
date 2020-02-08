<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../db.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM customer where ID='$id'");
		while($row = mysql_fetch_array($result))
			{
				$FirstName=$row['FirstName'];
				$LastName=$row['LastName'];
				$EMail=$row['EMail'];
				$Telephone=$row['TelePhone'];
				$Address=$row['Address'];
				$InitialAmount=$row['InitialAmount'];
				$CurrentAmount=$row['CurrentAmount'];
				$UserName=$row['UserName'];
				$Password=$row['Password'];
			}
?>
<form action="EditCust.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id']; ?>" class="ed"><br>
	First Name:<br><input type="text" name="FirstName" value="<?php echo  $FirstName?>" class="ed"><br>
	Last Name:<br><input type="text" name="LastName" value="<?php echo  $LastName?>" class="ed"><br>
    E-Mail:<br><input type="text" name="EMail" value="<?php echo  $EMail?>" class="ed"><br>
	Phone Number:<br><input type="text" name="TelePhone" value="<?php echo  $Telephone?>" class="ed"><br>
Address:<br><input type="text" name="Address" value="<?php echo  $Address?>" class="ed" placeholder="Town"><br>
    Initial Amount:<br><input type="text" name="InitialAmount" value="<?php echo  $InitialAmount?>" class="ed"><br>
	User Name:<br><input type="text" name="UserName" value="<?php echo  $UserName?>" class="ed"><br>
	Password:<br><input type="text" name="Password" value="<?php echo  $Password;?>" class="ed"><br>
	<input type="submit" value="Edit" id="button1">
</form>
