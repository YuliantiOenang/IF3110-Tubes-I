<html>
<head>
<title>Registrasi Kartu Kredit</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/validasiregistrasi.js"></script>
<?php
	session_start();
?>
</head>

<body>
	<div id="container">
		<div id="register_tab">
			<form name="register_form" method="post" action="registerkartukredit.php" enctype="multipart/form-data">
				<div class="form_field">
					<div class="field_kiri">
						Card Number: 
					</div>
					<div class="field_kanan">
						<input name="card_number" type="text"  maxlength="256" onKeyUp="enableRegisterKartuKredit()">
					</div>
					<div id="v_card_number">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Name On Card: 
					</div>
					<div class="field_kanan">
						<input name="name_on_card" type="text"  maxlength="256" onKeyUp="enableRegisterKartuKredit()">
					</div>
					<div id="v_name_on_card">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Expired Date: 
					</div>
					<div class="field_kanan">
						<input name="expired_date" type="date" onKeyUp="enableRegisterKartuKredit()">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						<input type="submit" name="submit" value="Register" disabled = true>
					</div>
				</div>
			</form>
			<form name="skip" method="post" action="dashboard.php" enctype="multipart/form-data">
				<div class="form_field">
					<div class="field_kiri">
						<input type="submit" name="submit" value="Skip">
					</div>
					<div class="field_kanan">
					
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>