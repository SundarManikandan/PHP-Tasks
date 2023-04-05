<?php
//connect mysql database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_demo";
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));
?>