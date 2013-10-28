<?php
	session_start();
	
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
	
	$query = 'DELETE FROM login_cache WHERE username="'.$_SESSION['username'].'"';
	
	mysql_query($query, $link);
	
	
	session_destroy();
	echo "{";
	echo '"result" : "true"';
	echo "}";
?>