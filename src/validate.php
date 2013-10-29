<?php

include "db.php";

$value = $_POST['value'];
$method = $_POST['method'];

if ($method == "number") {
	if ($result = mysqli_query($link, "SELECT kredit_nomor FROM user WHERE kredit_nomor='".$value."' LIMIT 1")) {
		if (mysqli_num_rows($result) > 0) {
			echo "$method has been taken!";
		} else {
			echo "$method is available.";
		}
	}
} else if ($method == "name") {
	if ($result = mysqli_query($link, "SELECT kredit_nama FROM user WHERE kredit_nama='".$value."' LIMIT 1")) {
		if (mysqli_num_rows($result) > 0) {
			echo "$method has been taken!";
		} else {
			echo "$method is available.";
		}
	}
} else {
	if ($result = mysqli_query($link, "SELECT $method FROM user WHERE $method='".$value."' LIMIT 1")) {
		if (mysqli_num_rows($result) > 0) {
			echo "$method has been taken!";
		} else {
			echo "$method is available.";
		}
	} else {
		echo "SELECT username FROM user WHERE username='$value' LIMIT 1";
	}
}

?>