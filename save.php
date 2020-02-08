2<?php
include('db.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
//$fname=$_POST['fname'];
//$price=$_POST['price'];
//$lname=$_POST['lname'];
$busnum=$_POST['busnum'];
$setnum=$_POST['setnum'];
//$date=$_POST['date'];
//$contact=$_POST['contact'];
//$route=$_POST['route'];
$uname=$_POST['uname'];
//$qty=$_POST['qty'];
$result = mysql_query("SELECT * FROM route WHERE ID='$busnum'");
while($row = mysql_fetch_array($result))
	{
	$price = $row['Price'];
	}
	$payable=$qty*$price;
	$result_p= mysql_query("Select * From Customer Where UserName='$uname'");
	while($roww=mysql_fetch_array($result_p))
	{
		$pay=$roww['CurrentAmount'];
	}
	$pp=$pay-$payable;
	mysql_query("update Customer set CurrentAmount='$pp' where UserName='$uname'");
/*mysql_query("INSERT INTO customer (fname, lname, address, contact, bus, transactionum, payable, setnumber)
VALUES ('$fname', '$lname', '$address', '$contact', '$busnum', '$confirmation','$payable','$setnum')");
mysql_query("INSERT INTO reserve (date, bus, seat_reserve, transactionnum, seat)
VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum')");*/
header("location: print.php?busnum=$busnum&setnum=$setnum&uname=$uname");
?>
