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
	<input type="text" name="username" required>
	<br>
	<label>Email *</label>
	<input type="email" name="email" required>
	<br>
	<label>Password *</label>
	<input type="password" name="password" required>
	<br>
	<label>Confirm Password *</label>
	<input type="password" name="confirm_pwd" required>
	<br>
	<label>Full Name *</label>
	<input type="text" name="fullname" required>
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
	<input type="text" name="kodepos">
	<br>
	<label>Telepon</label>
	<input type="number" name="telepon">
</div>
<button id="button_right">Register Me!</button>
<?php
	require_once('end.php');
?>
