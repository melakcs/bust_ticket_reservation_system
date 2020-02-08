
<script type="text/javascript">
function validateForm()
{
var a=document.forms["form"]["ID"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the ID of The Customer");
  return false;
  }
var b=document.forms["form"]["FName"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the First Name of The Customer");
  return false;
  }
 var c=document.forms["form"]["LName"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter the Last Name of The Customer");
  return false;
  }
var d=document.forms["form"]["Email"].value;
if (d==null || d=="")
  {
  alert("Pls. Enter the Email Address of The Customer");
  return false;
  }
var e=document.forms["form"]["Phone"].value;
if (e==null || e=="")
  {
  alert("Pls. Enter the Phone Number of The Customer");
  return false;
  }
var f=document.forms["form"]["Address"].value;
if (f==null || f=="")
  {
  alert("Pls. Enter the Address of The Customer");
  return false;
  }
var g=document.forms["form"]["IAmount"].value;
if (g==null || g=="")
  {
  alert("Pls. Enter the Initial Amount of The Customer");
  return false;
  }
var h=document.forms["form"]["UName"].value;
if (h==null || h=="")
  {
  alert("Pls. Enter the User Name of The Customer");
  return false;
  }
var i=document.forms["form"]["Pass1"].value;
if (i==null || i=="")
  {
  alert("Pls. Enter the Password of The Customer");
  return false;
  }
var j=document.forms["form"]["Pass2"].value;
if (j==null || j=="")
  {
  alert("Pls. Enter the Confirm Password of The Customer");
  return false;
  }

if( i != j ) 
{
alert("Password Does Not Match");
  		return false;
}
/*var d=document.forms["form"]["Email"].value;
var atpos=d.indexOf("@");
var dotpos=d.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
  {
  alert("Not a valid E - Mail Address");
  return false;
  } 
*/
}
</script>
<script language="javascript">

function checkEmail() {

    var email = document.getElementById('Email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}</script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#Phone").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg2").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#IAmount").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg1").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#ID").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
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

<form action="AddCustomerCH.php" method="post" id="form" name="form" onsubmit="return validateForm()">
	ID:<br><input type="text" name="ID" id="ID" class="ed"><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><br>
	First Name:<br><input type="text" name="FName" class="ed"><br>
	Last Name:<br><input type="text" name="LName" class="ed"><br>
    E-Mail:<br><input type="email" id="Email" name="Email" class="ed"><br>
	Phone Number:<br><input type="tel" id="Phone" name="Phone" class="ed"><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg2"></span><br>
	Address:<br><input type="text" name="Address" class="ed" placeholder="Town"><br>
    Initial Amount:<br><input type="text" id="IAmount" name="IAmount" class="ed"><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg1"></span><br>
	User Name:<br><input type="text" name="UName" class="ed"><br>
	Password:<br><input type="password" name="Pass1" class="ed"><br>
	Confirm Password:<br><input type="password" name="Pass2" class="ed"><br>
	<input type="submit" value="Save" id="button1" onclick="ValidateForm()">
</form>
