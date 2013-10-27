<?php
	//fungsi-fungsi pengambilan data (SELECT) barang
	include(dirname(__FILE__)."/db.php");
	
	class Barang{
		public $id, $nama, $stok, $harga, $jumlah_beli, $kategori, $deskripsi;
		
		function buildJSON(){
			$arr = array();
			$arr["id"] = $this->id; $arr["nama"] = $this->nama; $arr["stok"] = $this->stok; $arr["harga"] = $this->harga;
			$arr["jumlah_beli"] = $this->jumlah_beli; $arr["kategori"] = $this->kategori; $arr["deskripsi"] = $this->deskripsi;
			
			return $arr;
		}
	}
	
	function searchAll($keyword, $page){
		// mengambil barang yg punya keyword tertentu (entah nama, kategori, deskripsi, dll).
		// page dimulai dari 0, 1 page 10 barang
		// kembalian: array of Barang
	}
	
	function searchCategory($category, $page){
		// mengambil data barang dengan kategori tertentu
		// page dimulai dari 0, 1 page 10 barang
		// kembalian: array of Barang
		
		global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
		
		$statement = $conn->prepare("SELECT * FROM barang WHERE kategori = ? LIMIT ?, 10");
		$statement->bind_param("si", $category, $page * 10);
		
		$statement->execute();
		
		$barang = new Barang();
		
		
		$statement->bind_result($barang->id, $barang->nama, $barang->stok, $barang->harga, $barang->jumlah_beli, $barang->kategori, $barang->deskripsi);
		$result = array();
		while($statement->fetch()){
			array_push($result, new Barang($row));
		}
		
		$statement->close();
		$conn->close();
		
		return $result;
	}

	function searchId($id_barang){
		// mengambil data barang dengan id tertentu (spesifik)
		// kembalian: Barang
		
		global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
		
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
		
		$statement = $conn->prepare("SELECT * FROM barang WHERE id_barang = ?");
		
		$statement->bind_param("i", $id_barang);
		
		$statement->execute();
		
		$barang = new Barang();
		
		$statement->bind_result($barang->id, $barang->nama, $barang->stok, $barang->harga, $barang->jumlah_beli, $barang->kategori, $barang->deskripsi);
		if($statement->fetch()){
			$statement->close();
			$conn->close();
		
			return $barang;
		}else{
			$statement->close();
			$conn->close();
			
			return null;
		}
	}
	
	function searchIds($ids){
		$hasil = array();
		
		global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
	
		foreach ($ids as $id){
			$statement = $conn->prepare("SELECT * FROM barang WHERE id_barang = ?");
			$statement->bind_param("i", $id);
			$statement->execute();
			
			$barang = new Barang();
			$statement->bind_result($barang->id, $barang->nama, $barang->stok, $barang->harga, $barang->jumlah_beli, $barang->kategori, $barang->deskripsi);
			
			if(!$statement->fetch()){
				$barang = null;
			}
			
			array_push($hasil, $barang);
			$statement->close();
		}
		
		$conn->close();
		
		return $hasil;
	}
	
	function handleSearchAjax(){
		// handle ajax untuk aksi2 search
		// syarat: $_POST["ajax"] terdefinisi
		
		$request = json_decode($_POST["ajax"], true);
		$response = array("status" => "error");
		
		switch($request["action"]){
			case "barang":

			break;
			case "cart":
				$response["status"] = "ok";
				$hasil = searchIds($request["ids"]);
				
				$response["barang"] = array();
				foreach($hasil as $barang){
					if($barang!=null){
						array_push($response["barang"], $barang->buildJSON());
					}else{
						array_push($response["barang"], null);
					}
				}
				
			break;
			case "category":
			
			break;
			case "search":
			
			break;
			default:
				return null;
			break;
		}
		
		return json_encode($response);
	}

?>