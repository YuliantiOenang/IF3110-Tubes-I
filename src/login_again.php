<?php
	session_start();
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
	
	$key = $_POST['key'];
	
	$query = "SELECT * FROM login_cache WHERE login_cache.key='$key' AND NOW() < expdate";
	
	
	$result = mysql_query($query, $link);
							
	if(mysql_num_rows($result)==1) {
		$row = mysql_fetch_array($result);
		$_SESSION['userid'] = $row['username'];
		$_SESSION['username'] = $row['username'];
		$username = $row['username'];
		
		echo "{";
		echo '"result" : "true",';
		echo '"name" : "'.$username.'"';
		echo "}";
	} else {
		echo "{";
		echo '"result" : "false"';
		echo "}";
	}
?>