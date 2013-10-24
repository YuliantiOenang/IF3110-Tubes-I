<?php
	include("db.php");

	//fungsi-fungsi transaksi barang
	
	function addToCart($id_barang, $jumlah){
		// mengecek apakah masih bisa meng-add barang dengan id tertentu sejumlah tertentu
		// return -1 jika sukses, dan sisa barang jika gagal
		
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
		
		$statement = $conn->prepare("SELECT stok FROM barang WHERE id_barang = ?");
		
		$statement->bind_param("i", $id_barang);
		$statement->execute();
		
		$statement->bind_result($sisa);
		$statement->fetch();
		$statement->close();
		
		$conn->close();
		
		return $sisa >= $jumlah ? -1 : $sisa;
	}
	
	function buy($list){
		/* list adalah array barang yang akan dibeli. tiap elemennya adalah:
		 * 		{"id" => id barang tsb, "jumlah" => jumlah barang yg dibeli}
		 * 
		 * buy() mengembalikan true jika pembelian berhasil, false jika gagal (ada barang yg tidak mencukupi).
		 * jika ada satu jenis barang yg tidak mencukupi, maka seluruh transaksi digagalkan
		 */
		 
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
		
		$conn->autocommit(false);
		
		$success = true;	
		$sql = "UPDATE barang SET stok = stok - ? WHERE id_barang = ? AND stok >= ?";
		
		foreach ($list as $item){
			$statement = $conn->prepare($sql);
			$statement->bind_param("iii", $item["jumlah"], $item["id"], $item["jumlah"]);
			$statement->execute();
			
			$success = ($statement->affected_rows == 1); // sukses jika affected row tepat 1
			
			$statement->close();
			
			if (!$success){
				break;
			}
		}
		
		if ($success){
			$conn->commit();
		}else{
			$conn->rollback();
		}	
		
		
		$conn->close();
		return $success;
	}
	
	// handle ajax
	if (isset($_POST["ajax"])){
		header("Content-type: text/plain");
		
		$request = json_decode($_POST["ajax"], true);
		
		$response = array("status" => "error");
		
		switch($request["action"]){
			case "add":
				$sisa = addToCart($request["id_barang"], $request["jumlah"]);
				if ($sisa == -1)
					$response["status"] = "ok";
				else
					$response["sisa"] = $sisa;
			break;
			case "buy":
				if(buy($request["list"]))
					$response["status"] = "ok";
			break;
		}
		
		exit(json_encode($response));
	}
?>
