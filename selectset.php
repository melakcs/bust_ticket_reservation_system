<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
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
<?php
include'db.php';
$busnum=$_GET['id'];
$uname=$_GET['uname'];
$date=$_GET['date'];
$qty=$_GET['qty'];
$setname2=0;
$CustID=$_GET['custid'];
//
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
	if($pay>=20)
	{
	$pp=$pay-$payable;
	mysql_query("update Customer set CurrentAmount='$pp' where UserName='$uname'");
	mysql_query("update Orders set CustCA='$pp' where CustUName='$uname' And RouteID='$busnum'");
	}
	else
	{
		//$ss=($sa>=20);
		//mysql_query(" Select * From Orders Where ");
		echo "<h4>"."You Don't Have Sufficient Account Please Contact The System Administrator  "."</h4>";
		//header('location:indexs.php');
$delete=mysql_query("Delete From Orders Where CustCA='0' And CustUName='$uname' And RouteID='$busnum'");
if($delete)
{
	echo "<h4>"." Order Canceled "."</h4>";
}
		
	}
	

/*
$sql_create="Create Table IF NOT EXISTS Orders(ID Int Not Null Auto_Increment,Date Varchar(30),
SeatReserve Varchar(11) Not Null,
SeatS Varchar(100),
Route Varchar(30),
CustFName Varchar(30),
CustLName Varchar(30),
CustUName Varchar(30),
CustIA Int,
CustCA Int,
BusType Varchar(30),
Price Int,
SeatNo Int,
Primary Key(ID)
)Engine=InnoDB";
$Sql_run=mysql_query($sql_create,$bd);
$insert="Insert Into Orders (ID,CustFName,CustLName,CustUName,CustIA,CustCA,Route,BusType,Price,SeatNo) Select route.ID,Customer.FirstName,Customer.LastName,Customer.UserName,Customer.InitialAmount,Customer.CurrentAmount,route.Route,route.BusType,route.Price,route.SeatNO From Customer,Route Where route.ID='$busnum' And Customer.UserName='$uname'";
$insert_run=mysql_query($insert,$bd);
*/
$update="Update Orders Set  SeatReserve='$qty' Where CustUName='$uname' And RouteID='$busnum'";
$update_run=mysql_query($update,$bd);
$updatedate = "Update Orders Set  Date='$date' Where CustUName='$uname' And RouteID='$busnum'";
$updated_run=mysql_query($updatedate,$bd);
if($update_run)
{
}
else
{
	echo "error".die(mysql_error($bd));
}
/*$result = mysql_query("SELECT * FROM Route WHERE  ID ='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['SeatNo'];

		$query = mysql_query("SELECT SeatReserve FROM Orders where date = '$date'");

							while($rows = mysql_fetch_array($query))
							  {
							  $inogbuwin=$rows['SeatReserve'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
		echo "  av ".$avail." qty   ".$qty."  set  ".$setnum." ino  ".$inogbuwin;
	}

if ($avail < $qty)
{
echo 'Qty reserve exceed the available seat of the bus';

}
else if($avail > 0)
{*/
?>
<script type="text/javascript">
function validateForm()
{
/*var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["route"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }
*/
alert("Make Sure All The Infomations Are True");

}
</script>

<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<center><h1><u>Confirmation Page</u></h1></center>
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<input type="hidden" value="<?php echo $uname ?>" name="uname" />
<label>
<span class="small">Confirm First Name</span>
</label>
<input type="text" name="fname"  id="name" value="
<?php
$selector=mysql_query("select * From Orders Where CustUName='$uname' And RouteID='$busnum'");
while($rowss=mysql_fetch_array($selector))
{
	$a=$rowss['CustFName'];
	$b=$rowss['CustLName'];
	$c=$rowss['Route'];
	$d=$rowss['BusType'];
	$e=$rowss['Price'];
	$f=$rowss['CustUName'];
}
echo $a;
?>" readonly="readonly"/><br>
<label>
<span class="small">Confirm Last Name</span>
</label>
<input type="text" name="lname"  id="name" value="<?php echo $b; ?>" readonly="readonly"/><br>
<label>
<span class="small">Confirm Route</span>
</label>
<input type="text" name="route"  id="name" value="<?php echo $c; ?>" readonly="readonly"/><br>
<label>
<span class="small">Confirm User Name</span>
</label>
<input type="text" name="iuname"  id="name" value="<?php echo $e; ?>" readonly="readonly"/><br>
<label>
<span class="small"> BusType</span>
</label>
<input type="text" name="bustype"  id="name" value="<?php echo $d; ?>" readonly="readonly"/><br>
<label>
<span class="small">All Price</span>
</label>
<?php $payable=$qty*$e;?>
<input type="text" name="price"  id="name" value="<?php echo $payable; ?>" readonly="readonly"/><br>
<button type="submit" onclick="ValidateForm();">Confirm</button>
</form>
</div>
<?php
/*}
else if($avail <= 0)
{
echo 'no available sets';
}
?>*/
