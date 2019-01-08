<?php

$host = "db4free.net";
$username = "briancaguioa";
$password = "Incorrect_2";
$dbname = "to_do_app";


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_error($conn) );
}

// echo 'connected successfully';

?>