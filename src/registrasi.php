<?php
include 'connect_db.inc.php';
//memasukkan data hasil form ke dalam db
$sql = "INSERT INTO data_user (username,nama_lengkap,nomor_hp,alamat,kota_kabupaten,provinsi,kodepos,email,password)
		VALUES
		('$_POST[username]','$_POST[namalengkap]','$_POST[nomor_hp]','$_POST[alamat]','$_POST[kota_kabupaten]','$_POST[provinsi]','$_POST[kodepos]','$_POST[email]','$_POST[password]')";

//error handling
if (!mysqli_query($con,$sql))
 {
	die('Error: ' . mysqli_error($con));
 }
else
{	
	header( 'Location: index.php?page=form_registrasi_kartukredit' );
}

//close connection
mysqli_close($con);
?>