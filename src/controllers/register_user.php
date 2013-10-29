<?php
	// Create connection
	include ("connect_database.php");
	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];
	$provinsi = $_POST['provinsi'];
	$kodepos = $_POST['kodepos'];
	$kota_kabupaten = $POST['kota_kabupaten'];
	
	//checking if username is not available
	$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."'");
	
	$found = false;
	if($result != null){
		while($row = mysqli_fetch_array($result)){
			$found = true;
			break;
		}
	}
	
	if(!$found){
		mysqli_query($con,"INSERT INTO pengguna (nama_pengguna, username, password, email, nomor_hp, alamat, provinsi, kode_pos, kota_kabupaten) VALUES ('".$name."','".$username."','".sha1($password)."','".$email."','".$no_hp."','".$alamat."','".$provinsi."','".$kodepos."','".$kota_kabupaten."')");
		header('Location: ../index.php');
	} else{
		echo "same username is found, can't register with this username";
	}
	mysqli_close($con);
?>