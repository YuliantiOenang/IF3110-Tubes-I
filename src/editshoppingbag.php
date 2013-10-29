<?php
include "config.php";
session_start();
$username = "'".$_SESSION['id']."'";
$result1 = mysql_query("SELECT * FROM shopping_bag WHERE username=$username and status='Belum Selesai' ");
$row1 = mysql_fetch_array($result1);
$id_shopping_bag = $row1['id_shopping_bag'];
$result2 = mysql_query("SELECT * FROM detail_shopping_bag WHERE id_shopping_bag=$id_shopping_bag");
$i=0;
while($row2=mysql_fetch_array($result2)) { 
	$id_barang = $row2['id_barang'];
	$result3 = mysql_query("SELECT * FROM barang WHERE id_barang=$id_barang");
	$row3=mysql_fetch_array($result3);
	$jumlah = $_POST['jumlah_beli'][$i];
	if($jumlah<=0){
		mysql_query("DELETE FROM detail_shopping_bag WHERE id_barang=$id_barang");
	} else {
		if ($jumlah > $row3['stok']) {
			$jumlah = $row3['stok'];
		}
		$keterangan = "'".$_POST['keterangan'][$i]."'";
		mysql_query("UPDATE detail_shopping_bag SET jumlah=$jumlah WHERE id_barang=$id_barang");
		mysql_query("UPDATE detail_shopping_bag SET keterangan=$keterangan WHERE id_barang=$id_barang");
	}
	$i++;
}
header('Location: shoppingbag.php');
mysql_close($con);
?>