<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>View Routes</title>
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
			<li><a href="index.php">Home</a></li>
            <li><a href="BusPro.php">Bus </a></li>
            <li  class="current"><a href="DestnPro.php">Journey</a></li>
            <li><a href="OwnerPro.php">Owner </a></li>
            <li><a href="AboutStation.php">About Station</a></li>
            <li><a href="Comment.php">Comment</a></li>      
            <li><a href="ContactUs.php">Contact Us</a></li>
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
								<th> Bus Type </th>
								<th> Seat No </th>
								<th> Driver </th>
								<th> Level </th>
                                <th> Route </th>
                                <th> Distance </th>
                                <th> Price </th>
                                <th> Elapsed </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM Route");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><div align="right">'.$row['BusType'].'</div></td>';
									echo '<td><div align="right">'.$row['SeatNo'].'</div></td>';
									echo '<td><div align="right">'.$row['Driver'].'</div></td>';
									echo '<td><div align="right">'.$row['Level'].'</div></td>';
									echo '<td><div align="right">'.$row['Route'].'</div></td>';
  			                        echo '<td><div align="right">'.$row['Distance'].'</div></td>';
									echo '<td><div align="right">'.$row['Price'].'</div></td>';
									echo '<td><div align="right">'.$row['Elapsed'].'</div></td>';
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
    <div id="featured">
        <div id="items">
            <div class="item"> <a href="main-course.php"><img src="xres/images/Kombolcha12.gif" height="180" width="180"/></a>
            <h3><a href="main-course.php">Kombolcha Expo And Bazar</a></h3>
            <p>ERA Award on March 7, 2011 in Geneva, Switzerland. This prestigious award has been achieved by integrating all quality-related functions and processes throughout the company by focusing at the overall quality measures used including managing quality service and development, quality control and maintenance, quality improvement, and quality assurance.

 Our company has achieved all quality measures by involving all stakeholders including Board of Directors, management members, workforce, suppliers, and even customers, in order to meet customer expectations. In addition to this our company has also received Total Quality Management (TQM) QC 100 model which is an indispensable tool for current quality culture, permitting our company to improve business relations with other companies & sectors.

This recognition & award will encourage our company to continuously make efforts to strengthen our commitment to quality by motivating our employees to meet or exceed customer satisfaction which is the ultimate measure of any company’s success.</p>  
            </div>
            <div class="item"> <a href="lodging.php"><img src="xres/images/wellouniversity.jpg" alt="" /></a>
            <h3><a href="lodging.php">Wollo Univesity Building New Asphalt To Harbu</a></h3>
            <p>Selam Bus Line Share Company gladly announces that the Sell of 5,231 shares each share valued at Birr 5,000 each plus subscription premium cost of 20% of the value of shares purchased payable in full on application at par for each value through the Branch network of Commercial Bank of Ethiopia, Wegagen Bank, Lion International Bank & Nib Bank starting from Nov 01, 2012. The minimum & maximum amount of share floated for sale is 4 & 2,800 shares respectively.

To satisfy the increasing demand of public transport, to transfer ownership to the public and to expand the capital of the company, the fourth General Assembly of share holders decided in Nov 26, 2011 to Increase the paid up capital from 43 million to 70 million birr.
Selam Buses have 51 seats each with a body manufactured by Yutong Hong Kong. They are equipped with luxurious facilities for heightened comfort, including a refrigerator for onboard refreshments and audio-video entertainment facilities. </p>  
			</div>
			<div class="item" style="width: 860px;"> 
				
			</div>
        </div>
    </div>
     <div class="column-clear"></div>
            		</ul>
			<div class="clearfix"></div>
        </div>
        </center>
    </div>
    
<div id="footer">
	<h4>Kombolcha Bus Station &bull; <a href="contact-us.php">Developed By Wollo University Computer Science Students </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<p>&copy; Copyright 2013 Kombolcha Bus Station | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
