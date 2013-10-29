<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	// Tentukan file css dan javascript.
	$css_file = 'styles/register.css';
	$js_file = 'scripts/register.js';

	// Tulis title
	$page_title = 'Register into RuSerBa!';

	// Include begin.
	require_once('begin.php');
?>
<p>
Silakan registrasi. bagian yang berlabel bintang (*) wajib diisi.
<button id="button_right">Register Me!</button>
</p>
<div id="register_form">
	<label>Username *</label>
	<input type="text" id="username" onblur="cekUsername()" required>
	<div id=responseUsername> </div>
	<br>
	<label>Email *</label>
	<input type="email" id="email" onblur="cekEmail()" required>
	<div id=responseEmail> </div>
	<br>
	<label>Password *</label>
	<input type="password" id="password" required>
	<br>
	<label>Confirm Password *</label>
	<input type="password" id="confirm_pwd" onblur="cekPasswordMatch()" required>
	<div id=responsePassword> </div>
	<br>
	<label>Full Name *</label>
	<input type="text" id="fullname" onblur="cekFullname()" required>
	<div id=responseFullname> </div>
	<br>
	<label>Provinsi</label>
	<input type="text" id="provinsi">
	<br>
	<label>Kota/Kabupaten</label>
	<input type="text" id="kota">
	<br>
	<label>Alamat</label>
	<input type="text" id="alamat">
	<br>
	<label>Kode Pos</label>
	<input type="text" id="kodepos" onblur="cekAngka(document.getElementById('kodepos').value)">
	<div id=responseAngka> </div>
	<br>
	<label>Telepon</label>
	<input type="text" id="telepon" onblur="cekAngka(document.getElementById('telepon').value)">
	<div id=responseAngka> </div>
</div>
<?php
	require_once('end.php');
?>
