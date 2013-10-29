<?php

	
	function addToUser($email){
		// mengecek apakah masih bisa meng-add barang dengan id tertentu sejumlah tertentu
		// return -1 jika sukses, dan sisa barang jika gagal
		global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, "user");
		
		$statement = $conn->prepare("SELECT * FROM member WHERE Email = ?");
		
		$statement->bind_param("i", $email);
		$statement->execute();
		
		$statement->bind_result($email1);
		$statement->fetch();
		$statement->close();
		
		$conn->close();
		
		return $email == $email1 ? 1 : 0;
	}
		
	
	function handleRegistrationAjax(){
		// handle ajax untuk aksi2 transaksi
		// syarat: $_POST["ajax"] terdefinisi
		
		$request = json_decode($_POST["ajax"], true);
		$response = array("status" => "error");
		
		$sisa = addToUser($request["Email"]);
		if ($sisa == 0)
			$response["status"] = "ok";
		else
			$response["status"] = "error"
		return json_encode($response);
	}
	
?>
