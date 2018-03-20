<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
<title>Awesome Register Form a Flat Responsive Widget Template :: w3layouts</title>
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
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="" method="post" enctype="multipart/form-data"> 
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1>Upload Products Here</h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Product Name:</td>
    <td><input type='text' name='pname'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Category</td>
    <td><select id="category" name="slctcategory">
					<option value="">select category</option>
					<?php
					
						$qerry="Select * from category";
						$dd_res=mysqli_query($con,$qerry);
						while($r=mysqli_fetch_row($dd_res))
						{ 
							echo "<option value='$r[0]'> $r[1] </option>";
						}
					?>
				</select></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Description</td>
    <td><textarea  class="w3l_summary"  name="description" required></textarea></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Image</td>
    <td><input type="file" name="file" size="50" /></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Starting Bid Price</td>
    <td><input type='text' name='sbprice'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Starting Date for Bidding</td>
    <td><input type='text' name='sdate'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Ending Date for Bidding</td>
    <td><input type='text' name='edate'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type="submit" name="btnSubmit" value="Upload File" /></td>
	<td align='center'><input type='submit' name='cancel' value="Cancel"></td>
</tr>
</table>
</table>
 
</table>
				</form>
			</div>	 
		</div>	
		
	</div>	
	</div>	
	<!-- //main --> 
	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
<?php
include ("connection.php");
session_start();
if(isset($_POST["btnSubmit"]))
{
	echo "hi";
	
$uid = $_SESSION['uid'];
$pname=$_POST["pname"];
$des=$_POST["description"];
$catg=$_POST['slctcategory'];
$sprice=$_POST['sbprice'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];


$file="";
		$file=$_FILES['file']['name'];
		if( $_FILES['file']['name'] != "" )
{
	$target_path = "uploads/";
	$target_path = $target_path.basename( $_FILES['file']['name']); 
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
	{
		echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
	} 
	else
	{
		echo "There was an error uploading the file, please try again!";
	}

	  // copy( $_FILES['file']['name'], "/SendEmail" ) or 
		//       die( "Could not copy file!");
}
else
{
    die("No file specified!");
}

$sql="insert into products(uid,pname,cid,pdes,pimage,sprice,sdate,edate)values('$uid','$pname','$catg','$des','$file','$sprice','$sdate','$edate')";
mysqli_query($con,$sql);
echo $uid;
		 echo "<script>var confirm = confirm(\"Your Product Has Been Uploaded Successfully!\");
          if(confirm){ 
              window.location='upload_product.php';
           }
		   else{
			   window.location='upload_product.php';
		   }
          </script>";
}

?>
