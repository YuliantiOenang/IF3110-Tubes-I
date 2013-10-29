<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$usr = $_GET['usr']; // username
	$pass = $_GET['pass']; // password

	// To protect MySQL injection
	$usr = stripslashes($usr);
	$pass = stripslashes($pass);
	$usr = mysqli_real_escape_string($con, $usr);
	$pass = mysqli_real_escape_string($con, $pass);
	
	$query = "SELECT Password FROM customer WHERE IdName='" . $usr . "'";
	$result = mysqli_query($con, $query);
	if ($row = mysqli_fetch_array($result)) {
		if ($row['Password'] == $pass) {
			$_SESSION['usr'] = $usr;
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 0;
	}
	
	mysqli_close($con); // close connection
?>