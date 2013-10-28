<?php

include "db.php";

if (!empty($_POST['name']) && !empty($_POST['telephone'])) {
	$name = mysql_real_escape_string($_POST['name']);
	$telephone = mysql_real_escape_string($_POST['telephone']);
	$address = mysql_real_escape_string($_POST['address']);
	$province = mysql_real_escape_string($_POST['province']);
	$city = mysql_real_escape_string($_POST['city']);
	$postal = $_POST['postal'];
	
	$editquery = mysqli_query($link, "UPDATE user SET nama='".$name."', hp='".$telephone."', alamat='".$address."', provinsi='".$province."', kodepos='".$postal."' WHERE id='".$_SESSION['user_id']."'");
	if ($editquery) {
		echo "<h1>SUCCESS!</h1><br />";
		echo "<meta http-equiv='refresh' content='=2;profile.php?id=".$_SESSION['user_id']."' />";
	} else {
		echo mysqli_error($link);
	}
}

?>