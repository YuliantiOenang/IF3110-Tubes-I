<?php
	session_start();
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
	
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	
	$query = "SELECT * FROM user WHERE username='$username' AND password=SHA1('$pass')";
	
	$result = mysql_query($query, $link);
							
	if(mysql_num_rows($result)==1) {
		$row = mysql_fetch_array($result);
		$_SESSION['userid'] = $row['username'];
		$_SESSION['username'] = $row['username'];
		$key = $row['username']."".date("Y/m/d");
		$key = SHA1($key);
		
		$query = "INSERT INTO login_cache VALUES ('$key','$username',DATE_ADD(NOW(),INTERVAL 30 DAY))";
		
		
		mysql_query($query, $link);
		
		echo "{";
		echo '"result" : "true",';
		echo '"key" : "'.$key.'",';
		echo '"name" : "'.$username.'"';
		echo "}";
	} else {
		echo "{";
		echo '"result" : "false"';
		echo "}";
	}
?>