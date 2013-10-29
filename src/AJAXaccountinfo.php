<?php
$con=mysqli_connect("localhost","root","","ruserba");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query from database
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row['username'],"`",$row['nama'],"`",$row['nohp'],"`",$row['alamat'],"`",$row['provinsi'],"`",$row['kota'],"`",$row['kodepos'],"`",$row['email'],"`",$row['password'],"`",$row['transaksi'];
mysqli_close($con);
?>