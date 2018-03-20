<?php
session_start();
$con=mysqli_connect("localhost","soumya","soumya123","project");
$email=$_POST["email"];
$pass=$_POST["password"];
$sq="select uid,email,pass,usertype from userreg where email='$email' and pass='$pass';";
$res=mysqli_query($con,$sq);

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$uid=$row["uid"];
	$_SESSION['uid'] = $uid;
	$type=$row["usertype"];
	if($row["usertype"]==1)
	{
		$_SESSION['email'] = $_POST['email'];
	header('location:userhome.html');
	//echo $uid;
	
	}
	else{
		$_SESSION['email'] = $_POST['email'];
		header('location:adminindex.html');
		}
	}
else{	
		echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
			  document.getElementsByName('password').value='';
           }
		   else{
			   window.history.back();
			   document.getElementsByName('password').value='';
		   }
          </script>";
}
?>
