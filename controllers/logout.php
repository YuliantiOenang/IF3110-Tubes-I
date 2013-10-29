<?php
	session_start();
	$_SESSION['on'] = false;
	
	//use cookie to preserve data persistance
	setcookie("on", false, time()+3600*24*30);
	header("Location: ../index.php");
?>