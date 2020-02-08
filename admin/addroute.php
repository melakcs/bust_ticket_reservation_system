<script type="text/javascript">
function validateForm()
{
var a=document.forms["form"]["id"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Route ID");
  return false;
  }
  
var b=document.forms["form"]["type"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Bus Type");
  return false;
  }
 var c=document.forms["form"]["seat"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter the Seat Number");
  return false;
  }
var d=document.forms["form"]["driver"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Driver Name");
  return false;
  }
  var d=document.forms["form"]["level"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Level of The Bus");
  return false;
  }
  var d=document.forms["form"]["route"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Source And Destination Of The Route");
  return false;
  }
  var d=document.forms["form"]["distance"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Distance of The Route");
  return false;
  }
    var d=document.forms["form"]["elapsed"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Elapsed Time of The Route");
  return false;
  }
    var d=document.forms["form"]["price"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Price of The Route");
  return false;
  }
    var d=document.forms["form"]["time"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Leaving Time of The Route");
  return false;
  }
}
</script>

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

<form action="addRouteCH.php" method="post" name="form" id="form" onsubmit="return validateForm()">
	ID:<br><input type="text" name="id" class="ed"><br>
	Bus Type:<br><input type="text" name="type" class="ed"><br>
    Seat Number:<br><input type="text" name="seat" class="ed"><br>
    Driver Name:<br><input type="text" name="driver" class="ed"><br>
    Level:<br><input type="text" name="level" class="ed" placeholder="Level 1,2,3"><br>
	Route:<br><input type="text" name="route" class="ed" placeholder="Source And Destination Of The Route"><br>
    Distance:<br><input type="text" name="distance" class="ed"><br>
    Elapsed:<br><input type="text" name="elapsed" class="ed"><br>
	Price:<br><input type="text" name="price" class="ed"><br>	
	Time:<br><input type="text" name="time" class="ed" placeholder="10:30am"><br>
	<input type="submit" value="Save" id="button1">
</form>
