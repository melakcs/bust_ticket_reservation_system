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
<title>About The Station</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="FancyText.css" />
<link rel="stylesheet" type="text/css" href="button.css" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="indexs.php">Home</a></li>
            <li ><a href="BusPros.php">Bus </a></li>
            <li ><a href="DestnPros.php">Journey</a></li>
            <li ><a href="OwnerPros.php">Owner </a></li>
            <li class="current"><a href="AboutStations.php">About Station</a></li>
            <li ><a href="Comments.php">Comment</a></li>      
            <li ><a href="ContactUss.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<br /><br /><br />
<h2 class="orange"><u> Objective </u></h2>
<br>
<p class="blue"> •	To maximize profit (by carrying the highest loads of passengers with minimum cost) from the transportation service and related business activities. i.e to increase the asset of the company and pay dividends to the share holders when ever the share holders deem it necessary and appropriate.</p></br>
<p class="blue">•	To improve the quality of public transport service so as to enhance economic activities of the country </p>
<br><br />
<p class="blue">•	To Facilitate the quality of public transport service so as to enhance economic activities of the country </p>
<br>
<br />
<hr />
<br />
<br />
<h2 class="pink"><u> Vision </u></h2>
<br>
<p class="blue">•	To be multifaceted company providing high quality, safest,</p> 
<br />
<p class="blue">convenient and efficient public transport service up to the horn of Africa.</p> 
<br>
<br />
<br />
<hr />
<br />
<br />
<h2 class="red"><u> Mission </u></h2>
<br />
<p class="blue"> •	Provide fast, safe and reliable public transport service at a lower cost consistent with the national objective of general welfare and economic growth.</p>
<br />
<p class="blue">•	Facilitate the social and economic inter-linkage among nations and nationalities by creating public transport network between national states</p>
<br>
<br />
<br />
<hr />
<br />
<br />
<h2 class="purple"> Values </h2>
<br>
<p class="blue"> • As accountable company, we exemplify the highest standards of excellence, integrity, courtesy and respect in the work environment.</p>
<br>
<br />
<br />
<hr />
<br />
<br />
<h2 class="green"> Customer Focus </h2>
<br />
 	<p class="purple">• We strive to understand and meet the needs of our customers through service, innovations and creativity.</p>
    <br>
<br />
<br />
<hr />
<br />
<br />
<h2 class="orange"> Strategies </h2>
<br>
<p class="purple">1.	Enhance passenger’s safety by working towards the elimination of transportation-related deaths and injuries.</p>
<p class="purple">2.	Identify best routes which enable maximize capacity utilization of buses, minimize investment pay-back period and serve the needy people.</p>
<p class="purple">3.	Provide orientation to all employees on company vision, mission, value, objective and plans in order to have attainable goals.</p>
<p class="purple">4.	Maximizing the buses life span through preventive maintenance, improving the quality of technicians and fulfilling workshop equipment and tools.</p>
<p class="purple">5.	Develop effective maintenance and procurement system.</p>
<p class="purple">6.	Provide short and long term training to upgrade the skill and knowledge of employees.</p>
<p class="purple">7.	Provide incentive to those employees who perform their duties efficiently.</p>
<p class="purple">8.	Monitor performance appraisal system. Evaluation among the management bodies and between the management and employees is indispensable to identify company's strength to be capitalized weaknesses to be eliminated.</p>
<p class="purple">9.	Maintain and develop improved customer ship service.</p>

    </div>
    



<div id="footer">
	<h4>Kombolcha Bus Station &bull; <a href="contact-us.php">Developed By Wollo University Computer Science Students </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<p>&copy; Copyright 2013 Kombolcha Bus Station | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
