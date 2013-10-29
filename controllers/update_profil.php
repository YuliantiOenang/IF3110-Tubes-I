<?php
//get the q parameter from URL
//lookup all hints from array if length of q>0
include ("connect_database.php");

$username = $_POST['username'];
$nama_pengguna = $_POST['nama_pengguna'];
$email = $_POST['email'];
$nomor_hp = $_POST['nomor_hp'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota_kabupaten = $_POST['kota_kabupaten'];
$kode_pos = $_POST['kode_pos'];

//checking if item count > 0

$result = mysqli_query($con,"UPDATE pengguna SET nama_pengguna = '".$nama_pengguna."', email = '".$email."', nomor_hp = '".$nomor_hp."', alamat = '".$alamat."', provinsi = '".$provinsi."',kota_kabupaten='".$kota_kabupaten."', kode_pos = '".$_POST['kode_pos']."' WHERE username = '".$username."'");

if($result){
	?><script>alert("edit success");</script>
	<?php
	header("Location: ../pages/edit_profil_user.php");
} else{
	?><script>alert("edit fail");</script><?php
	header("Location: ../pages/edit_profil_user.php");
}

?>