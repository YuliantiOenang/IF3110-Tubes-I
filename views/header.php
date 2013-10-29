<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Spotless 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130921

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />

<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!-- <link rel="stylesheet" type="text/css" href="assets/css/tinybox.css"> -->
<link rel="stylesheet" type="text/css" href="assets/css/modal.css" />
<script src="assets/js/login.js"></script>
</head>
<body onload="LoadMenu();">
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Logo</a></h1>
		<span>Cuma sekedar<a href='http://localhost/tubes/index.php?registrasi&action="daftar"' rel="nofollow">Sekedar slogan</a>.</span>
	</div>
</div>
<div id="menu-wrapper">
	<div id="menu" class="container">
		<ul>
			<li><a href="#" accesskey="1" title="">Homepage</a></li>
			<li><a href="#" accesskey="2" title="">Shopping Bag</a></li>
			<li><a href="#" accesskey="3" title="">Category</a></li>
			<li>
				<ul id="menus">
				</ul>
			</li>
			<li><a href="#login_form" accesskey="4" title="" id="link_login">Login</a></li>
			<li><a href="http://localhost/tubes/index.php?registrasi" accesskey="5" title="">Register</a></li>
			<li><form action="http://localhost/tubes/index.php?result"><input type="text" name="keyword"/><input type="submit" value="search"></form></li>
		</ul>
	</div>
</div>

<!-- popup form #1 -->
<a href="#x" class="overlay" id="login_form"></a>
<div class="popup" id="isi_popup">
    <h2>Selamat datang!</h2>
    <p>Masukan username dan password dibawah</p>
    <div id="login_warning">
    </div>
    <div>
        <label for="login">Login</label>
        <input type="text" id="login" value="" name="username"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" value="" name="password"/>
    </div>
    <input type="button" value="Log In" onclick="Do_Login();"/>
    <a class="close" href="#close"></a>
</div>
