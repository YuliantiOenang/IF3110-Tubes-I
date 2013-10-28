<?php
	// Create connection
	include ("connect_database.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//do insertion query
	//echo "INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".$password."','".$email."')";
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."' && password = '".$password."'");
	
	$found = false;
	while($row = mysqli_fetch_array($result)){
		$found = true;
		break;
	}
	
	if($found){
		echo "Welcome";
	} else{
		echo "wrong username/password";
	}
	mysqli_close($con);
?>