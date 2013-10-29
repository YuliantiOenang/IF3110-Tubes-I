<?php
$username = $_GET['username'];
$number = $_GET['number'];


// Create connection
$con=mysqli_connect("localhost","root","","ruserba");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	mysqli_query($con,"UPDATE user_table SET credit='".$number."' WHERE username ='".$username."'");
	
	echo "Selamat kartu kredit anda telah teregistrasi!";
}

mysqli_close($con);
 
 
?>