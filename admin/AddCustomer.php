<?php
	require_once('auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="route.php">
							<img alt="Statistics" src="img/m-custom.png">
							<span>Routes</span>
						</a>
					</li>
                    <li>
						<a class="active" href="AddCustomer.php">
							<img alt="AddCustomer" src="img/m-gallery.png">
							<span>Customer</span>
						</a>
					</li>
                    <li>
						<a  href="AddOwner.php">
							<img alt="AddOwner" src="img/m-files.png">
							<span>Owner</span>
						</a>
					</li>
                    <li>
						<a href="Orders.php">
							<img alt="Orders" src="img/m-articles.png">
							<span>Orders</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="AddCustomerFo.php">Add Customer</a>
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
                                <th> First Name</th>
								<th> Last Name</th>
								<th> EMail</th>
								<th>TelePhone </th>
								<th> Address </th>
                                <th> InitialAmount</th>
                                <th> CurrentAmount </th>
                                <th> UserName </th>
                                <th> Password </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							mysql_select_db("Bus_Station",$bd);
							$result = mysql_query("SELECT * FROM Customer");
							while($row = mysql_fetch_array($result))
								{
						echo '<tr class="record">';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['FirstName'].'</td>';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['LastName'].'</td>';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['EMail'].'</td>';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['TelePhone'].'</td>';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Address'].'</td>';
			echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['InitialAmount'].'</td>';
			echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['CurrentAmount'].'</td>';
			echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['UserName'].'</td>';
			echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Password'].'</td>';
			echo '<td><div align="center"><a rel="facebox" href="editcustdetails.php?id='.$row['ID'].'">Edit</a> | <a href="#" id="'.$row['ID'].'" class="delbutton" title="Click To Delete">Delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					2012-13 �
					<a class="afooter-link" href="">Kombolcha Bus Station System Admin</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletecust.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>