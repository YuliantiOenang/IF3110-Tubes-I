<?php
$con=mysqli_connect("localhost","root","","ruserba");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query from database
$sql = "UPDATE user SET 
	username='".$_POST['username']."',nama='".$_POST['nama']."',nohp='".$_POST['nohp']."',alamat='".$_POST['alamat']."',provinsi='".$_POST['provinsi']."',kota='".$_POST['kota']."',kodepos='".$_POST['kodepos']."',email='".$_POST['email']."',password='".$_POST['password']."' 
	WHERE username='".$_POST['username']."'";
if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
echo "true";
mysqli_close($con);
?>