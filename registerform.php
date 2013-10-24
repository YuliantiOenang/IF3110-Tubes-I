<!DOCTYPE HTML>
<html>
<head><title>Pendaftaran Anggota Baru Ruserba</title></head>
<body>
	<?php include "header.php"; ?>
		<form id="registerform" method="post" action="register.php">
		<strong><h2>Pendaftaran Anggota Baru Ruserba</h2></strong><br>
		<pre>Username				<input type="text" name="username"></pre>
		<pre>Password				<input type="password" name="password"></pre>
		<pre>Confirm Password		<input type="password" name="password"></pre>
		<pre>Nama Lengkap			<input type="text" name="nama"></pre>
		<pre>Nomor HP				<input type="text" name="nohp"></pre>
		<pre>Alamat				<input type="textarea" name="alamat"></pre>
		<pre>Provinsi				<input type="text" name="provinsi"></pre>
		<pre>Kota					<input type="text" name="kota"></pre>
		<pre>Kode Pos				<input type="text" name="kodepos"></pre>
		<pre>Email				<input type="text" name="email"></pre>
		<pre><input type="checkbox" name="setuju"> Saya menyetujui semua persyaratan yang berlaku</pre>
		<input type="submit" value="Daftar"> <a href='index.php'>Kembali</a></form>
	<?php include "footer.php"; ?>
</body>
</html>