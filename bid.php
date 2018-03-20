
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bid</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Register Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div data-vide-bg="video/awesome">
	<div class="main-w3layouts center-container">
		<h1>Place Your Bid Here</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="" method="post"> 
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<table>
					<tr>
					<td>
					Highest Bid &nbsp	&nbsp	&nbsp	&nbsp	&nbsp
					</td>
				<td><input type="text" name="hbid" ></td>
					</tr>
					<tr>
					<td>
					Your Bid &nbsp	&nbsp	&nbsp	&nbsp	&nbsp
					</td>
				<td><input type="text" name="bid" ></td>
					</tr>
					</table>
					<div class="wthree-text">  
						<label class="anim">
							
						</label>  
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="Submit Bid" name="btnbid">
					<input type="submit" value="Cancel" name="btnadd">
				</form>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			
		</div>
		<!-- //copyright -->	
	</div>	
	</div>	
	<!-- //main --> 
	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
<?php
session_start();
if(isset($_POST["btnbid"]))
{
include("connection.php");
$uid = $_SESSION['uid'];
$bid=$_POST["bid"];
$sql="insert into bid(uid,bid_amount)values('$uid','$bid')";
mysqli_query($con,$sql);
header('location:products_gallery.phpl');  
}			
?>

</body>
</html>