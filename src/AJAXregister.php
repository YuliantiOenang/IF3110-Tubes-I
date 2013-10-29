<?php
$con=mysqli_connect("localhost","root","","ruserba");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query from database
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."'";
$result=mysqli_query($con,$sql);
if ($row = mysqli_fetch_array($result)) {
	echo "false";
}
else {
	$sql = "SELECT * FROM user WHERE password='".$_POST['password']."'";
	$result=mysqli_query($con,$sql);
	if ($row = mysqli_fetch_array($result)) {
		echo "false";
	}
	else {
		$sql = "INSERT INTO user (username, nama, nohp, alamat, provinsi, kota, kodepos, email, password, transaksi)
		VALUES('".$_POST['username']."','".$_POST['nama']."','".$_POST['nohp']."','".$_POST['alamat']."','".$_POST['provinsi']."','".$_POST['kota']."','".$_POST['kodepos']."','".$_POST['email']."','".$_POST['password']."',0)";
		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
		echo "true";
	}
}
mysqli_close($con);
?>