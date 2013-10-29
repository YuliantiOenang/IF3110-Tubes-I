<?php
$con=mysqli_connect("localhost","root","","ruserba");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query from database
$sql = "SELECT * FROM user WHERE cardno='".$_POST['cardno']."'";
$result=mysqli_query($con,$sql);
if ($row = mysqli_fetch_array($result)) {
	echo "false";
}
else {
	$sql = "SELECT * FROM user WHERE nameoncard='".$_POST['nameoncard']."'";
	$result=mysqli_query($con,$sql);
	if ($row = mysqli_fetch_array($result)) {
		echo "false";
	}
	else {
		$sql = "UPDATE user SET cardno='".$_POST['cardno']."',nameoncard='".$_POST['nameoncard']."',expdate='".$_POST['expdate']."' WHERE username='".$_POST['username']."'";
		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
		echo "true";
	}
}

mysqli_close($con);
?>