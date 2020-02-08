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
	$result = mysql_query("SELECT * FROM Owner where ID='$id'");
		while($row = mysql_fetch_array($result))
			{
				$OName=$row['OName'];
				$BusID=$row['BusId'];
				$Address=$row['Address'];
				$Telephone=$row['TelePhone'];
			}
?>
<form action="EditOwner.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id']; ?>" class="ed"><br>
	Owner Name:<br><input type="text" name="OName" value="<?php echo  $OName?>" class="ed"><br>
	Bus ID:<br><input type="text" name="BusID" value="<?php echo  $BusID?>" class="ed"><br>
	Phone Number:<br><input type="text" name="TelePhone" value="<?php echo  $Telephone?>" class="ed"><br>
Address:<br><input type="text" name="Address" value="<?php echo  $Address?>" class="ed" placeholder="Town"><br>
	<input type="submit" value="Edit" id="button1">
</form>
