<!DOCTYPE HTML>
<html>

<body>

<?php include "header.php"; ?>

<article id="registerform">
<?php
include "koneksi.inc.php";
$username=$_POST['username'];
$cardnumber=$_POST['cardnumber'];
$nama=$_POST['nama'];
$expired=$_POST['expired'];
$perintah="INSERT INTO kartu_kredit(owner,card_number,nama,expired) 
	values ('$username','$cardnumber','$nama','$expired')";
if(!empty($cardnumber)){
	$hasil=mysql_query($perintah,$koneksi);
	if($hasil){
		echo "<html><body>Pendaftaran kartu kredit berhasil!<br><a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}else{
		echo "<html><body>Pendaftaran kartu kredit gagal.<br><a href='registercardform.php?username=".$username."'>Kembali</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}
}else{
	echo "<html><body>Your card number is incorrect!<br><a href='registercardform.php?username=".$username."'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
}
?>
</article>

<?php include "footer.php"; ?>
</body>