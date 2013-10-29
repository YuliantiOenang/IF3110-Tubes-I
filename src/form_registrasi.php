<html>

<head>
<title>Registrasi</title>
<script type = "text/javascript" src = "js/form_account.js">
<!-- -->
</script>
</head>

<body>

<fieldset>
	<legend>Registrasi</legend>
	<!-- form registrasi -->
	<form name = "regform" action="registrasi.php" method="post">
		<span>
			Username: <input type="text" name="username" onchange= "CheckField('username');CheckForm();"> <br>
			<div id = "err_username" style="font-size:14px;color:red"><!-- --></div>
		</span>
		<span>
			Nama Lengkap: <input type="text" name="namalengkap" onchange="CheckField('namalengkap');CheckForm();"><br>
			<div id = "err_namalengkap" style="font-size:14px;color:red"> <!-- --></div>
		</span>
		<span>
			Nomor Handphone: <input type="text" name="nomor_hp" onchange="CheckForm();"><br>
		</span>
		<span>
			Alamat: <input type="text" name="alamat" onchange="CheckForm();"><br>
		</span>
		<span>
			Kota/Kabupaten: <input type="text" name="kota_kabupaten" onchange="CheckForm();"><br>
		</span>
		<span>
			Provinsi: <input type="text" name="provinsi" onchange="CheckForm();"><br>
		</span>
		<span>
			Kode Pos: <input type="text" name="kodepos" onchange="CheckForm();"><br>
		</span>
		<span>
			Email: <input type="text" name="email" onchange="CheckField('email');CheckForm();"><br>
			<div id = "err_email" style="font-size:14px;color:red"> <!-- --></div>
		</span>
		<span>
			Password: <input type="password" name="password" onchange="CheckField('password');CheckForm();"><br>
			<div id = "err_password" style="font-size:14px;color:red"> <!-- --></div>
		</span>
		<span>
			Confirm Password: <input type="password" name="cpassword" onchange="CheckField('cpassword');CheckForm();"><br>
			<div id = "err_cpassword" style="font-size:14px;color:red"> <!-- --></div>
		</span>
		<input type="submit" name="btn_submit" value = "Register" disabled>
	</form>
</fieldset>
	
</body>
</html>