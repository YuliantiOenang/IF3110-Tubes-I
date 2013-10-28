<?php
	$usr = intval($_GET['usr']); // username
	$pass = intval($_GET['pass']); // password
	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_close($con); // close connection
?>