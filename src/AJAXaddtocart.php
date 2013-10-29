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
if ($_POST['qty'] > $row['stok']) {
	echo $row['stok'];
}
else {
	/*$sisa=$row['stok']-$_POST['qty'];
	$sql = "UPDATE barang SET stok='".$sisa."' WHERE nama='".$_POST['productname']."'";
	mysqli_query($con,$sql);*/
	echo "true";
}
mysqli_close($con);
?>