<?php
	session_start();
	session_destroy();
	session_unset();
	setcookie("cust", "", time()-3600);
	header('location:index.php');
?>