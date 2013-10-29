<?php
	//get the q parameter from URL
	
	//$amount = 1;
	//$id = 1;
	
	//lookup all hints from array if length of q>0
	include ("connect_database.php");
	session_start();
	$result = $_SESSION["shopping_bag"];
	$found = true;
	foreach ($result as $value) {
		$result2 = mysqli_query($con,"SELECT * FROM inventori WHERE nama_inventori = '".$value."'");

		$data = null;
		while($row = mysqli_fetch_array($result2)){
			$data = $row;
			break;
		}

		if($data['jumlah'] >= $_SESSION[$value]){
			$result3 = mysqli_query($con,"UPDATE inventori SET jumlah = ".($data['jumlah'] - $_SESSION[$value]). " WHERE nama_inventori = '".$value."'");
		} else {
			echo 2;
			$found = false;
			break;
		}
	}
	if(!$found) echo 2;
	else{ 
		echo 1;
		session_destroy();
	}
?>