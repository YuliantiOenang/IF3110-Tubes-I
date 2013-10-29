<?php
include "config.php";
session_start();

$username = "'".$_SESSION['id']."'";
$result1 = mysql_query("SELECT * FROM kartu_kredit WHERE username=$username");

if (mysql_num_rows($result1)>0) {
	$result2 = mysql_query("SELECT * FROM shopping_bag WHERE username=$username and status='Belum Selesai' ");
	$row2 = mysql_fetch_array($result2);
	$id_shopping_bag = $row2['id_shopping_bag'];
	$result3 = mysql_query("SELECT * FROM detail_shopping_bag WHERE id_shopping_bag=$id_shopping_bag");
	$i=0;
	while($row3=mysql_fetch_array($result3)) { 
		$id_barang = $row3['id_barang'];
		$result4 = mysql_query("SELECT * FROM barang WHERE id_barang=$id_barang");
		$row4=mysql_fetch_array($result4);
		$jumlah = $row3['jumlah'];
		$newstok = $row4['stok'] - $jumlah;
		$terjual = $row4['terjual'] + $jumlah;
		mysql_query("UPDATE barang SET stok=$newstok,terjual=$terjual WHERE id_barang=$id_barang");
		$i++;
	}
	mysql_query("UPDATE shopping_bag SET status='Selesai' WHERE id_shopping_bag=$id_shopping_bag");
	header('Location: profile.php');
} else {
	header('Location: registrasikartukredit.php');
}
mysql_close($con);
?>