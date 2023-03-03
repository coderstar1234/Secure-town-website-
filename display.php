<?php
session_start();
//echo " Welcome".$_SESSION['user_name'];
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
    <!-- ICONSCOUT CDN -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- GOOGLE FONT (MONTSERRAT)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;1,500&display=swap" rel="stylesheet">

	

	<title>Display</title>
	<style>
		body
		{
			background-color: #5854c7;
		}
		table
		{
			background-color:yellow;
			color:black;

		}
		.update, .delete
		{
			background-color: green;
			color:white;
			border:0;
			outline: none;
			border-radius: 7px;
			height:24px;
			width: 80px;
			font-weight:bold;
			cursor: pointer;
		}
		.delete
		{
			background-color: red;
			}
	</style>
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
                   <li><a href="http://localhost/portal/logout.php" style="background-color: darkred; color: white;height: 40px;text-align: center;">LOGOUT</a></li>
                </ul>
            </li>
         </ul>

         <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
</nav>
<script src="./main.js"></script>
</body>

</html>








<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
	header('location:login.php');
}


$query = "SELECT * FROM form"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);



//echo $result[fname];


//echo $total;

if($total != 0)
{
	//echo "Table has records";
	

	?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1 align="center"><mark>Displaying All Records</mark></h1>
	
<center><table border="1" cellspacing="6" width="100%">
		<tr>
		<th width="4%">Rollno.</th>
		<th width="4%">Image</th>
		<th width="6%">First Name</th>
		<th width="4%">Last Name</th>
		<th width="5%">Gender</th>
		<th width="20%">Email</th>
		<th width="7%">Phone</th>
		<th width="6%">Caste</th>
		<th width="8%">Language</th>
		<th width="22%">Address</th>
		<th width="14%">Operations</th>
		</tr>
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['Rollno']."</td>

				<td><img src='".$result['std_image']."' height='100px' width='100px'></td>

				<td>".$result['fname']."</td>
				<td>".$result['lname']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phone']."</td>
				<td>".$result['caste']."</td>
				<td>".$result['lang']."</td>
				<td>".$result['address']."</td>

				<td><a href='update_design.php?id=$result[Rollno]'><input type='submit'value='Update' class='update'></a>

				<a href='delete.php?id=$result[Rollno]'><input type='submit'value='Delete' class='delete' onclick = 'return checkdelete()'></a>
				</td>
			</tr>
			";   
			   //&fn=$result[fname] &ln=$result[lname]&gn=$result[gender]&em=$result[email]&ph=$result[phone]&ad=$result[address]

	}
}

else
{
	echo "No records found";

}


?>
</table>
</center>
 

<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this record ?');
	}

</script>





