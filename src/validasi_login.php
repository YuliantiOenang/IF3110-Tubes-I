<?php
include 'connect_db.inc.php';
$username = ($_GET['username']);
$pass = ($_GET['pass']);
//mencari username atau email pada basis data
$sql = "SELECT username, password
			FROM data_user 
			WHERE username = '$username' AND password = '$pass'";
$result = mysqli_query($con,$sql);
//mengecek apakah hasil query mengembalikan nilai
if ($result->num_rows == 0)
{
	echo "username dan password tidak cocok";
}
else
{
	echo "";
}
//close connection
mysqli_close($con);
?>
