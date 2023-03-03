<?php
//error_reporting(0);
	$servername = "localhost:3306";
	$username = " root@localhost@";
	$password = "Admin123";
	$dbname = "responsiveform3";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	/*new mysqli("localhost","root","","responsiveform3");*/

	if($conn)
	{
		//echo "connection ok";
	}
	else
	{
		echo "connection failed".mysqli_connect_error();
	}



?>
