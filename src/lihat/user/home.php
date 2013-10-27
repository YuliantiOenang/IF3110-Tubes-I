<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ini laman Login </title>
</head>
<body>
Selamat Datang, anda berada pada laman user<br>
Untuk lihat-lihat barang, klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang"> ini </a><br>
Untuk Logout, klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/logout"> ini </a><br>
Untuk mengedit data personal, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/change"> ini</a><br>
Untuk mengecek pembelian, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/cart"> ini</a><br>
<br>
<hr>
<h2>Personal Information </h2>
<hr>
Username : <?=$_SESSION['username'];?><br>
Password : *****<br>
Nama Lengkap : <?=$_SESSION['nama_lengkap'];?><br>
Nomor HP : <?=$_SESSION['HP'];?><br>
Alamat : <?=$_SESSION['alamat'];?> <br>
Kabupaten : <?=$_SESSION['kabupaten'];?><br>
Kota : <?=$_SESSION['kota'];?><br>
Provinsi : <?=$_SESSION['provinsi'];?><br>
Kodepos : <?=$_SESSION['kodepos'];?><br>
Email : <?=$_SESSION['email'];?><br>
<?php
if ($_SESSION['isCreditCard'] == 0)
{
?>
<font color="red"> Anda belum mengisi kartu kredit </font>. 
<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/addCreditCard"> Tambah Kartu Kredit</a><br>
<?php
}
else
{
?>
<font color="green"> Anda sudah memiliki kartu kredit </font>.
<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/lihatCreditCard"> Lihat</a><br>
Anda juga boleh menambah kartu kredit lainnya, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/addCreditCard"> ini</a><br>
<?php
}
?>

</body>
</html>
