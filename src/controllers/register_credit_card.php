<?php
	$card_number = $_POST['card_number'];
	$name = $_POST['name'];
	$dates = $_POST['dates'];
	$months = $_POST['month'];
	$years = $_POST['year'];
	
	$originalDate = $years."-".$months."-".$dates;
	$expired_date = date("Y-m-d", strtotime($originalDate));
	
	// Create connection
	include ("connect_database.php");
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM credit_card WHERE card_number = ".$card_number);
	
	$found = false;
	if($result == null){
		
	} else{
		while($row = mysqli_fetch_array($result)){
			$found = true;
			break;
		}
	}
	
	if(!$found){
		mysqli_query($con,"INSERT INTO credit_card (credit_card_number, name, expired_date) VALUES (".$card_number.",'".$name."','".$expired_date."')");
		echo "<script> alert('Kartu Kredit Anda berhasil diregistrasi'); </script>";
	} else{
		echo "same card_number is found, can't register with this card_number";
		echo "<script> alert('registrasi Anda gagal'); </script>";
	}
	mysqli_close($con);
	
	header("Location : ../pages/register_credit_card.php");
?>