<script type="text/javascript">
function validateForm()
{
var a=document.forms["form"]["id"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Owner ID");
  return false;
  }
var b=document.forms["form"]["oname"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Name Of The Owner");
  return false;
  }
 var c=document.forms["form"]["busid"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the Bus ID Of The Owner's Bus");
  return false;
  }
var d=document.forms["form"]["address"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Address Of The Owner");
  return false;
  }
  var e=document.forms["form"]["tele"].value;
if (e==null || e=="")
  {
  alert("Pls Enter the Telephone Number Of The Owner");
  return false;
  }
}
</script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#busid").keypress(function (e)  
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
  <script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#tele").keypress(function (e)  
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

<form action="addOwnerCH.php" method="post" name="form" id="form" onsubmit="return validateForm()">
	ID:<br><input type="text" name="id" id="ID" class="ed"><br>
	Owner Name:<br><input type="text" name="oname" class="ed"><br>
    Bus ID:<br><input type="text" name="busid" id="busid" class="ed"><br>
    Address:<br><input type="text" name="address" class="ed"><br>
    Tele:<br><input type="text" name="tele" id="tele" class="ed"><br>
	<input type="submit" value="Save" id="button1">
</form>
