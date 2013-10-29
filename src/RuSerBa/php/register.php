<?php
    session_start();
        
    $username = $_POST["username"];
	$full_name = $_POST["full_name"];
	$no_HP = $_POST["no_HP"];
	$address = $_POST["address"];
	$province = $_POST["province"];
	$city = $_POST["city"];
	$postcode = $_POST["postcode"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $con = mysqli_connect("127.0.0.1","progin","progin","progin_13508005");
	if (mysqli_connect_errno($con)) {
		    echo "Gagal melakukan koneksi ke MySQL : " . mysqli_connect_error();
		}
    mysqli_query($con, "INSERT INTO user VALUES ('$username', '$full_name', '$no_HP', '$address', '$province', '$city', '$postcode', '$email', '$password')");
    
    $_SESSION["username"] = $username;
    $_SESSION["loggedin"] = "yes";
    header("Location:../index.php");
?>