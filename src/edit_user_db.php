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
	mysqli_query($con,"UPDATE user_table SET nama_lengkap='".$name."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET email='".$email."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET alamat='".$alamat."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET provinsi='".$provinsi."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET kecamatan='".$kecamatan."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET kodepos='".$kodepos."' WHERE username='".$username."'");
	mysqli_query($con,"UPDATE user_table SET handphone='".$handphone."' WHERE username='".$username."'");
		
	if (strlen($password) > 0)
		mysqli_query($con,"UPDATE user_table SET password='".$password."' WHERE username='".$username."'");
	echo "Profile anda telah diubah";
}

mysqli_close($con);
 
 
?>