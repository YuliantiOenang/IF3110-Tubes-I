<?php

include "db.php";

if (isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['email'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password1']));
	$email = mysql_real_escape_string($_POST['email']);
	$name = mysql_real_escape_string($_POST['name']);
	$telephone = mysql_real_escape_string($_POST['telephone']);
	$address = mysql_real_escape_string($_POST['address']);
	$province = mysql_real_escape_string($_POST['province']);
	$city = mysql_real_escape_string($_POST['city']);
	$postal = $_POST['postal'];
	
	$registerquery = mysqli_query($link, "INSERT INTO user (nama, username, password, email, hp, alamat, kota, provinsi, kodepos) VALUES ('".$name."', '".$username."', '".$password."', '".$email."', '".$telephone."', '".$address."', '".$city."', '".$province."', '".$postal."')");
	if ($registerquery) {
		$checklogin = mysqli_query($link, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
		$row = mysqli_fetch_array($checklogin);
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		if ($row['kredit_nomor'] == NULL) {
			$_SESSION['card'] = 0;
		} else {
			$_SESSION['card'] = 1;
		}
		
		echo "<h1>SUCCESS!</h1><br />";
		header("Location: regcard.php");
	} else {
		echo mysqli_error($link);
	}
} else if (isset($_POST['num']) && isset($_POST['name']) && isset($_POST['date'])) {
	$num = mysql_real_escape_string($_POST['num']);
	$name = mysql_real_escape_string($_POST['name']);
	
	$regcardquery = mysqli_query($link, "UPDATE user SET kredit_nama='".$name."', kredit_nomor='".$num."', kredit_expired_date='".$_POST['date']."' WHERE id='".$_SESSION['user_id']."'");
	if ($regcardquery) {
		$_SESSION['card'] = 1;
	}
	echo "<h1>SUCCESS!</h1><br />";
	header("Location: ".$_POST['return']);
} else {
	header("Location: register.php");
}

?>