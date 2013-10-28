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
	
	$con = getConnection();
	
	$profil_name		= $_POST["textgantinama"];
	$profil_password	= $_POST["textgantipassword"];
	$profil_address		= $_POST["textalamat"];
	$profil_province	= $_POST["textprovinsi"];
	$profil_district	= $_POST["textkabupaten"];
	$profil_zipcode		= $_POST["textpos"];
	$profil_mobile		= $_POST["textHP"];
	
	$sql = "UPDATE userprofil 
			SET
				profil_name		= '$profil_name',
				profil_password	= '$profil_password',
				profil_address	= '$profil_address',
				profil_province	= '$profil_province',
				profil_district	= '$profil_district',
				profil_zipcode	= '$profil_zipcode',
				profil_mobile	= '$profil_mobile'
			WHERE
				profil_ID		= '$user_check'";

	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }

	  // */

	  mysqli_close($con);
	  
	  header('Location: ..\profile.php');
?>