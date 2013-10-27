<?php
	//fungsi-fungsi pengambilan data (SELECT) barang
	include(dirname(__FILE__)."/db.php");
	
	class Barang{
		public $id, $nama, $stok, $harga, $jumlah_beli, $kategori, $deskripsi;
		
		/*public function __construct($rawdata){
			$id = $rawdata["id_barang"]; $nama = $rawdata["nama_barang"]; $stok = $rawdata["stok"];
			$harga =$rawdata["harga"]; $jumlah_beli=$rawdata["jumlah_terbeli"]; 
			$kategori = $rawdata["kategori"]; $deskripsi = $rawdata["deskripsi"];
		}*/
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
		
		if($statement == null) echo $conn->error;
		
		$statement->bind_param("i", $id_barang);
		
		$statement->execute();
		
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
	
	if (isset($_POST["ajax"])){
		header("Content-type: text/plain");
		
		exit();
	}

?>