<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register.js"></script>

<head>
	<title>Register</title>	

</head>
	<div class = "page_container">
		<div class = "heading">
			<p>ini header</p>
		</div>
		
		<div class = "navigation">
			<div class = "bar_navigation">Baking</div>
			<div class = "bar_navigation">Beverages</div>
			<div class = "bar_navigation">Canned Goods & Soups</div>
			<div class = "bar_navigation">Fresh Food</div>
			<div class = "bar_navigation">Household Essentials</div>
		</div>
		<div class = "container">
			<form action="../controllers/register_user.php" method="post">
				<p>username</p>
				<input id="username" name="username" type="text" onkeyup="checkUsername(this.value)"></input>
				<p id="username_status"></p>
				<p>password</p>
				<input id="password" name="password" type="password"></input>
				<p>confirm password</p>
				<input name="confirm_password" type="password" onkeyup="checkPassword(this.value)"></input>
				<p id="password_status"></p>
				<p>nama lengkap</p>
				<input id="name" name="name" type="text" onkeyup="checkFullName(this.value)"></input>
				<p id="fullname_status"></p>
				<p>email</p>
				<input id="email" name="email" type="text" onkeyup="checkEmailValid(this.value)"></input>
				<p id="email_status"></p>
				<input type = "submit" id="button_register" disabled="true"></button>
			</form>
		</div>
		
		<div class = "footer">
			<p>ini footer</p>
		</div>
	</div>
</html>