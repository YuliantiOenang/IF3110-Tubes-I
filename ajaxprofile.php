<?php
if(isset($_POST['username'])){ $username = $_POST['username']; }
include "koneksi.inc.php";
$perintah = "select * from anggota where username = '".$username."'";
$hasil = mysql_query($perintah,$koneksi);
if($hasil){
	while($row = mysql_fetch_array($hasil)){
		echo $row['nama']."||";
		echo $row['nomorhp']."||";
		echo $row['alamat']."||";
		echo $row['provinsi']."||";
		echo $row['kota']."||";
		echo $row['kodepos']."||";
		echo $row['email']."||";	
		echo $row['username']."||";
		echo $row['password']."||";
		echo $row['foto'];
	}
}else{
	echo "Gagal koneksi ke database";
}
?>