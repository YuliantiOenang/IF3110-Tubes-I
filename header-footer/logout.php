<?php
	session_start();
	setcookie("cookie_id", "", time() - 3600);
	
	$db=mysql_connect("localhost","root",null) or die("cannot connect");
	mysql_select_db("tubesweb")or die("cannot select DB");
	
	$sqlquery = "UPDATE authentication SET cookie_id=NULL , cookie_expire=0 WHERE username='".$_SESSION["username"]."'";
	$sqlresult = mysql_query($sqlquery,$db );

	session_destroy();
	header("Location: index.php");
?>