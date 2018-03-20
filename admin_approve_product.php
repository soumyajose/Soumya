<?php

include ("connection.php");
	$id=$_GET['p_id'];
	$sql="update products set status=1 where pid=$id;";
	mysqli_query($con,$sql);
	
	/*header("location:admin_approve_product.php");*/
	
	echo "<script>var confirm = confirm(\"Product has been approved!\");
          if(confirm){ 
              window.location='admin_view_product.php';
           }
		   else{
			   window.location='admin_view_product.php';
		   }
          </script>";
	
	
?>