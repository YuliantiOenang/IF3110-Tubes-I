<?php
include "config.php";
session_start();

// username and password sent from form 
$username = $_POST['username']; 
$password = $_POST['password'];
$fullname = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat']; 
$kota_kab = $_POST['kota_kab'];
$provinsi = $_POST['provinsi'];
$no_hp = $_POST['no_hp'];
$kode_pos = $_POST['kode_pos'];

mysql_query("INSERT INTO pengguna (username, password, fullname, email, alamat, kota_kab, provinsi, no_hp, kode_pos) VALUES ('$username', '$password', '$fullname', '$email', '$alamat', '$kota_kab', '$provinsi', '$no_hp', '$kode_pos')");
// store session data
$_SESSION['id'] = $username;
header('Location: registrasikartukredit.php');
mysql_close($con);
?>