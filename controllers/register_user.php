<?php
	// Create connection
	include ("connect_database.php");
	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."'");
	
	$found = false;
	if($result != null){
		while($row = mysqli_fetch_array($result)){
			$found = true;
			break;
		}
	}
	
	if(!$found){
		mysqli_query($con,"INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".sha1($password)."','".$email."')");
		header('Location: ../index.php');
	} else{
		echo "same username is found, can't register with this username";
	}
	mysqli_close($con);
?>