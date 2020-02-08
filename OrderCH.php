<?php
include'db.php';
$sql="CREATE DATABASE IF NOT EXISTS Bus_Station";
if (mysql_query($sql,$bd))
  {
  //echo "Database Bus Station created successfully ";
  }
else
  {
  echo "Error creating database: " . mysql_error($bd);
  }
  // Connect to server and select databse.
mysql_select_db("Bus_Station",$bd);
// Create table
$sql_Table = "CREATE TABLE IF NOT EXISTS Orders (ID Int Not Null Auto_Increment,
FirstName Varchar(30),
LastName Varchar(30),
UserName Varchar(30),
InitialAmount Int,
CurrentAmount Int,
Route Varchar(30),
BusType Varchar(30),
Price Int,
Driver Varchar(30),
Level Int,
Date Varchar(12),
SeatSum Int,
Seat Varchar(30),
Primary Key(ID,UserName)
)ENGINE=InnoDB;";
$sql_Table_run=mysql_query($sql_Table);
/*if (mysql_query($sql_Table_run,$bd))
  {
  echo "Table Orders Created successfully";
  }
else
  {
  echo "Error creating table: " . mysql_error($bd);
  }*/
$uname=$_POST['uname'];
$route=$_POST['route'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$Insert="Insert Into Orders(FirstName,LastName,UserName,InitialAmount,CurrentAmount,Route,BusType,Price,Driver,Level,Seat) Select  Customer.FirstName,Customer.LastName,Customer.UserName,Customer.InitialAmount,Customer.CurrentAmount,route.Route,route.BusType,route.Price,route.Driver,route.Level,route.SeatNo From Customer,route where Customer.UserName='$uname' And route.ID='$route'";
$insert_run=mysql_query($Insert,$bd)or die(mysql_error($bd));
if($insert_run)
{
$update="update Orders set Date='$date',SeatSum='$qty' where UserName='$uname' ";
$update_run=mysql_query($update,$bd)or die(mysql_error($bd));
}
else
{
	echo "Error";
}
?>
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<html>
<head><title>Confirm</title></head>
<body>
<?php
include'db.php';
$select=mysql_query("Select * From Orders where UserName='$uname'");
while($row = mysql_fetch_array($select))
{
	$FirstName=$row['FirstName'];
	$LastName=$row['LastName'];
	$UserName=$row['UserName'];
	$Route=$row['Route'];
	$Date=$row['Date'];
	$Seat=$row['SeatSum'];
}	
?>
<center>
<legend align="center" style="background-image:url(images/mglass.png)">
<form action="SelectSetMine.php" method="POST" id="form" name="form">
<h2> Are These Correct? </h2> 
<label> First Name: 
</label>
<input type="text" readonly="readonly" value="<?php echo $FirstName;?>"style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px";/><br />
<label> Last Name: </label>
<input type="text" readonly="readonly" value="<?php echo $LastName;?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br />
<label> User Name: </label>
<input type="text" readonly="readonly" name="uname" value="<?php echo $UserName;?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br />
<label> Route: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
<input type="text" readonly="readonly" name="route" value="<?php echo $Route;?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br />
<label> Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" readonly="readonly" name="date" value="<?php echo $Date;?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br />
<label>Reserved Seat:</label>
<input type="text" readonly="readonly" name="qty" value="<?php echo $Seat;?>" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/><br />
<input type="submit" value="Confirm" />
</form>
</legend>
</center>
</body>
</html>