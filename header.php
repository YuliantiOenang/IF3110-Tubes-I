<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>RuSerBa</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" /> 
</head>
<body id="index" class="home">
	<div style="width:1100px; margin-left:auto; margin-right:auto">
	<header id="banner" class="body">
	<span style="float:left"><a href="index.php"><img src="images/logo.png" alt="RuSerBa Logo" width="110" height="110"/></a></span>
	<h1><span><a href="index.php">RuSerBa<br><strong>Ruko Serba Ada</strong></a></span></h1>
 	<nav><ul id="menubar">
		<li><a href="index.php">Home</a></li>
		<li><a href="halamanbarang.php" onmouseover="slidedown(true)" onmouseup="slidedown(false)">Kategori Barang</a>
			<ul class="sub-menu">	
			<?php 
				include "koneksi.inc.php";
				$query2 = "select * from barang group by kategori";
				$hasil2 = mysql_query($query2,$koneksi);
				while($row = mysql_fetch_array($hasil2)){
				echo '<li><a href="halamanbarang.php?kategori='.$row["kategori"].'">'.$row["kategori"].'</a></li>';
				}
			?>
			</ul>
		</li>
		<div id="log"></div>
		<li><a href="shoppingbag.php">Shopping Bag</a></li>
		<div id="searchbar" style="float:right">
		<li><input type="text" name="search" id="cari" placeholder="Cari Barang" onkeyup="searchsuggest(cari.value)" onblur="resetsuggest()">
			<ul class="suggestion" id="cariyu">	
			</ul>
		</li>
		<li><button type="button" onclick="search(cari.value)">Search</button></li>
		</div>
	</ul></nav>
	</header><!-- /#banner -->
	<!-- buat animasi kotak login user -->
	<div id='mbox' style='display:none;'></div>
	<div id='back_mbox' style='display:none;'></div><div id='fade_mbox' style='display:none;'></div>
	<!-- kotak user login -->
	<div id="userlogin">
	<form method="post">
		<pre><span id="errorInfo"><span/></pre>
		<pre>Username		<input type="text" id="username" name="username"></pre>
		<pre>Password		<input type="password" id="password" name="password"></pre>
		<input type="button" value="Login" onclick="auth(username.value,password.value)"> <a href="registerform.php">Daftar baru!</a>
	</form>
	<div id="welcomebar"></div>
	</div>
	<!-- import script dari file javascript -->
	<script src="javascript/header.js"></script>