<?php
	// // Contoh dari file content.

	// // Selalu include ini di awal.
	// require_once('ref.php');

	// // Tentukan file css dan javascript.
	// $css_file = 'styles/register.css';
	// $js_file = 'scripts/register.js';

	// // Tulis title
	// $page_title = 'Register into RuSerBa!';

	// // Include begin.
	// require_once('begin.php');
?>
<link link rel="stylesheet" type="text/css" href='styles/register.css'>
<p>
Silakan registrasi. bagian yang berlabel bintang (*) wajib diisi.
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
	<input type="text" name="provinsi">
	<br>
	<label>Kota/Kabupaten</label>
	<input type="text" name="kota">
	<br>
	<label>Alamat</label>
	<input type="text" name="alamat">
	<br>
	<label>Kode Pos</label>
	<input type="text" name="kodepos" onblur="cekAngka()">
	<div id=responseAngka> </div>
	<br>
	<label>Telepon</label>
	<input type="text" name="telepon" onblur="cekAngka()">
	<div id=responseAngka> </div>
</div>
<button id="button_right">Register Me!</button>
<?php
	require_once('end.php');
?>
