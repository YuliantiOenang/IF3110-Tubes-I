<!DOCTYPE html>
<html>
<head>
	<script src="login.js"></script>
</head>
<body>
	<div style="text-align:center">
		<br><br><br><br><br><br><br>
		<p>NIHAO, SILAHKAN LOGIN</p><br><br>
		<form id="test">
			<div class="forms">
				Username : <input type="text" id="user" required placeholder = "Username" /></br>
			</div>
			<div class="forms">
				Password : <input type="password" id="pass" required placeholder = "Password"></br>
			</div>
			<div class="forms">
				<input type="button" value="Login" onclick="login()"></input>
			</div>
		</form>
		<div id="hasil"><?php
			if(isset($_COOKIE["user"])) {
				echo "anda sudah login";
			}
			?></div>
	</div>
</body>
</html>