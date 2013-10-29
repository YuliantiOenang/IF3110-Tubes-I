<?php
session_start();
include "config.php";

if (!empty($_POST['nama_lengkap'])) {
	$fullname = $_POST['nama_lengkap'];
	mysql_query("UPDATE pengguna SET fullname='$fullname' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['password'])) {
	$password = $_POST['password'];
	mysql_query("UPDATE pengguna SET password='$password' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['alamat'])) {
	$alamat = $_POST['alamat'];
	mysql_query("UPDATE pengguna SET alamat='$alamat' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['kota_kab'])) {
	$kota_kab = $_POST['kota_kab'];
	mysql_query("UPDATE pengguna SET kota_kab='$kota_kab' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['provinsi'])) {
	$provinsi = $_POST['provinsi'];
	mysql_query("UPDATE pengguna SET provinsi='$provinsi' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['kode_pos'])) {
	$kode_pos = $_POST['kode_pos'];
	mysql_query("UPDATE pengguna SET kode_pos='$kode_pos' WHERE username='$_SESSION[id]'");
}

if (!empty($_POST['no_hp'])) {
	$no_hp = $_POST['no_hp'];
	mysql_query("UPDATE pengguna SET no_hp='$no_hp' WHERE username='$_SESSION[id]'");
}

header("location:profile.php");

mysql_close($con);
?>