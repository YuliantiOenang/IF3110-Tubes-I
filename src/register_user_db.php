<?php
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];
$handphone = $_GET['handphone'];
$kodepos = $_GET['kodepos'];
$alamat = $_GET['alamat'];
$provinsi = $_GET['provinsi'];
$kecamatan = $_GET['kecamatan'];

/*
echo "username = " . $username;
echo "password = " . $password;
echo "email = " . $email;
echo "name = " . $name;
echo "handphone = " . $handphone;
echo "kodepos = " . $kodepos;
echo "alamat = " . $alamat;
echo "provinsi = " . $provinsi;
echo "kecamatan = " . $kecamatan; */

// Create connection
$con=mysqli_connect("localhost","root","","ruserba");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	mysqli_query($con,"INSERT INTO user_table(username,password,nama_lengkap,email,alamat,provinsi,kecamatan,kodepos,handphone)
		VALUES('".$username."','".$password."','".$name."','".$email."','".$alamat."','".$provinsi."','".$kecamatan."','".$kodepos."','".$handphone."')");
		
	echo "Selamat anda telah teregistrasi!";
}

mysqli_close($con);
 
 
?>