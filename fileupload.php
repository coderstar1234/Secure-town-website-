<?php

error_reporting(0);


?>
<!DOCTYPE html>
<html>
<head>
	
	<title>File upload</title>
</head>

<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<input type="file" name="uploadfile"><br><br>
		<input type="submit" name="submit" value="Upload File">
	</form>
</body>
</html>

<?php


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);

echo "<img src='$folder'  height='100px' width='100px'>";
//print_r($_FILES["uploadfile"]);

?>


