<!-- Edit Profile Form -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<title>
			Edit Profile
		</title>
	</head>
	<script>
	function validatepass()
		{
			var x=document.forms["editform"]["changepassword"].value;
			var y=document.forms["editform"]["confirmchangepassword"].value;
			if (x==null || x=="" || x!=y )
			  {
			  alert("Password Salah");
			  return false;
			  }
		}
	</script>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<h1>Edit Profile</h1>
			<form name="editform" action="profile.php" onsubmit="return validatepass()" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="namalengkap">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Ganti Password	
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="changepassword">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Konfirmasi Password
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="confirmchangepassword">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nomorhp">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="alamat">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kota">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="provinsi">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kodepos">
					</input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" value="SUBMIT"></input>
				</div>
				<div id="form_one_row"></div>
			</form>
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>