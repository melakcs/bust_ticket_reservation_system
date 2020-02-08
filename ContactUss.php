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
<title>Contact Address</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<link rel="stylesheet" type="text/css" href="button.css" />
</head>

<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="indexs.php">Home</a></li>
            <li ><a href="BusPros.php">Bus </a></li>
            <li ><a href="DestnPros.php">Journey</a></li>
            <li><a href="OwnerPros.php">Owner </a></li>
            <li  ><a href="AboutStations.php">About Station</a></li>
            <li ><a href="Comments.php">Comment</a></li>      
            <li class="current"><a href="ContactUss.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
				<div id="contactleft">
					Kombolcha BUS<br>
latitude and longitude of 11°5′N 39°44′E﻿ / ﻿11.083°N 39.733°E <br>
with an elevation between 1842 and 1915 meters above sea level<br>

Kombolcha BUS<br>
(G.V. Kombolcha TRANSPORT, INCORPORATED)<br>
Piasa Avenue Corner Fun Cafe Street<br>
Kombolcha Bus Co.<br>
- 
Telephone No: (033) 781-5894<br><br>


Kombolcha Bus Terminal in Berbere Wonz  by G.V. Kombolcha Transport, Inc.<br>
Location: Arada Road, <br><br>

Contact Numbers:<br>
Kombolcha Bus Company <br>
-  (033) 846 4259; (033) 846-2265<br>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: john@doe.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <center> <input id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" class="button" /></center>
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
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
