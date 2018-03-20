<?php
include "connection.php";
	$id=$_GET['p_id'];
	$sql="delete from products where pid=$id;";
	mysqli_query($con,$sql);
	
	//header("location:admin_view_product.php");
	
	echo "<script>var confirm = confirm(\"Product has been rejected\");
          if(confirm){ 
              window.location='admin_view_product.php';
           }
		   else{
			   window.location='admin_view_product.php';
		   }
          </script>";
?>

