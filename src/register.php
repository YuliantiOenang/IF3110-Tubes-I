<?php
	session_start();
	if((isset($_SESSION['username'])) || (isset($_COOKIE['sinarjaya']))){

	header("Location:index.php");
	exit();

} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$nama = $_POST['namalengkap'];
		$noHP = $_POST['nomor'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$kodepos = $_POST['kodepos'];
		$email = $_POST['email'];
		$password = $_POST['password1'];

		mysql_connect("localhost", "root", "") or die('Could not connect :P');
		mysql_select_db("ruserba");
		mysql_query('INSERT INTO `user` (username, nama, nohp, alamat, provinsi, kota, kodepos, email, password) VALUES ("'.$username.'", "'.$nama.'", "'.$noHP.'", "'.$alamat.'", "'.$provinsi.'", "'.$kota.'","'.$kodepos.'", "'.$email.'","'.$password.'")');
		
		$_SESSION['username'] = $username;
		$expire = time()+2592000;
		setcookie('sinarjaya', $username, $expire);

		if (isset($_SESSION['username'])) {
			header("Location: index.php");
			exit;
		}
	}
?>
<?php
$pageTitle = "Register";
$section = "register";
include('header.php'); 
?>
		<div class="section page">
			<div class="wrapper">
				<h1>Registration</h1>
				<form name="register" method="post" action="register.php">
					<label>Username</label>
					<input type="text" name="username" oninput="validateUsername()" id="username">
					<span id="usernameInfo"></span>
					<label>Nama Lengkap</label>
					<input type="text" name="namalengkap" id="namalengkap" oninput="validateNamaLengkap()">
					<span id="namaInfo"></span>
					<label>No Handphone</label>
					<input type="text" name="nomor" id="nomor">
					<label>Alamat</label>
					<input type="text" name="alamat" id="alamat">
					<label>Provinsi</label>
					<input type="text" name="provinsi" id="provinsi">
					<label>Kabupaten/Kota</label>
					<input type="text" name="kota" id="kota">
					<label>Kodepos</label>
					<input type="text" name="kodepos" id="kodepos">
					<label>Email</label>
					<input type="text" name="email" id="email" oninput="validateEmail()">
					<span id="emailInfo"></span>
					<label>Password</label>
					<input type="password" name="password1" id="password1" oninput="validatePassword1()">
					<span id="password1Info"></span>
					<label>Confirm Password</label>
					<input type="password" name="password2" id="password2" oninput="validatePassword2()">
					<span id="password2Info"></span>
					<input type="submit" value="Register" id="submit" name="submit" class="register">
				</form>
			</div>
		</div>
<?php
include('footer.php');
?>