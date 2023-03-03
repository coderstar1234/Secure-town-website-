<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- ICONSCOUT CDN -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- GOOGLE FONT (MONTSERRAT)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;1,500&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="http://localhost/portal/index.php" class="nav__logo">My Portal</a>
            <ul class="nav__items">
                <li><a href="http://localhost/portal/index.php">Home</a></li>
                <li><a href="http://localhost/portal/about.php">About</a></li>
                <li><a href="http://localhost/portal/service.php">Services</a></li>
                <li><a href="http://localhost/portal/contact.php">Contact</a></li>
             <!--   <li><a href="signin.html">Signin</a></li>-->
               <li class="nav__profile">
                <div class="avatar">
                    <img src="./image/him1.jpeg">
                </div>
                <ul>
                   <li><a href="http://localhost/portal/form.php" style="background-color: darkred; color: white;height: 40px;text-align: center;">Sign Up</a></li>
                </ul>
            </li>
         </ul>

         <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
</nav>

	<div class="center">
		<h1 style="color:blue;">Login</h1>
		<form action="#" method="POST" autocomplete="off">

		<div class="form">
			<input type="text" name="username" class="textfiled" placeholder="username">
			<input type="Password" name="password" class="textfiled" placeholder="password">

			<div class="forgetpass"><a href="#" class="link" onclick="message()"  style="color:blue;">Forget Password ?</a></div>

			<input type="submit" name="login" value="Login" class="btn">

			<div class="signup" style="color: blue;">New Member ?<a href="#" class="link" style="color:darkblue;">SignUp Here</a></div></div>
		</div>
	</div>
</form>





	<script>
		function message()
		{
			alert("check the Password");
		}
	</script>
</body>
</html>

<?php
	include("connection.php");

	if(isset($_POST['login']))
	{
		$username =	$_POST['username'];
		$pwd =	$_POST['password'];

		$query = "SELECT * FROM form WHERE email = '$username' && password ='$pwd' ";
		$data = mysqli_query($conn,$query);

		$total = mysqli_num_rows($data);
		//echo $total;

		if($total == 1)
		{
			$_SESSION['user_name']  = $username;
			header('location:display.php');	
		}
		else
		{
			echo "Login Failed";
		}
	}

?>




<script src="./main.js"></script>
</body>
</html>







