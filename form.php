<?php include("connection.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PHP CRUD Operations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<form action="#" method="POST" enctype="multipart/form-data">
		<div class="title">
			Registration Form
	</div>

		<div class="form">
			<div class="input_field" >
				<label>Upload Image</label>
				<input type="file" name="uploadfile" style="width: 100%;">
			</div>
       
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input" name="fname" required>
			</div>
       
        <div class="input_field">
				<label>last Name</label>
				<input type="text" class="input" name="lname" required>
			</div>

    <div class="input_field">
				<label>Password </label>
				<input type="Password" class="input" name="password" required>
			</div>
			  
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password" class="input" name="conpassword" required>
			</div>
			 
			<div class="input_field">
				<label>Gender</label>
				<div class="custome_select">		
				<select name="gender" required>
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
			</div>
			<div class="input_field">
				<label>Email Address</label>
				<input type="text" class="input" name="email" required>
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="number" class="input" name="phone" required>
			</div>
			<div class="input_field">
				<label style="margin-right: 95px;">Caste</label>
				<input type="radio"  name="r1"  value="General" required><label style="margin-left: 5px;">General</label>
				<input type="radio"  name="r1" value="OBC"  required><label style="margin-left: 5px;">OBC</label>
				<input type="radio" name="r1"  value="SC"  required><label style="margin-left: 5px;">SC</label>
				<input type="radio"  name="r1" value="ST"  required><label style="margin-left: 5px;">ST</label>
			</div>
			<div class="input_field">
				<label style="margin-right: 95px;">Language</label>
				<input type="checkbox"  name="r2[]"  value="HINDI"><label style="margin-left: 5px;">HINDI</label>
				<input type="checkbox"  name="r2[]" value="ENGLISH"><label style="margin-left: 5px;">ENGLISH</label>
				<input type="checkbox" name="r2[]"  value="OTHER"><label style="margin-left: 5px;">OTHER</label>
			</div>
			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address" required></textarea>
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>
			<div class="input_field">
				<input type="submit" name="save" value="Register" class="btn">

			</div>
		</div>
	</form>
	</div>
</body>
</html>



<?php

	    if(isset($_POST['save']))
	    {



$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);


			
			$fname   = $_POST['fname'];
			$lname   = $_POST['lname'];
			$pwd   	 = $_POST['password'];
			$cpwd    = $_POST['conpassword'];
			$gender  = $_POST['gender'];
			$email   = $_POST['email'];
			$phone   = $_POST['phone'];
			$caste   = $_POST['r1'];

			$lang   = $_POST['r2'];
			$lang1 = implode(",",$lang);
			
			$address = $_POST['address'];


			/*if($fname != "" && $lname != "" && $pwd != "" && $gender!= "" && $email !="" && $phone != "" && $address != "")

			{
				//$query = "INSERT INTO form(fname,lname,password,conpassword,gender,email,phone,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";*/

			$query = "INSERT INTO form (std_image,fname,lname,password,cpassword,gender,email,phone,caste,lang,address) VALUES('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lang1','$address')";
			$data = mysqli_query($conn,$query);

			if($data)
		    {
				echo "<script> alert('Data Inserted into Database') </script>";

				?>
			<meta http-equiv = "refresh" content = "0; url = http://localhost/portal/login.php" />
<?php
		    }
		    else
		    {
				echo "<script> alert('Failed') </script>";
		    }

	   }

	 /*  else
	   {
	   	echo "<script>alert('fill the form');</script>";
	   }
	 }*/

	?>