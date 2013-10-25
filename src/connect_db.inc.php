<?php
//init connection to ruserba db
//params:address, mysql_username, musql_password, database_name
$address = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "ruserba";
$con = mysqli_connect($address,$username,$password,$db_name);
if(mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}?>