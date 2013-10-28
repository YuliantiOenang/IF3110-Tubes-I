<?php
session_start();

$dbhost = "localhost";
$dbname = "kaskong";
$dbuser = "root";
$dbpass = "root";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
	printf("MySQL connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>