<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>View Bus Profile</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js1/application.js" type="text/javascript" charset="utf-8"></script>
<! Gallery CSS >
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<script type="text/javascript" src="js/sagallery.js"></script>
<script src="js/jquery.quicksand.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />	
<link href="FancyText.css" rel="stylesheet" type="text/css" />	
</head>

<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li class="current"><a href="BusPro.php">Bus </a></li>
            <li ><a href="DestnPro.php">Journey </a></li>
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
            <h2 class="BURNtxt"><u>Our Available Buses</u></h2>
            <br /><br />
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
        <div id="gallerycontainer">
     
			<ul class="portfolio-area" style="width: 860px;">	
 		
               		<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic1.jpg" rel="prettyPhoto[gallery]" title="BusId: 1475"><img width="225" height="140" src="images/thumbs/p1.jpg" alt="Wall-E" title="BusId: 1475" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Wall-E">Bus ID : 1475</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Dessie</p>
					</div>
                    
					</div>	
                    </li>			
				            
			                        		
               		<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic2.jpg" rel="prettyPhoto[gallery]" title="Up"><img width="225" height="140" src="images/thumbs/p2.jpg" alt="Up" title="Up" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Up">Bus ID : 7874</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Ataye</p>
					</div>
                    
					</div>	
                    </li>				
				 
                        		
               			<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic3.jpg" rel="prettyPhoto[gallery]" title="Cars 2"><img width="225" height="140" src="images/thumbs/p3.jpg" alt="Cars 2" title="Cars 2" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Cars 2">Bus ID : 4155</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Kemise</p>
					</div>
                    
					</div>	
                    </li>		
				            
			                             		
               			<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic4.jpg" rel="prettyPhoto[gallery]" title="Toy Story 3"><img width="225" height="140" src="images/thumbs/p4.jpg" alt="Toy Story 3" title="Toy Story 3" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Toy Story 3">Bus ID : 3696 </a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Addis Ababa</p>
					</div>
                    
					</div>	
                    </li>			
				            
			                            		
               		<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic5.jpg" rel="prettyPhoto[gallery]" title="Finding Nemo"><img width="225" height="140" src="images/thumbs/p5.jpg" alt="Finding Nemo" title="Finding Nemo" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Finding Nemo">Bus ID : 8777</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Harbu</p>
					</div>
                    
					</div>	
                    </li>			
				            
			     		              		
               		<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic6.jpg" rel="prettyPhoto[gallery]" title="Lorax"><img width="225" height="140" src="images/thumbs/p6.jpg" alt="Lorax" title="Lorax" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Lorax">BUs ID : 6214</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Cheqorti</p>
					</div>
                    
					</div>	
                    </li>			
				            
			     	             	
               		<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic7.jpg" rel="prettyPhoto[gallery]" title="Happy Feet 2"><img width="225" height="140" src="images/thumbs/p7.jpg" alt="Happy Feet 2" title="Happy Feet 2" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Happy Feet 2">Bus ID : 8051</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Degan</p>
					</div>
                    
					</div>	
                    </li>	
		                
            		
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic8.jpg" rel="prettyPhoto[gallery]" title="Tangled"><img width="225" height="140" src="images/thumbs/p8.jpg" alt="Tangled" title="Tangled" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Tangled">Bus ID : 1055</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Debire Birhan</p>
					</div>
                    
					</div>	
                    </li>			
				            
			     
		            <li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic9.jpg" rel="prettyPhoto[gallery]" title="Kung Fu Panda 2"><img width="225" height="140" src="images/thumbs/p9.jpg" alt="Kung Fu Panda 2" title="Kung Fu Panda 2" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Kung Fu Panda 2">BUs ID : 2541</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To 	Shewarobit</p>
					</div>
                    
					</div>	
                    </li>			
				            
			     
		                
            		 <li class="portfolio-item2" data-id="id-9" data-type="cat-item-2">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic10.jpg" rel="prettyPhoto[gallery]" title="Madagascar 3"><img width="225" height="140" src="images/thumbs/p10.jpg" alt="Madagascar 3" title="Madagascar 3" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Madagascar 3">Bus ID : 4619</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Karaqorie</p>
					</div>
                    
					</div>	
                    </li>			            
			     
		                
            		 <li class="portfolio-item2" data-id="id-10" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic11.jpg" rel="prettyPhoto[gallery]" title="Rango"><img width="225" height="140" src="images/thumbs/p11.jpg" alt="Rango" title="Rango" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Rango">Bus ID : 1574</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Worsaye</p>
					</div>
                    
					</div>	
                    </li>	
				            
			     
		            <li class="portfolio-item2" data-id="id-11" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic12.jpg" rel="prettyPhoto[gallery]" title="Shrek Forever After"><img width="225" height="140" src="images/thumbs/p12.jpg" alt="Shrek Forever After" title="Shrek Forever After" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Shrek Forever After">Bus ID : 7216</a></h2>
                    <p class="post-subtitle-portfolio">Kocha To Gerba</p>
					</div>
                    
					</div>	
                    </li>

            
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
