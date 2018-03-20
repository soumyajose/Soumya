<?php

echo "<table border ='0.2' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=12 color=Black align='center' >PRODUCTS FOR AUCTION</font></th></tr>
<tr><th>Product Id</th><th>User Id</th><th>Product Name</th><th>Category</th><th>Description</th><th>Image</th><th>Starting Price</th><th>Starting Date</th><th>Ending Date</th>";

include("connection.php");
$sql="Select * from products where status=0;";
$res=mysqli_query($con,$sql);
//echo $sql;
	if(mysqli_num_rows($res)>0){
  while($row=$res->fetch_assoc())
  {
	  $cid=$row['cid'];
		$sq="select cname from category where cid=$cid";
		$res1=mysqli_query($con,$sq);
		$r1=mysqli_fetch_assoc($res1);
		$pid=$row['pid'];
		echo $pid;
	  
	 echo "<tr><td align='center'>".$row["pid"]."</td><td align='center'>".$row["uid"]."</td><td align='center'>".$row["pname"]."</td><td align='center'>".$r1["cname"]."</td><td align='center'>".$row["pdes"]."</td>
	  <td align='center'><img src='uploads/".$row['pimage']."' width='100px' height='100px'></td>
	  <td align='center'>".$row["sprice"]."</td><td align='center'>".$row["sdate"]."</td><td align='center'>".$row["edate"]."</td>
 <td>
 <a href='admin_approve_product.php?p_id=".$row["pid"]."'>Approve</a></td>
 <td>
 <a href='admin_reject_product.php?p_id=".$row["pid"]."'>Reject</a>
 </td>
 </form>
 
 </tr>";	 
   }
	}
  // echo $id;
 echo"</table>"
  ?>

