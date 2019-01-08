<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "to_do_app";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_error($conn) );
}

// echo 'connected successfully';

?>