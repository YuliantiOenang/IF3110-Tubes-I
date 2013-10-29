<?php 
	include("header.php");
	if (isset($_POST['user'])) {
		$username = $_POST['user'];
			//$username = "akbarsyam";
			include 'connect-mysql.php';

			$sql = "SELECT * FROM user WHERE username = '".$username."'";
			$result = mysql_query($sql,$connect);
			if (!$result) {
				die("Error : " . mysql_error());
			}
			$row = mysql_fetch_array($result);
			$password = $row['password'];

			echo '<form method="post" action="profile2.php" name="profileform">
				<pre>Username            : <input type="hidden" name="username" value="'.$username.'">'.$username.'<br> </pre>
				<pre>Email               : <span id="email">'.$row['email'].' </span> <br> </pre>
				<pre>Change Password     : <input type="password" name="password" onkeyup="valPassword()"> <span id="pass"></span> <br> </pre>
				<pre>Confirm Password    : <input type="password" name="confirm" onkeyup="valConfirm()"> <span id="conf"></span> <br> </pre>
				<pre>Nama Lengkap        : <input type="text" name="nama" value="'.$row['nama'].'" onkeyup="valNama()"> <span id="nama"></span> <br> </pre>
				<pre>No. HP              : <input type="text" name="hp" value="'.$row['hp'].'" onkeyup="valHP()"> <span id="hp"></span> <br> </pre>
				<pre>Alamat              : <textarea name="alamat" rows="5" cols="40" onkeyup="valAlamat()">'.$row['alamat'].'</textarea><span id="alamat"></span> <br> </pre>
				<pre>Provinsi            : <input type="text" name="provinsi" value="'.$row['provinsi'].'" onkeyup="valProvinsi()"> <span id="provinsi"></span> <br> </pre>
				<pre>Kota / Kabupaten    : <input type="text" name="kota" value="'.$row['kota'].'" onkeyup="valKota()"> <span id="kota"></span> <br> </pre>
				<pre>Kode Pos            : <input type="text" name="kodepos" value="'.$row['kodepos'].'" onkeyup="valKodepos()"> <span id="kodepos"></span> <br> </pre>
				<input type="submit" id="register" value="Save" disabled>
			</form>';
		exit();
	}

?>

<html> 
	<?php
        // Header
        include("header.php");
    ?>
	<body>
		<h1>Profile User</h1>
		<script>
			if (!localStorage.username) {
				window.location = "Register.php";
			}

			var username = localStorage.username;
			var xmlhttp;
			if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  			}
			else {// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("prof").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","profile.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("user="+username);
			
		</script>

		<div id="prof"></div>

		<script>
			var validPassword = false;
			var validConfirm = false;
			var validNama = true;
			var validHP = true;
			var validAlamat = true;
			var validProvinsi = true;
			var validKota = true;
			var validKodepos = true;

			function valHP() {
				var hp = document.forms["profileform"]["hp"].value;
				var regex = /^.+$/;
				var validhp = hp.match(regex);
				if (validhp == null) {
					document.getElementById("hp").innerHTML = "Tidak boleh kosong";
					validHP = false;
				}
				else {
					document.getElementById("hp").innerHTML = "";
					validHP = true;
				}
				valid();
			}
			function valAlamat() {
				var alamat = document.forms["profileform"]["alamat"].value;
				var regex = /^.+$/;
				var validalamat = alamat.match(regex);
				if (validalamat == null) {
					document.getElementById("alamat").innerHTML = "Tidak boleh kosong";
					validAlamat = false;
				}
				else {
					document.getElementById("alamat").innerHTML = "";
					validAlamat = true;
				}
				valid();
			}
			function valProvinsi() {
				var provinsi = document.forms["profileform"]["provinsi"].value;
				var regex = /^.+$/;
				var validprovinsi = provinsi.match(regex);
				if (validprovinsi == null) {
					document.getElementById("provinsi").innerHTML = "Tidak boleh kosong";
					validProvinsi = false;
				}
				else {
					document.getElementById("provinsi").innerHTML = "";
					validProvinsi = true;
				}
				valid();
			}
			function valKota() {
				var kota = document.forms["profileform"]["kota"].value;
				var regex = /^.+$/;
				var validkota = kota.match(regex);
				if (validkota == null) {
					document.getElementById("kota").innerHTML = "Tidak boleh kosong";
					validKota = false;
				}
				else {
					document.getElementById("kota").innerHTML = "";
					validKota = true;
				}
				valid();
			}
			function valKodepos() {
				var kodepos = document.forms["profileform"]["kodepos"].value;
				var regex = /^.+$/;
				var validkodepos = kodepos.match(regex);
				if (validkodepos == null){
					document.getElementById("kodepos").innerHTML = "Tidak boleh kosong";
					validKodepos = false;
				}
				else {
					document.getElementById("kodepos").innerHTML = "";
					validKodepos = true;
				}
				valid();
			}

			function valid() {
				if (validConfirm && validPassword && validNama && validHP && validAlamat && validProvinsi && validKota && validKodepos) {
					document.getElementById("register").disabled = false;
				}
				else {
					document.getElementById("register").disabled = true;
				}
			}


			function valPassword() {
				var password = document.forms["profileform"]["password"].value;
				//var username = document.getElementById("username").innerHTML;
				var email = document.getElementById("email").innerHTML;
				var username = document.forms["profileform"]["username"].value;
				//var email = document.forms["profileform"]["email"].value;

				if ((password.length < 8) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password minimal 8 karakter";
					validPassword = false;
				}
				else if ((password == username) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password tidak boleh sama dengan username";
					validPassword = false;
				}
				else if ((password == email) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password tidak boleh sama dengan email";
					validPassword = false;
				}
				else {
					document.getElementById("pass").innerHTML = "";
					validPassword = true;
				}
				valid();
			}

			function valConfirm() {
				var confirm = document.forms["profileform"]["confirm"].value;
				var password = document.forms["profileform"]["password"].value;

				if (confirm != password) {
					document.getElementById("conf").innerHTML = "Password tidak sama";
					validConfirm = false;
				}
				else {
					document.getElementById("conf").innerHTML = "";
					validConfirm = true;
				}
				valid();
			}

			function valNama() {
				var nama = document.forms["profileform"]["nama"].value;
				var regex = /^[\S.]+ [\S.]+$/;
				var validnama = nama.match(regex);
				if ((validnama == null) && (nama.length > 0)) {
					document.getElementById("nama").innerHTML = "Harus terdiri dari minimal 2 kata";
					validNama = false;
				}
				else {
					document.getElementById("nama").innerHTML = "";
					validNama = true;
				}
				valid();
			}
		</script>
		
	</body>
</html>