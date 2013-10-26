<?php
include 'connect_db.inc.php';

$q = ($_GET['q']);
//mencari username atau email pada basis data
$sql = "SELECT username, email
			FROM data_user 
			WHERE username = '$q' OR email = '$q'";
$result = mysqli_query($con,$sql);
//mengecek apakah hasil query mengembalikan nilai
if ($result->num_rows > 0)
{
	echo "Identitas tersebut sudah digunakan pengguna lain";
}
else
{
	echo "";
}
//close connection
mysqli_close($con);
?>
