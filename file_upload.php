
<html>
<head>
<title>File Uploading Form</title>
</head>
<body>
<h3>File Upload:</h3>
Select a file to upload: <br />
<form method="post" enctype="multipart/form-data">
<input type="file" name="file" size="50" />
<br />
<input type="submit" name="btnSubmit" value="Upload File" />
</form>
</body>
</html>

<?php
if(isset($_POST["btnSubmit"]))
{
$file="";
		$file=$_FILES['file']['name'];
		if( $_FILES['file']['name'] != "" )
{
	$target_path = "uploads/";
	$target_path = $target_path.basename( $_FILES['file']['name']); 
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
	{
		echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
	} 
	else
	{
		echo "There was an error uploading the file, please try again!";
	}

	  // copy( $_FILES['file']['name'], "/SendEmail" ) or 
		//       die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
}

?>
