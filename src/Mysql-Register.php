<?php include("header.php"); ?>

<html>
	<body>
		<?php 
			include 'connect-mysql.php';

			$sql = "INSERT INTO user (username,password,nama,email,hp,alamat,provinsi,kota,kodepos)
				VALUES
					('$_POST[username]' , 
					 '$_POST[password]' , 
					 '$_POST[nama]' , 
					 '$_POST[email]' ,
					 '$_POST[hp]' , 
					 '$_POST[alamat]' , 
					 '$_POST[provinsi]' , 
					 '$_POST[kota]' , 
					 '$_POST[kodepos]')
			";

			$result = mysql_query($sql);
			if (!$result) {
				die("Error : " . mysql_error());
			}

		?>

		<script>
			localStorage.username = <?php echo '"'.$_POST["username"].'"'; ?>;
			document.getElementById("welcome").innerHTML = "Welcome, <a href='profile.php'>"+localStorage.username+"</a>! <button onclick='logout()'>Logout</button>";
		</script>

		Registrasi berhasil! <br />
		Selamat datang di Ruserba, <?php echo $_POST['username']; ?>! <br/> 
		Apakah Anda ingin memasukkan nomor kartu kredit? <br>
		<a href="Registercard.php">Ya</a> <a href="index.php">Tidak</a>
	</body>
</html>