<center>
<fieldset style=" background-image:url(gallery/jquery-photo-gallery/jquery-photo-gallery/images/bkg-pat.png)">
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:Comic Sans MS, cursive;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<Strong style="font-family:'Comic Sans MS', cursive">Print and present this details upon boarding the bus</Strong><br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong style="font-size:22px; box-shadow:inset; font-family:'Comic Sans MS', cursive;"><u>Kombolcha Bus Station Online Ticket Reservation System - Ticket Details</u></strong><br><br>

<?php
include('db.php');
$id=$_GET['busnum'];
$setnum=$_GET['setnum'];
$uname=$_GET['uname'];
$result = mysql_query("SELECT * FROM Orders WHERE CustUName='$uname' And RouteID='$id'");
while($row = mysql_fetch_array($result))
	{
		
		echo '<h4 style="font-family:Comic Sans MS, cursive;">Name   : '.$row['CustFName'].' '.$row['CustLName'].'<br><br>';
		echo 'UserName  :  '.$row['CustUName'].'<br><br>';
		echo 'InitialAmount  : '.$row['CustIA'].'<br><br>';
		echo 'CurrentAmount  : '.$row['CustCA'].'<br><br>';
	}
$results = mysql_query("SELECT * FROM Orders WHERE CustUName='$uname' And RouteID='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['Price'];
		$Sea = $rows['SeatReserve'];
		echo "<h4 style='font-family:Comic Sans MS, cursive;'>Price  :".$ggagaga.'</h4>';
		echo "<br>";
		echo "All Price  :".$ggagaga*$Sea.'</h4>';
		echo "<br>";

		echo '<h4 style="font-family:Comic Sans MS, cursive;">Route and Type of Bus: ';
		$resulttick = mysql_query("SELECT * FROM Orders WHERE CustUName='$uname' And RouteID='$id'");
		while($ror = mysql_fetch_array($resulttick))
		{
					echo '<h4 style="font-family:Comic Sans MS, cursive;">Ticket No.: '.$rows['ID'].'<br>'.'</h4>';

		}
		
		$resulta = mysql_query("SELECT * FROM route WHERE ID='$id'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo  $rowa['Route'].' :'.$rowa['BusType'].'</h4>';
			
			}
	
		
		echo '<h4 style="font-family:Comic Sans MS, cursive;">Date Of Travel: '.$rows['Date'].'<br>'.'</h4>';
		
	};
	
?>
</div>
<a href="indexs.php" style=" animation:cubic-bezier(400,350,410,360);">Home</a>
</fieldset>
</center>