<?php
	session_start();
	$_SESSION['on'] = false;
	header("Location: ../index.php");
?>