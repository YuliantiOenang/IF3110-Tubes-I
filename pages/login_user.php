<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Login User</title>	

</head>
<body>
	<div class = "page_container">
		
		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>
		
		<div class = "container">
			<form>
				<p>username</p>
				<input id="username" name="username">
				</input>
				<p>password</p>
				<input id="password" name="password">
				</input>
				<button type="submit">Login</button>
			</form>
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>