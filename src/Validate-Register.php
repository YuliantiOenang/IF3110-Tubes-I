<?php 
	$type = $_GET['type'];
	$value = $_GET['value'];
	include "connect-mysql.php";

	switch ($type) {
		case 1:
			$sql = "SELECT * FROM user WHERE username = '".$value."'";
			$result = mysql_query($sql,$connect);
			if(mysql_num_rows($result)==1) {
				echo "Username sudah ada";
			}
			break;
		case 2:
			$sql = "SELECT * FROM user WHERE email = '".$value."'";
			$result = mysql_query($sql,$connect);
			if(mysql_num_rows($result)==1) {
				echo "Email sudah ada";
			}
			break;
	}
?>