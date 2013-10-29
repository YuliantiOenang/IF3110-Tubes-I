<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	// Tentukan file css dan javascript.
	$css_file = 'styles/sample.css';
	$js_file = 'scripts/sample.js';

	// Tulis title
	$page_title = 'Hello RuSerBa!';

	// Include begin.
	require_once('begin.php');
?>

<div id="register_form">
	<form name="register" method=POST action="katalog.html">
		<div id="form_label">
			<label>
				<span>Username *</span>
			</label>
			<br>
			<label>
				<span>Email *</span>
			</label>
			<br>
			<label>
				<span>Password *</span>
			</label>
			<br>
			<label>
				<span>Confirm Password *</span>
			</label>
			<br>
			<label>
				<span> Full Name *</span>
			</label>
			<br>
			<label>
				<span >Telephone Number</span>
			</label>
			<br>
			<label>
				<span> Credit Card Number </span>
			</label>
			<br>
			<label>
				<span > Address </span>
			</label>						
			<br>
		</div>
		<div id="form_input">
			<input type="email" name="email" class="input" tabindex="1" required>
			<br>
			<input type="password" name="password" class="input" tabindex="2" required>
			<br>
			<input type="password" name="confirm_pwd" class="input" tabindex="3" required>
			<br>
			<input type="text" name="firstname" class="input" tabindex="4" required>
			<br>
			<input type="text" name="lastname" class="input" tabindex="5">
			<br>
			<input type="text" name="telephone" class="input" tabindex="6">
			<br>
			<input type="text" name="creditcard_number" class="input" tabindex="7">
			<br>
			<textarea rows="4" name="address" style="margin-left:0px;margin-top:8px;" tabindex="8"></textarea>
			<br>
		</div>
	</form>
</div>

<?php
	require_once('end.php');
?>
