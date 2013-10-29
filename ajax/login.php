<?php
mysql_connect("127.0.0.1", "root", "")or die("cannot connect");
mysql_select_db("waserda")or die("cannot select DB");


// $result = mysqli_query($con,"SELECT username,email FROM `data_user` WHERE username LIKE '$username'%");
// $result = mysqli_query($con,"SELECT username,email FROM `data_user` ");


// while ( $row = mysql_fetch_array($result)) {
// 	print_r($row);
// }

// $sql = 'SELECT username FROM data_user WHERE `username` LIKE `dummy`';
// ini gak tau kenapa masih error
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT username FROM data_user WHERE username = '$username' AND password = '$password'";

$result = mysql_query($sql);
if (false === $result) {
    echo mysql_error();
}else{
	$i=0;
	$row=mysql_fetch_array($result);
	if (mysql_num_rows($result) == 0) {
		$row["status"] = "failed";
	}else{
		$row["status"] = "success";
	}
	
	echo json_encode($row);
}
?>