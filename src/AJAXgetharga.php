<?php
$con=mysqli_connect("localhost","root","","ruserba");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query from database
$sql = "SELECT * FROM barang WHERE nama='".$_POST['productname']."'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row['harga'];
mysqli_close($con);
?>