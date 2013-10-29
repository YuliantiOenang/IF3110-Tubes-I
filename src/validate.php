<?php
    $username=$_GET["username"];
	
    
    
	function checkuname($username){
		$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
		mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
		
		$query = "SELECT * FROM user WHERE username='$username'";
		$res = mysql_query($query, $link);
		
		if (mysql_num_rows($res)==0) {
			$response ='{"result" : "true", "response" : "username is available"}';
		}
		else {
			$response='{"result" : "false", "response" : "username is used"}';
		}
		
		return $response;
	}
	
	function checkpassword($password){
		if (strlen($password) >= 8) {
			$response ="password valid";
		}
		else {
			$response="password must be 8 length";
		}
		return $response;
	}
	
	function checkconfirmpassword($password,$confirm_password){
		if (strlen($confirm_password) >= 8 && strcmp($password,$confirm_password)==0) {
			$response ="password confirmed";
		}
		else {
			$response= "password not same";
		}
		return $response;
	}
	
	function checkemail($email){
		$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
		mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
		
		$query = "SELECT * FROM user WHERE email='$email'";
		$res = mysql_query($query, $link);
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if (mysql_num_rows($res)==0) {
				$response ='{"result" : "true", "response" : "email is available"}';
			} else {
				$response ='{"result" : "false", "response" : "email is used"}';
			}
		}
		else {
			$response ='{"result" : "true", "response" : "email not valid"}';
		}
		return $response;
	}
	
	if(isset($_GET["username"])) {
		echo checkuname($username);
	} else if(isset($_GET["email"])) {
		echo checkemail($_GET["email"]);
	}
?>