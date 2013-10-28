<?php
	session_start();
	if($_SESSION['state'] == 2){
		$_SESSION['on'] = false;
		//header("Location: index.php");
	} else{
		$_SESSION['on'] = false;
		//header("Location: ../index.php");
	}
	echo "1a";
	echo $_SESSION['on'];
?>