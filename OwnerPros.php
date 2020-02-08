<?php
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['usernameu'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>View Owner Profile</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js1/application.js" type="text/javascript" charset="utf-8"></script>	
</head>

<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="indexs.php">Home</a></li>
            <li><a href="BusPros.php">Bus </a></li>
            <li ><a href="DestnPros.php">Journey</a></li>
            <li  class="current"><a href="OwnerPros.php">Owner </a></li>
            <li><a href="AboutStations.php">About Station</a></li>
            <li><a href="Comments.php">Comment</a></li>      
            <li><a href="ContactUss.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
            <center>
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" >Search</a>
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
								<th> Owner Name </th>
								<th> Bus ID </th>
								<th> Address </th>
								<th> TelePhone </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM Owner");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><div align="right">'.$row['OName'].'</div></td>';
									echo '<td><div align="right">'.$row['BusId'].'</div></td>';
									echo '<td><div align="right">'.$row['TelePhone'].'</div></td>';
									echo '<td><div align="right">'.$row['Address'].'</div></td>';
									echo '</tr>';
								}
							?> 
                            </tbody>
                            </table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
            </center>
        </div>
    </div>
    
<div id="footer">
	<h4>Kombolcha Bus Station &bull; <a href="contact-us.php">Developed By Wollo University Computer Science Students </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<p>&copy; Copyright 2013 Kombolcha Bus Station | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
