<html>
<head>
<title>Registrasi Identitas</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/validasiregistrasi.js"></script>
<?php
	session_start();
?>
</head>

<body>
	<div id="container">
		<div id="register_tab">
			<form name="register_form" method="post" action="register.php" enctype="multipart/form-data">
				<div class="form_field">
					<div class="field_kiri">
						Username: 
					</div>
					<div class="field_kanan">
						<input name="username" type="text"  maxlength="256" onKeyUp="enableRegister()">
					</div>
					<div id="v_uname">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Password: 
					</div>
					<div class="field_kanan">
						<input name="password" type="password"  maxlength="24" onKeyUp="enableRegister()">
					</div>
					<div id="v_pass">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Confirm Password: 
					</div>
					<div class="field_kanan">
						<input name="confirm_password" type="password"  maxlength="24" onKeyUp="enableRegister()">
					</div>
					<div id="v_cpass">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Nama lengkap: 
					</div>
					<div class="field_kanan">
						<input type="text" name="nama_lengkap" maxlength="256" onKeyUp="enableRegister()">
					</div>
					<div id="v_nama">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Email: 
					</div>
					<div class="field_kanan">
						<input type="text" name="email" maxlength="256" onKeyUp="enableRegister()">
					</div>
					<div id="v_email">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Alamat: 
					</div>
					<div class="field_kanan">
						<input name="alamat" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Kota/Kabupaten: 
					</div>
					<div class="field_kanan">
						<input name="kota_kab" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Provinsi: 
					</div>
					<div class="field_kanan">
						<input name="provinsi" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Kode Pos: 
					</div>
					<div class="field_kanan">
						<input name="kode_pos" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Nomor HP: 
					</div>
					<div class="field_kanan">
						<input name="no_hp" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						<input type="submit" name="submit" value="Register" disabled = true>
					</div>
					<div class="field_kanan">
					
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
