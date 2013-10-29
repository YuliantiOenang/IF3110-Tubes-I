<?php
include "koneksi.inc.php";
if(isset($_POST['username'])){$username=$_POST['username'];}
if(isset($_POST['password'])){$password=$_POST['password'];}
if(isset($_POST['nama'])){$nama=$_POST['nama'];}
if(isset($_POST['nohp'])){$nohp=$_POST['nohp'];}
if(isset($_POST['alamat'])){$alamat=$_POST['alamat'];}
if(isset($_POST['provinsi'])){$provinsi=$_POST['provinsi'];}
if(isset($_POST['kota'])){$kota=$_POST['kota'];}
if(isset($_POST['kodepos'])){$kodepos=$_POST['kodepos'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
$perintah="INSERT INTO anggota(username,password,nama,nomorhp,alamat,provinsi,kota,kodepos,email) 
	values ('$username','$password','$nama','$nohp','$alamat','$provinsi','$kota','$kodepos','$email')";
if(!empty($username) and !empty($password)){
	$hasil=mysql_query($perintah,$koneksi);
	if($hasil){?>
		<html>
		<head><script>
			if(typeof(Storage)!=="undefined"){
				localStorage.wbduser="<? echo $username; ?>";
				localStorage.wbdlogintime=new Date().getTime();
				window.location="registercardform.php";
			}else{
				document.write("Maaf, browser kamu tidak support localStorage sehingga informasi username tidak dapat disimpan...");
				document.write("<a href='index.php'>Kembali ke halaman utama</a>");
			}
		</script>
		</head><body></body></html>
	<?}else{
		echo "<html><body>Pendaftaran gagal.<br><a href='registerform.php'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}
}else{
	echo "<html><body>Username atau password anda kosong!<br><a href='registerform.php'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
}
?>