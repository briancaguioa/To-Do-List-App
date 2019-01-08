<?php

require_once './connect.php';

$name = $_POST['task'];

$sql = "INSERT INTO tasks(name) VALUES ('$name')";

// mysql.query function expects 2 arguments, first is the connection to your db variable and the second is your mysql query variable

$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
	header('Location: ../../index.php'); 
}else {
	echo 'error: ' . $sql . "<br>" . mysqli_error($conn);
}

// close a previously opened database connection
mysqli_close($conn);

?>