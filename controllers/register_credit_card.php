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
	
	$card_number = $_POST['card_number'];
	$name = $_POST['name'];
	$expired_date = $_POST['expired_date'];
	
	//do insertion query
	//echo "INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".$password."','".$email."')";
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM credit_card WHERE card_number = '".$card_number."'");
	
	$found = false;
	while($row = mysqli_fetch_array($result)){
		$found = true;
		break;
	}
	
	if(!$found){
		mysqli_query($con,"INSERT INTO credit_card (credit_card_number, name, expired_date VALUES ('".$card_number."','".$name."','".$expired_date."')");
	} else{
		echo "same card_number is found, can't register with this card_number";
	}
	mysqli_close($con);
?>