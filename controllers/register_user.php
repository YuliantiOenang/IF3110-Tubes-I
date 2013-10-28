<?php
	// Create connection
	$con=mysqli_connect("127.0.0.1","root","","toko_imba");

	// Check connection
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//mysqli_query($con,"INSERT INTO pengguna (id_pengguna, nama_pengguna)
	//VALUES ('Peter', 'Griffin')");

	//check data posted
	//echo "Submit query".'<br/>';
	//echo $_POST['name'].'<br/>';
	//echo $_POST['username'].'<br/>';
	//echo $_POST['password'].'<br/>';
	//echo $_POST['email'].'<br/>';
	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	//do insertion query
	//echo "INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".$password."','".$email."')";
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."'");
	
	$found = false;
	while($row = mysqli_fetch_array($result)){
		$found = true;
		break;
	}
	
	if(!$found){
		mysqli_query($con,"INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".$password."','".$email."')");
	} else{
		echo "same username is found, can't register with this username";
	}
	mysqli_close($con);
?>