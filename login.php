<?php

include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	if ($checklogin = mysqli_query($link, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'")) {
		if (mysqli_num_rows($checklogin) == 1) {
			$row = mysqli_fetch_array($checklogin);
			$email = $row['email'];
		
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			if ($row['kredit_nomor'] == NULL) {
				$_SESSION['card'] = 0;
			} else {
				$_SESSION['card'] = 1;
			}
			$expire=time()+60*60*24*30;
			setcookie("user_id", $row['id'], $expire);
			
			echo "<h1>Success</h1>";
			echo "<p>We are now redirecting you to the member area.</p>";
		} else {
			echo "<h1>Error</h1>";
			echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";  
		}
	}
} else if (!isset($_COOKIE['user_id'])) {
	echo "<h1>Error</h1>";
	echo "<p>Sorry, username and password must be filled</p>";  
} else if (isset($_COOKIE['user_id'])) {
	if ($checklogin = mysqli_query($link, "SELECT * FROM user WHERE id='".$_COOKIE['user_id']."'")) {
		if (mysqli_num_rows($checklogin) == 1) {
			$row = mysqli_fetch_array($checklogin);
			$email = $row['email'];
		
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			if ($row['kredit_nomor'] == NULL) {
				$_SESSION['card'] = 0;
			} else {
				$_SESSION['card'] = 1;
			}
			/*
			$expire=time()+60*60*24*30;
			setcookie("user_id", $row['id'], $expire);
			*/
			echo "<h1>Success</h1>";
			echo "<p>We are now redirecting you to the member area.</p>";
		} else {
			echo "<h1>Error</h1>";
			echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";  
		}
	}
}
header("Location: index.php");

?>