<?php

	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$username = $_GET['username']; // username
	$email = $_GET['email']; // email

	// To protect MySQL injection
	$username = stripslashes($username);
	$email = stripslashes($email);
	$username = mysqli_real_escape_string($con, $username);
	$email = mysqli_real_escape_string($con, $email);
	
	$query = "SELECT * FROM customer WHERE IdName='" . $username . "'";
	$result = mysqli_query($con, $query);
	$query2 = "SELECT * FROM customer WHERE Email='" . $email . "'";
	$result2 = mysqli_query($con, $query2);
	if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0) {
			echo 0;
		} else {
			echo 1;
		}

	mysqli_close($con); // close connection
?>