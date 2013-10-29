<?php 
	$user = $_GET['value'];
	$pass = $_GET['value2'];
	include "connect-mysql.php";

	$sql = "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."'";
	$result = mysql_query($sql,$connect);
	if(mysql_num_rows($result)==1) {
		echo "OK";
	}

?>