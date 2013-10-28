<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Register User</title>	

</head>
<body>
	<div class = "page_container">
		
		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>
		
		<div class = "container">
			<h1>Register User</h1>
			<form action="../controllers/register_user.php" method="post">
				<p>username (min 5 digits)</p>
				<input id="username" name="username" type="text" onkeyup="checkUsername(this.value)"></input>
				<p id="username_status"></p>
				<p>password</p>
				<input id="password" name="password" type="password"></input>
				<p>confirm password</p>
				<input id="confirm_password" name="confirm_password" type="password" onkeyup="checkPassword(this.value)"></input>
				<p id="password_status"></p>
				<p>nama lengkap</p>
				<input id="name" name="name" type="text" onkeyup="checkFullName(this.value)"></input>
				<p id="fullname_status"></p>
				<p>email</p>
				<input id="email" name="email" type="text" onkeyup="checkEmailValid(this.value)"></input>
				<p id="email_status"></p>
				<p>nomor handphone (min 8 digits)</p>
				<input id="no_hp" name="no_hp" type="text" onkeyup="checkNomorHP(this.value)"></input>
				<p id="nomor_hp"></p>
				<p>alamat</p>
				<input id="alamat" name="alamat" type="text" onkeyup="checkAddress(this.value)"></input>
				<p id="alamat_status"></p>
				<p>provinsi</p>
				<input id="provinsi" name="provinsi" type="text" onkeyup=""></input>
				<p>kota/kabupaten</p>
				<input id="kota_kabupaten" name="kode_kabupaten_status" type="text" onkeyup="checkKotaKabupaten(this.value)"></input>
				<p id="kota_kabupaten_status"></p>
				<p>kode pos</p>
				<input id="kodepos" name="kodepos" type="text" onkeyup="checkKodePos(this.value)"></input>
				<p id="kodepos_status"></p>
				<button type = "submit" id="button_register" disabled="true">Register</button>
			</form>
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>