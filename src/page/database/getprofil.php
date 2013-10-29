<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['login_user'])) {
		$user_check = $_SESSION['login_user'];
	} else {
		$user_check = "";
	}
	
	if (!function_exists('getConnection')) {
		function getConnection(){
			// Create connection
			$con = mysqli_connect("localhost","root","","progin_13510023");
			// Check connection
			if (mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			return $con;
		}
	}
	
	$con 	= getConnection();
	
	$sql	= "SELECT * FROM userprofil WHERE profil_ID='$user_check'";
	
	$result = mysqli_query($con, $sql);
	
	$row	= mysqli_fetch_array($result);
	
	$profil_ID			= $row["profil_ID"];
	$profil_name		= $row["profil_name"];
	$profil_password	= $row["profil_password"];
	$profil_email		= $row["profil_email"];
	$profil_address		= $row["profil_address"];
	$profil_province	= $row["profil_province"];
	$profil_district	= $row["profil_district"];
	$profil_zipcode		= $row["profil_zipcode"];
	$profil_mobile		= $row["profil_mobile"];
	$profil_transaction = $row["profil_transaction"];
	
/*	echo $profil_ID; echo "<br>";
	echo $profil_name; echo "<br>";
	echo $profil_password; echo "<br>";
	echo $profil_email; echo "<br>";
	echo $profil_address; echo "<br>";
	echo $profil_province; echo "<br>";
	echo $profil_district; echo "<br>";
	echo $profil_zipcode; echo "<br>";
	echo $profil_mobile; echo "<br>"; // */
	
	mysqli_close($con);
?>