<?php

include("connection.php");
$s=mysqli_query($con,"select * from products");
echo "<table border ='0.2' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=12 color=Black align='center' >PRODUCT FOR AUCTION</font></th></tr>
<tr><th>Product Id</th><th>User Id</th><th>Product Name</th><th>Category</th><th>Description</th><th>Image</th><th>Starting Price</th><th>Starting Date</th><th>Ending Date</th>";
  while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
	  echo "<tr><td align='center'>".$row["pid"]."</td><td align='center'>".$row["uid"]."</td><td align='center'>".$row["pname"]."</td><td align='center'>".$row["cname"]."</td><td align='center'>".$row["pdes"]."</td><td align='center'>".$row["pimage"]."</td>
	  <td align='center'>".$row["sprice"]."</td><td align='center'>".$row["sdate"]."</td><td align='center'>".$row["edate"]."</td>
	   <td>
 <form method='post' action='categedit.php'>
 <input type='hidden' name='h1' value='$cid'><input type='submit' name='edit' value='Approve'>
 </form>
 </td>ss
  <td>
 <form method='post' action='deletecateg.php'>
 <input type='hidden' name='h1' value='$cid'><input type='submit' name='delete' value='Reject'>
 </form>
 </td>
 
 </tr>";	 
   }
 echo"</table>"
  ?>

