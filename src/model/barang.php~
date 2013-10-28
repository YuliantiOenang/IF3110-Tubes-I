<?php
class Barang_Model
{
	private $database;
	public function __construct()
	{
		$this->database = new SQL();
	}

	public function getAllCategory()
	{
		$query = "SELECT * FROM kategori";
		return $this->database->query($query);
	}

	public function countBarang()
	{
		$query = "SELECT COUNT(id) AS JmlBarang from barang";
		$this->database->query($query);
		return $this->database->fetch();		
	}

	public function countCariBarang($nama_barang,$kategori,$harga,$operator)
	{
		$partial1; $partial2; $partial3;

		if ($nama_barang != "") $partial1 = " AND barang.nama_barang LIKE '%$nama_barang%' ";
		else $partial1 = "";

		if ($kategori != "") $partial2 = " AND kategori.name = '".$kategori."' ";
		else $partial2 = "";

		if (is_numeric($harga))
		{
			if ($operator == "L")
				$partial3 = " AND barang.harga_barang < ".$harga." ";
			else if ($operator == "E")
				$partial3 = " AND barang.harga_barang = ".$harga." ";
			else if ($operator == "G")
				$partial3 = " AND barang.harga_barang > ".$harga." ";
			else die("Sistem mendeteksi adanya keanehan");
		}
		else $partial3 = "";

		$query = "SELECT COUNT(id) AS JmlBarang from barang where id=id ".$partial1.$partial2.$partial3;
		$this->database->query($query);
		return $this->database->fetch();		
	}

	public function cariBarang($nama_barang,$kategori,$harga,$operator,$offset)
	{
		$partial1; $partial2; $partial3;

		if ($nama_barang != "") $partial1 = " AND barang.nama_barang LIKE '%$nama_barang%' ";
		else $partial1 = "";

		if ($kategori != "") $partial2 = " AND kategori.name = '".$kategori."' ";
		else $partial2 = "";

		if (is_numeric($harga))
		{
			if ($operator == "L")
				$partial3 = " AND barang.harga_barang < ".$harga." ";
			else if ($operator == "E")
				$partial3 = " AND barang.harga_barang = ".$harga." ";
			else if ($operator == "G")
				$partial3 = " AND barang.harga_barang > ".$harga." ";
			else die("Sistem mendeteksi adanya keanehan");
		}
		else $partial3 = "";

		
		//LIMIT 0, 10 
		$query = "select barang.gambar, kategori.name, barang.id, barang.nama_barang, barang.harga_barang, barang.jumlah_barang from barang join kategori on barang.id_kategori=kategori.id ".$partial1.$partial2.$partial3." LIMIT ".$offset.",10";
		//die($query);
		return $this->database->query($query);
	}

	public function getAllBarang($offset)
	{
		//LIMIT 0, 10 
		$query = "select barang.gambar, barang.id, barang.nama_barang, barang.harga_barang, barang.jumlah_barang from barang join kategori on barang.id_kategori=kategori.id limit ".$offset.",10";
		return $this->database->query($query);
	}

	public function getBarangID($id)
	{
		$query = "select * from barang join kategori on barang.id_kategori=kategori.id and barang.id=".$id;
		return $this->database->query($query);
	}

	public function getOnlyBarangID($id)
	{
		$query = "select * from barang where id=".$id;
		$this->database->query($query);
		return $this->database->fetch();
	}

	public function Beli($id_barang, $id_card, $jumlah_barang)
	{
		$query = "INSERT INTO barang_card (id_barang,id_card,status,jumlah_barang,id_user) VALUES ('".$id_barang."','".$id_card."','"."0"."','".$jumlah_barang."','".$_SESSION['id']."')";
		$this->database->query($query);
		
		$row = $this->getOnlyBarangID($id_barang);
		$hasil = ($row->jumlah_barang) - $jumlah_barang;
		
		$query = "UPDATE barang SET jumlah_barang=".$hasil." where id =".$id_barang;
		$this->database->query($query);
	}

	public function generateCart()
	{
		$query = "SELECT barang_card.tgl_pembelian, barang_card.status, barang_card.jumlah_barang,card.card_number,barang.nama_barang from barang JOIN barang_card JOIN card ON barang_card.id_user=".$_SESSION['id']." AND barang_card.id_barang = barang.id AND barang_card.id_card = card.id AND card.id_user =".$_SESSION['id'];
		return $this->database->query($query);
	}
}
		
