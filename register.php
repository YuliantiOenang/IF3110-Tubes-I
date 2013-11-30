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
	if($hasil){?>
		<html>
		<head><script>
			if(typeof(Storage)!=="undefined"){
				localStorage.wbduser="<? echo $username; ?>";
				localStorage.wbdlogintime=new Date().getTime();
				alert("Pendaftaran berhasil");
				window.location.href="../tubeswbd1/registercardform.php";
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