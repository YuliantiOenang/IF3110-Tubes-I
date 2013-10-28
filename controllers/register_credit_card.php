<?php
	// Create connection
	include ("connect_database.php");
	
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