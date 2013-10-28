<?php
	session_start();
	setcookie("cookie_id", "", time() - 3600);
	
	$db = mysqli_connect("localhost", "tubesweb", "EE6LaERWunMfvPNb", "tubesweb");
	if (mysqli_connect_errno($db)) {
		die("Error" . mysqli_connect_errno($db));
	}
	$sqlquery = "UPDATE authentication SET cookie_id=NULL , cookie_expire=0 WHERE username='".$_SESSION["username"]."'";
	$sqlresult = mysqli_query($db, $sqlquery);

	session_destroy();
	header("Location: index.php");
?>