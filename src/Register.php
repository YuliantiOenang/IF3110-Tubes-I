<?php
    // Header
    include("header.php");
?>

<HTML>
	<body>
		<h1>Form Registrasi Ruko Serba Ada</h1>
		<form method="post" action="Mysql-Register.php" name="regform">
			<pre>Username            : <input type="text" name="username" onkeyup="valPassword();valUsername();valid()"> <span id="user"> </span><br> </pre>
			<pre>Password            : <input type="password" name="password" onkeyup="valPassword();valUsername();valEmail();valid()"> <span id="pass"></span> <br> </pre>
			<pre>Confirm Password    : <input type="password" name="confirm" onkeyup="valConfirm();valid()"> <span id="conf"></span> <br> </pre>
			<pre>Nama Lengkap        : <input type="text" name="nama" onkeyup="valNama();valid()"> <span id="nama"></span> <br> </pre>
			<pre>Email               : <input type="text" name="email" onkeyup="valEmail();valEmail2();valPassword();valid()"> <span id="email"></span> <br> </pre>
			<pre>No. HP              : <input type="text" name="hp" onkeyup="valHP();valid()"> <span id="hp"></span> <br> </pre>
			<pre>Alamat              : <textarea name="alamat" rows="5" cols="40" onkeyup="valAlamat();valid()"> </textarea> <span id="alamat"></span> <br> </pre>
			<pre>Provinsi            : <input type="text" name="provinsi" onkeyup="valProvinsi();valid()"> <span id="provinsi"></span> <br> </pre>
			<pre>Kota / Kabupaten    : <input type="text" name="kota" onkeyup="valKota();valid()"> <span id="kota"></span> <br> </pre>
			<pre>Kode Pos            : <input type="text" name="kodepos" onkeyup="valKodepos();valid()"> <span id="kodepos"></span> <br> </pre>
			<input type="submit" id="register" value="Register" disabled>
		</form>

		<script>
			var validUsername = false;
			var validPassword = false;
			var validConfirm = false;
			var validEmail = false;
			var validNama = false;
			var validHP = false;
			var validAlamat = false;
			var validProvinsi = false;
			var validKota = false;
			var validKodepos = false;

			function valHP() {
				var hp = document.forms["regform"]["hp"].value;
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
			}
			function valAlamat() {
				var alamat = document.forms["regform"]["alamat"].value;
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
			}
			function valProvinsi() {
				var provinsi = document.forms["regform"]["provinsi"].value;
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
			}
			function valKota() {
				var kota = document.forms["regform"]["kota"].value;
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
			}
			function valKodepos() {
				var kodepos = document.forms["regform"]["kodepos"].value;
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
			}

			function valid() {
				if (validUsername && validConfirm && validPassword && validEmail && validNama && validHP && validAlamat && validProvinsi && validKota && validKodepos) {
					document.getElementById("register").disabled = false;
				}
				else {
					document.getElementById("register").disabled = true;
				}
			}


			function valPassword() {
				var username = document.forms["regform"]["username"].value;
				var password = document.forms["regform"]["password"].value;
				var email = document.forms["regform"]["email"].value;

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
			}

			function valConfirm() {
				var confirm = document.forms["regform"]["confirm"].value;
				var password = document.forms["regform"]["password"].value;

				if ((confirm != password) && (confirm.length > 0)) {
					document.getElementById("conf").innerHTML = "Password tidak sama";
					validConfirm = false;
				}
				else {
					document.getElementById("conf").innerHTML = "";
					validConfirm = true;
				}
			}

			function valNama() {
				var nama = document.forms["regform"]["nama"].value;
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
			}

			function valEmail() {
				var email = document.forms["regform"]["email"].value;
				var password = document.forms["regform"]["password"].value;
				var regex = /^[a-zA-Z0-9\_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.]{2,}$/;
				var validemail = email.match(regex);
				if ((validemail == null) && (email.length > 0)) {
					document.getElementById("email").innerHTML = "Bukan Email yang valid";
				}
				else if ((password == email) && (email.length > 0)) {
					document.getElementById("email").innerHTML = "Email tidak boleh sama dengan Password";
				}
				else {
					document.getElementById("email").innerHTML = "";

					if (email.length > 0) {
					validEmail = true;
					var xmlhttp; 
					if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		  				xmlhttp=new XMLHttpRequest();
		  			}
					else {// code for IE6, IE5
		  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  			}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							var temp = xmlhttp.responseText;
							document.getElementById("email").innerHTML = temp;
							if (temp == "Email sudah ada") {
								validEmail = false;
							}
						}
					}
					xmlhttp.open("GET","Validate-Register.php?type=2&value="+email,true);
					xmlhttp.send();
					}
				}

				
			}


			function valUsername() {
				var username = document.forms["regform"]["username"].value;
				var password = document.forms["regform"]["password"].value;

				if ((username.length < 5) && (username.length > 0)) {
					document.getElementById("user").innerHTML = "Username minimal 5 karakter";
					validUsername = false;
				}
				else if ((username == password) && (username.length > 0)) {
					document.getElementById("user").innerHTML = "Username tidak boleh sama dengan password";
					validUsername = false;
				}
				else {
					document.getElementById("user").innerHTML = "";

					if (username.length > 0) {
					validUsername = true;

					var xmlhttp; 
					if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		  				xmlhttp=new XMLHttpRequest();
		  			}
					else {// code for IE6, IE5
		  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  			}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							var temp = xmlhttp.responseText;
							document.getElementById("user").innerHTML = temp;
							if (temp == "Username sudah ada") {
								validUsername = false;
							}
						}
					}
					xmlhttp.open("GET","Validate-Register.php?type=1&value="+username,true);
					xmlhttp.send();
					}

				}
				
				
			}
		</script>

	</body>
</HTML>