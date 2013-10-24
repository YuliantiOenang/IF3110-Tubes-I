<?php
include "koneksi.inc.php";
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$nohp=$_POST['nohp'];
$alamat=$_POST['alamat'];
$provinsi=$_POST['provinsi'];
$kota=$_POST['kota'];
$kodepos=$_POST['kodepos'];
$email=$_POST['email'];
$perintah="INSERT INTO anggota(username,password,nama,nomorhp,alamat,provinsi,kota,kodepos,email) 
	values ('$username','$password','$nama','$nohp','$alamat','$provinsi','$kota','$kodepos','$email')";
if(!empty($username) and !empty($password)){
	$hasil=mysql_query($perintah,$koneksi);
	if($hasil){
		echo "<html><script>window.location='registercardform.php?username=".$username."';</script><body>Pendaftaran berhasil!<br><a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}else{
		echo "<html><body>Pendaftaran gagal.<br><a href='registerform.php'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}
}else{
	echo "<html><body>Your username or password is incorrect!<br><a href='registerform.php'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
}
?>