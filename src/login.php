<?php
include "config.php";

$myusername = $_POST['username']; 
$mypassword = $_POST['password']; 

$result = mysql_query("SELECT * FROM pengguna WHERE username='$myusername' and password='$mypassword'");

$count=mysql_num_rows($result);

if($count > 0){
	session_start();
	$_SESSION['id'] = $myusername;
	header("location:dashboard.php");
}
else {
	header("location:index.php");
}

mysql_close($con);
?>