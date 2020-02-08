<?php 
session_start();
$errors = '';

if(isset($_POST['submit']))
{
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		require_once('db.php');
		$name=$_POST['name'];
		$content=$_POST['content'];
		$commentid=$_POST['commentid'];
		$images='http://www.gravatar.com/avatar.php';
		mysql_query("INSERT INTO comment(name, content, images, comsubid)VALUES('$name', '$content', '$images', '$commentid')");
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Comment/Feedback</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<link rel="stylesheet" type="text/css" href="button.css" />
<style>
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
ul
{
padding:0;
margin: 0 0 0 13px;
padding: 0;
}
#commentcontainer
{
	height:auto;
	width:600px;
	margin:0 auto;
}
#commentcontainer img
{
float:left;
border:1px solid #eeeeee;
padding:5px;
margin:0 12px 12px 0;
}
.clearfix
{
clear:both;
}
p
{
margin:0;
padding:2px;
}
#subcomm img
{
height:auto;
max-width:40px;
float:left;
border:1px solid #eeeeee;
padding:5px;
margin:5px 5px 5px 5px;
}
#subcomm
{
float:right;
height:auto;
width:497px;
background-color:#EDEFF4;
border-bottom:1px solid white;
}
#maincomm
{
border-bottom:1px solid gray;
padding-bottom:5px;
margin-bottom:10px;
}
#name
{
font-weight: bold;
color: #3B5998;
text-transform:capitalize;
}
#comm a
{
	text-decoration:none;
	color:#3b5998;
}
#comm a:hover
{
	text-decoration:underline;
}
</style>	
</head>

<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li ><a href="BusPro.php">Bus </a></li>
            <li ><a href="DestnPro.php">Journey</a></li>
            <li ><a href="OwnerPro.php">Owner </a></li>
            <li ><a href="AboutStation.php">About Station</a></li>
            <li class="current"><a href="Comment.php">Comment</a></li>      
            <li ><a href="ContactUs.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
					we want to notify to our users we want to provide all the services we have and furthermore new cute graphics with awesome expression but first your comment is more valuable please send your good and supportive comments to us we Thanks A LOT
					<br>
					<br>
					we want to notify to our users we want to provide all the services we have and furthermore new cute graphics with awesome expression but first your comment is more valuable please send your good and supportive comments to us we Thanks A LOT
					<br>
					<br>
					we want to notify to our users we want to provide all the services we have and furthermore new cute graphics with awesome expression but first your comment is more valuable please send your good and supportive comments to us we Thanks A LOT
					<br>
					<br>
					we want to notify to our users we want to provide all the services we have and furthermore new cute graphics with awesome expression but first your comment is more valuable please send your good and supportive comments to us we Thanks A LOT
					<br><br><br><br><br>
                    <center>
                    <div id="commentcontainer">
<?php
require_once('db.php');
$result3 = mysql_query("SELECT * FROM comment where comsubid=0");
while($row3 = mysql_fetch_array($result3))
{ 
	$id=$row3['commentid'];
	echo '<div id="maincomm">';
	echo '<img src="'.$row3['images'].'">';
    echo '<p id="name">'.$row3['name'].'</p>';
	echo '<p>'.$row3['content'].'</p>';
	echo '<p id="comm">'.'<a href="index.php?id='.$id.'&#link1">comment</a>'.'</p>';
	
		$result4 = mysql_query("SELECT * FROM comment where comsubid='$id'");
			while($row4 = mysql_fetch_array($result4))
			{
				echo '<div id="subcomm">';
				echo '<img src="'.$row4['images'].'">';
				echo '<p id="name">'.$row4['name'].'</p>';
				echo '<p>'.$row4['content'].'</p>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
			}
	echo '<div class="clearfix"></div>';
	echo '</div>';
}
?>
<div class="clearfix"></div>
</div>



<form method="POST" name="" 
action="chComm.php"> 
<table width="332" border="0" align="center">
  <tr>
    <td width="265">
		<ul>
		<?php
		if(!empty($errors)){
		echo "<li class='err'>".($errors)."</li>";
		}
		?>
		</ul>	</td>
    <td width="57">&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2">
		<label>Name:</label><br>
		<input name="commentid" type="hidden" value="<?php echo $_GET['id'] ?>">
		<input name="name" type="text"><br>
		<label>Content:</label><br>
		<textarea name="content" style="width: 350px; height:150px;"></textarea><br /><br>
	</td>
   </tr>
  <tr>
  <tr>
    <td> <img src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > </td>
    <td> <a href='javascript: refreshCaptcha();'><img src="refresh.png"></a> </td>
  </tr>
  <tr>
    <td colspan="2"><label>Enter The Code Above Here :</label><br />
      <input id="6_letters_code" name="6_letters_code" type="text"><br /><br></td>
    </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Submit Comment" class="button" name='submit'></td>
    </tr>
</table>
</form>

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
                    
                    <br /><br /><br />
		
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    
</center>


<div id="footer">
	<h4>Kombolcha Bus Station &bull; <a href="contact-us.php">Developed By Wollo University Computer Science Students </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<p>&copy; Copyright 2013 Kombolcha Bus Station | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
