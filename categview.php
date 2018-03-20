<?php

include("connection.php");
$s=mysqli_query($con,"select * from category");
echo "<table border ='0.2' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=12 color=Black align='center' >CATEGORY DETAILS</font></th></tr>
<tr><th>Category Id</th><th> Category Name</th><th>Description</th>";
  while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
	  echo "<tr><td align='center'>".$row["cid"]."</td><td align='center'>".$row["cname"]."</td><td align='center'>".$row["cdes"]."</td>
	   <td>
 <form method='post' action='categedit.php'>
 <input type='hidden' name='h1' value='$cid'><input type='submit' name='edit' value='Edit'>
 </form>
 </td>ss
  <td>
 <form method='post' action='deletecateg.php'>
 <input type='hidden' name='h1' value='$cid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 
 </tr>";	 
   }
 echo"</table>"
  ?>

