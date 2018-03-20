<?php
include("connection.php");
$name=$_POST["cname"];
$des=$_POST["cdes"];

 $sql1="UPDATE `category` SET `cname`='$name',`cdes`='$des'";
	  
	  mysqli_query($con,$sqll);
	   echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Data edited successfully...!</font></marquee>";
			  echo "</div>";	 
	  
?>

