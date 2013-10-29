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
	if ($row['password']==$_POST['password']) {
		echo "true";
	}
	else {
		echo "false";
	}
}
else {
	echo "false";
}
mysqli_close($con);
?>