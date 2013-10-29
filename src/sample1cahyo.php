<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Tentukan file css dan javascript.
	$css_file = 'styles/sample.css';
	$js_file = 'scripts/sample.js';

	// Tulis title
	$page_title = 'Register into RuSerBa!';

	// Include begin.
	require_once('begin.php');
?>

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
			<input type="text" name="username" onblur= required>
			<br>
			<input type="email" name="email" class="input" tabindex="2" required>
			<br>
			<input type="password" name="password" class="input" tabindex="3" required>
			<br>
			<input type="password" name="confirm_pwd" class="input" tabindex="4" required>
			<br>
			<input type="text" name="fullname" class="input" tabindex="5" required>
			<br>
			<input type="text" name="provinsi" class="input" tabindex="6">
			<br>
			<input type="text" name="kota" class="input" tabindex="7">
			<br>
			<textarea rows="4" name="address" style="margin-left:0px;margin-top:8px;" tabindex="8"></textarea>
			<br>
			<input type="text" name="kodepos" class="input" tabindex="9">
			<br>
			<input type="text" name="telepon" class="input" tabindex="10">
			<br>
		</div>
	</form>
</div>

<?php
	require_once('end.php');
?>
