<?php
$con = mysqli_connect("localhost","root","","users");

// check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
	
}


$sql="INSERT INTO member (id, username, nama, alamat, kotakab, provinsi, kodepos, email, hp, password) VALUES
	(10,'$_POST[username]','$_POST[nama]','$_POST[alamat]','$_POST[kotakab]','$_POST[prov]','$_POST[kodepos]','$_POST[email]','$_POST[nohp]','$_POST[pwd]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

?>