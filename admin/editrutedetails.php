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
	$result = mysql_query("SELECT * FROM route where ID='$id'");
		while($row = mysql_fetch_array($result))
			{
				$BusType=$row['BusType'];
				$SeatNo=$row['SeatNo'];
				$Driver=$row['Driver'];
				$Level=$row['Level'];
				$Route=$row['Route'];
				$Distance=$row['Distance'];
				$Price=$row['Price'];
				$Elapsed=$row['Elapsed'];
			}
?>
<form action="execeditroute.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Bus Type:<br><input type="text" name="type" value="<?php echo $BusType ?>" class="ed"><br>
	SeatNo:<br><input type="text" name="seat" value="<?php echo $SeatNo ?>" class="ed"><br>
	Driver:<br><textarea name="driver" class="ed"><?php echo $Driver ?></textarea><br>
	Level:<br><input type="text" name="level" value="<?php echo $Level ?>" class="ed"><br>
	Route:<br><input type="text" name="route" value="<?php echo $Route ?>" class="ed"><br>
    Distance:<br><textarea name="distance" class="ed"><?php echo $Distance ?></textarea><br>
	Price:<br><input type="text" name="price" value="<?php echo $Price ?>" class="ed"><br>
	Elapsed:<br><input type="text" name="elapsed" value="<?php echo $Elapsed ?>" class="ed"><br>
	<input type="submit" value="Edit" id="button1">
</form>