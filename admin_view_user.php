<?php

include("connection.php");
$s=mysqli_query($con,"select * from userreg");
echo "<table border ='0.2' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=15 color=white >USER LIST</font></th></tr>
<tr><th>User Id</th><th>Name</th><th>Country</th><th>State</th><th>City</th><th>Mobile Number</th><th>Email Id</th>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	
  echo "<tr><td align='center'>".$row["uid"]."</td><td align='center'>".$row["fname"].$row["lname"]."</td><td align='center'>".$row["country"]."</td><td align='center'>".$row["state"]
  ."</td><td align='center'>".$row["city"]."</td><td align='center'>".$row["mobile"]."</td><td align='center'>".$row["email"]."</td>;
  <td>
 <form method='post' action='admindelete.php'>
 <input type='hidden' name='h1' value='$uid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 </tr>";	 
   }
 echo"</table>"
  ?>