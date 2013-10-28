<?php
include "config.php";
session_start();
$q=$_GET["q"];
$result1 = mysql_query("SELECT * FROM shopping_bag WHERE username='ditra77' and status='Belum Selesai' ");
$jumlah = $_POST['jumlah_beli'];
$keterangan = "'".$_POST['keterangan']."'";
if (mysql_num_rows($result1)>0) {
	$row1 = mysql_fetch_array($result1);
	$id_shopping_bag = $row1['id_shopping_bag'];
	$result2 = mysql_query("SELECT * FROM detail_shopping_bag WHERE id_shopping_bag=$id_shopping_bag and id_barang=$q");
	if (mysql_num_rows($result2)>0) {
		mysql_query("UPDATE detail_shopping_bag SET jumlah=$jumlah, keterangan=$keterangan WHERE id_shopping_bag=$id_shopping_bag and id_barang=$q");
		header('Location: detailbarang.php?q='.$q);
	} else {
		mysql_query("INSERT INTO detail_shopping_bag (id_shopping_bag,id_barang,jumlah,keterangan) VALUES ($id_shopping_bag,$q,$jumlah,$keterangan)");
		header('Location: detailbarang.php?q='.$q);
	}
} else {
	mysql_query("INSERT INTO shopping_bag (username,status) VALUES ('ditra77','Belum Selesai')");
	$result1 = mysql_query("SELECT * FROM shopping_bag WHERE username='ditra77' and status='Belum Selesai' ");
	$row1 = mysql_fetch_array($result1);
	$id_shopping_bag = $row1['id_shopping_bag'];
	mysql_query("INSERT INTO detail_shopping_bag (id_shopping_bag,id_barang,jumlah,keterangan) VALUES ($id_shopping_bag,$q,$jumlah,$keterangan)");
	header('Location: detailbarang.php?q='.$q);
}
mysql_close($con);
?>