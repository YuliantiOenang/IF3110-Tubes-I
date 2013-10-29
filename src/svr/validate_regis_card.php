<?php

	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$number = $_GET['number'];
	$name = $_GET['name'];
	
	// To protect MySQL injection
	$number = stripslashes($number);
	$name = stripslashes($name);
	$number = mysqli_real_escape_string($con, $number);
	$name = mysqli_real_escape_string($con, $name);
	
	$query = "SELECT * FROM customer WHERE NamaLengkap='" . $name . "'";
	$result = mysqli_query($con, $query);
	$query2 = "SELECT * FROM credit WHERE CardNumber='" . $number . "'";
	$result2 = mysqli_query($con, $query2);
	if (mysqli_num_rows($result) < 1 || mysqli_num_rows($result2) > 0) {
			echo 0;
		} else {
			echo 1;
		}

	mysqli_close($con); // close connection
?>