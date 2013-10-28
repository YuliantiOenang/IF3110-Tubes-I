<?php
	// Create connection
	include ("connect_database.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."' && password = '".$password."'");
	
	$found = false;
	while($row = mysqli_fetch_array($result)){
		$found = true;
		break;
	}
	
	if($found){
		echo "Welcome";
		session_start();
		$_SESSION['session'] = true;
		$_SESSION['username'] = $username;
		header("Location: ../index.php");
		
	} else{
		echo "wrong username/password";
	}
	mysqli_close($con);
?>