<?php
	// Create connection
	include ("connect_database.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."' && password = '".sha1($password)."'");
	
	$found = false;
	if($result->num_rows > 0) $found = true;
	
	if($found){
		session_start();
		//use session
		$_SESSION['on'] = true;
		$_SESSION['username'] = $username;
		
		//use cookie to preserve data persistance
		setcookie("on", true, time()+3600*24*30);
		setcookie("username", $username, time()+3600*24*30);
		
		header("Location: ../index.php");
	} else{
		echo "wrong username/password";
	}
	mysqli_close($con);
?>