<?php
include ("connection.php");
	$id=$_GET['pid'];
	$sql="update products set status=1 where pid=$id;";
	mysqli_query($con,$sql);
	
	/*header("location:product_pending.php");*/
	
	echo "<script>var confirm = confirm(\"Product has been approved!\");
          if(confirm){ 
              window.location='product_pending.php';
           }
		   else{
			   window.location='product_pending.php';
		   }
          </script>";
	
	
?>