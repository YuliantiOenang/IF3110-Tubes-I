<?php
	if(!isset($_SESSION)){
		session_start();
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
	
	$con = getConnection();

	$profil_ID			= $_POST["username"];
	$profil_password	= $_POST["password"];
	
	$profil_ID			= stripslashes($profil_ID);
	$profil_password	= stripslashes($profil_password);
	
	$profil_ID			= mysql_real_escape_string($profil_ID);
	$profil_password	= mysql_real_escape_string($profil_password);
	
	$sql = "SELECT * FROM userprofil WHERE profil_ID='$profil_ID' and profil_password='$profil_password'";
			
	$result	= mysqli_query($con, $sql);
	
	$count	= mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['login_user'] = $profil_ID;
		
		mysqli_free_result($result);
		mysqli_close($con);
		
		header('Location: ..\profile.php');
	} else {
		
		mysqli_close($con);
		
		header('Location: ..\wronglogin.php');
	}
	
?>