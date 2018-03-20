	
<?php
				session_start();
			
				$con=mysqli_connect("localhost","soumya","soumya123","project");
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$country=$_POST["country"];
				$state=$_POST["state"];
				$city=$_POST["city"];
				$mob=$_POST["mob"];
				$email=$_POST["email"];
				$pass=$_POST["password"];
				$cpass=$_POST["cpass"];
				
				$sql="insert into userreg(fname,lname,country,state,city,email,mobile,pass,curdate)values('$fname','$lname','$country','$state','$city','$email',$mob,'$pass',NOW());";
				
				mysqli_query($con,$sql);
				$_SESSION['email'] = $_POST['email']; 
				header('location:index.html');  
				
				
		
	?>