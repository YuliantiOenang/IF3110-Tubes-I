<?php
	// // Contoh dari file content.

	// // Selalu include ini di awal.
	// require_once('ref.php');

	// // Tentukan file css dan javascript.
	// $css_file = 'styles/sample.css';
	// $js_file = 'scripts/sample.js';

	// // Tulis title
	// $page_title = 'Register into RuSerBa!';

	// // Include begin.
	// require_once('begin.php');
?>
<link link rel="stylesheet" type="text/css" href='styles/sample.css'>
<div id="register_form">
	<form name="register">
		<div id="form_label">
			<label><span>Username *</span></label>
			<br>
			<label><span>Email *</span></label>
			<br>
			<label><span>Password *</span></label>
			<br>
			<label><span>Confirm Password *</span></label>
			<br>
			<label><span>Full Name *</span></label>
			<br>
			<label><span>Provinsi</span></label>						
			<br>
			<label><span>Kota/Kabupaten</span></label>						
			<br>
			<label><span>Alamat</span></label>						
			<br>
			<label><span>Kode Pos</span></label>						
			<br>
			<label><span>Telepon</span></label>						
			<br>
		</div>
		<div id="form_input">
			<input type="text" name="email" required>
			<br>
			<input type="email" name="email" required>
			<br>
			<input type="password" name="password" required>
			<br>
			<input type="password" name="confirm_pwd" required>
			<br>
			<input type="text" name="fullname" required>
			<br>
			<input type="text" name="provinsi">
			<br>
			<input type="text" name="kota">
			<br>
			<textarea rows="4" name="address" style="margin-left:0px;margin-top:8px;"></textarea>
			<br>
			<input type="text" name="kodepos">
			<br>
			<input type="text" name="telepon">
			<br>
		</div>
	</form>
</div>

<?php
	require_once('end.php');
?>
