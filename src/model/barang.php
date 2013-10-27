<?php
class Barang_Model
{
	private $database;
	public function __construct()
	{
		$this->database = new SQL();
	}

	public function countBarang()
	{
		$query = "SELECT COUNT(id) AS JmlBarang from barang";
		$this->database->query($query);
		return $this->database->fetch();		
	}

	public function countCariBarang($nama)
	{
		$query = "SELECT COUNT(id) AS JmlBarang from barang where nama_barang LIKE '%$nama%'";
		$this->database->query($query);
		return $this->database->fetch();		
	}

	public function getAllBarang($offset)
	{
		//LIMIT 0, 10 
		$query = "select barang.id, barang.nama_barang, barang.harga_barang, barang.jumlah_barang from barang join kategori on barang.id_kategori=kategori.id limit ".$offset.",10";
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

	public function cariBarang($nama_barang,$offset)
	{
		//LIMIT 0, 10 
		$query = "select barang.id, barang.nama_barang, barang.harga_barang, barang.jumlah_barang from barang join kategori on barang.id_kategori=kategori.id AND barang.nama_barang LIKE '%$nama_barang%' LIMIT ".$offset.",10";
		return $this->database->query($query);
	}
}
		
