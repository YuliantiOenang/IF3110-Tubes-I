<?php
	// Create connection
	include ("connect_database.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."' && password = '".$password."'");
	
	$found = false;
	if($result->num_rows > 0) $found = true;
	
	if($found){
		echo "Welcome";
		session_start();
		$_SESSION['on'] = true;
		$_SESSION['username'] = $username;
		header("Location: ../index.php");
	} else{
		echo "wrong username/password";
	}
	mysqli_close($con);
?>