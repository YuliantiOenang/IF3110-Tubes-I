<?php
$pageTitle = "Login";
$section = "login"; 
?>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript" src="json2.js"></script>
	<script type="text/javascript" src="xhr.js"></script>
	<script type="text/javascript" src="validate.js"></script>
</head>
<body>
	<div id="content">
		<div class="section page">
			<h1>Login</h1>
			<div class="wrapper">
				<form name="login" method="post" action="login.php">
					<label>Username</label>
					<input type="text" name="username" id="username">
					<span id="unameInfo"></span>
					<label>Password</label>
					<input type="text" name="password" id="password">
					<span id="passInfo"></span><br />
					<span id="loginInfo"></span><br />
					<input type="button" value="Login" id="submit" name="submit" onclick="validateLogin()">
				</form>
			</div>
		</div>
	</div>
</body>
</html>