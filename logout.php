<?php
session_start();


session_unset();
header('location:http://localhost/portal/login.php');
?>