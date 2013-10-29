<?php
    session_start();
	if(isset($_SESSION["loggedin"])) {
    }
	else {
	header("Location:registration.php");
	}
	
	$con = mysqli_connect("127.0.0.1","progin","progin","progin_13508005");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"></link>
		<script LANGUAGE="Javascript" src="js/script.js"></script>
    </head>
	
	<body>
		<div id="header">
			<img id="logo" src="res/logo1.png" onclick="keIndex()"></img>
			<a id="dashboardLink" href="index.php">Home</a>
			<a id="dashboardLink" href="profile.php">Profile</a>
			<input id="searchForm" type="text" name="keyword" onkeyup="showHint(this.value)" placeholder="search"></input>
				<select id="filter" name="filter">
					<!--<option selected>Select Filter ...</option>-->
					<option>Nama</option>
					<option>Kategori</option>
					<option>Harga</option>
				</select>
			<input id="submitForm" type="submit" name="search" value="search" onclick="toSearchResult(searchForm.value,filter.value)">
			<div class="suggest">Suggestion : <span id="textHint"></span></div>
			<a id="logout" href="php/logout.php">Log Out</a>
		</div>		
	</body>