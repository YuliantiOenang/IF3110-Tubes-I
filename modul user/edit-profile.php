<?php  

session_start();
if(isset($_COOKIE['username'])){
	if (isset($_SESSION['email'])){
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		$email=$_SESSION['email'];
		$namalengkap=$_SESSION['namalengkap'];
		$nohp=$_SESSION['nohp'];
		$provinsi=$_SESSION['provinsi'];
		$kotakabupaten=$_SESSION['kotakabupaten'];
		$alamat=$_SESSION['alamat'];
		$kodepos=$_SESSION['kodepos'];
	}else{
		header('location: getdatamember.php'); 
	}
}else{
	header('location: register.php');  
}
 ?> 


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Masukkan Judul Dokumen</title>
	<link rel="stylesheet" type="text/css" href="res/css/style.css" media="all"/>
</head>
<body>
	
	<div id="container">
		
		<!-- Header Section -->
		<div id="header" class="frame">
			<div class="kolom-7">
				<img src="res/img/logo.png" alt="" id="logo"/>
			</div>
			<div class="kolom-4">
				<div id="user-panel">
					
					<div id="user" class="frame">
						<img id="user-pict" class="kolom-5" src="res/img/userpict_h.png" alt=""/>
						<div id="user-text" class="kolom-7">
					
						 <?php if(isset($_COOKIE['username'])){ $hoho = $_SESSION['username'];?>
							<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member"><?php echo "$hoho" ?></a></span>!</h3>
							<p id="user-control">
								<span class="edit-logout">	<a href='logout.php' id='logout2'>Logout</a></span>
							</p>
							<?php }else {
								UNSET($_SESSION['username']);  
								UNSET($_SESSION['password']); 
								session_destroy();  
							?>
							<div id = "logreg">
							<p id="user-control">
								
									<span class="edit-logout">	<a id="login2" href="javascript:login('show')">Login</a></span>
									&nbsp;or&nbsp;
									<span class="edit-logout">	<a id="register2" href="register.php">Register</a></span>
								
							</p>
							<br/></div>
							<?php } ?>
							<a href="#" class="btn">Check Your Cart</a>
						</div>
					</div>
					
					<div id="search-bar" class="frame">
						<form action="search.php">
							<input id="search-box" class="kolom-9" type="text" name="src" value="Ketikkan barang yang dicari...">
							<input id="search-button" class="kolom-1" type="submit" value="">
						</form>					
					</div>
				</div>
			</div>			
		</div>
		

		<input type='hidden' name='iusername' id='iusername' value="<?php echo $username?>" />
		<input type='hidden' name='ipassword' id='ipassword' value="<?php echo $password?>" />
		<input type='hidden' name='iemail' id='iemail' value="<?php echo $email?>" />
		<input type='hidden' name='inamalengkap' id='inamalengkap' value="<?php echo $namalengkap?>" />
		<input type='hidden' name='inohp' id='inohp' value="<?php echo $nohp?>" />
		<input type='hidden' name='iprovinsi' id='iprovinsi' value="<?php echo $provinsi?>" />
		<input type='hidden' name='ikotakabupaten' id='ikotakabupaten' value="<?php echo $kotakabupaten?>" />
		<input type='hidden' name='ialamat' id='ialamat' value="<?php echo $alamat?>" />
		<input type='hidden' name='ikodepos' id='ikodepos' value="<?php echo $kodepos?>" />

		<!-- End of Header -->

		<div id="form-registrasi" class="frame">
			<p id="registration-title">Your Profile</p>
			
			<div id="data-diri" class="frame">
				<img class="kolom-3 gambar" src="res/img/userpict_b.png" alt=""/>
				<div class="kolom-9 teks">
					
					
					<form id='profile' action='update.php' method='post' accept-charset='UTF-8' onsubmit = "return cekChangeData()">
						<label for='username' >Username:</label>
						<input name="username" title="minimal 5 karakter" id="username" required="required" onkeyup="cekvalidAll()" readonly value="<?php echo $username?>">
						<br/>
						<label for='password' >Change Password:</label>
						<input type = "password" name="password" title="minimal 8 karakter" id="password" oninput="!!(cekPassword() & cekCPassword())" required="required" onkeyup="cekvalidAll()" value="<?php echo $password ?>">
						<input type='text' name='validasipassword' id='validasipassword' maxlength="10" value ="valid" readonly/>
						<br/>

						<label for='cpassword' >Confirm Password:</label>
						<input type = "password" name="cpassword" title="minimal 8 karakter" id="cpassword" oninput="cekCPassword()" required="required" onkeyup="cekvalidAll()" value="<?php echo $password ?>">
						<input type='text' name='validasiCpassword' id='validasiCpassword' maxlength="10" value ="valid" readonly/>
						<br/>

						<label for='name' >Nama Lengkap: </label>
						<input type='text' name='namalengkap' title ="lalala yeyeye" id='namalengkap' maxlength="50" required="required" onkeyup="!!(cekNamaDuaKata() & cekvalidAll())" value="<?php echo $namalengkap?>">
						<input type='text' name='validasinamalengkap' id='validasinamalengkap' maxlength="10" value ="valid" readonly/>
						<br/>

						<label for='email' >Email:</label>
						<input type='text' name='email'  id='email' title = "cuman@contoh.com" maxlength="50" required="required" onkeyup="cekvalidAll()" value="<?php echo $email ?>" readonly>
						<br/>

						<label for='nohp' >No HP:</label>
						<input type='text' name='nohp' id='nohp' title="harus angka" maxlength="50" required="required" onkeyup="!!(ceknohp() & cekvalidAll())" value="<?php echo $nohp?>"/>
						<input type='text' name='validasinohp' id='validasinohp' maxlength="10" value ="valid" readonly/>
						<br/>

						<label for='provinsi' >Provinsi:</label>
						<input type='text' name='provinsi' id='provinsi' maxlength="50" required="required" onkeyup="cekvalidAll()" value="<?php echo $provinsi?>"/>
						<br/>

						<label for='kotakabupaten' >Kota/Kabupaten:</label>
						<input type='text' name='kotakabupaten' id='kotakabupaten' maxlength="50" required="required" onkeyup="cekvalidAll()" value="<?php echo $kotakabupaten?>"/>
						<br/>

						<label for='alamat' >Alamat:</label>
						<input type='text' name='alamat' id='alamat' maxlength="50" required="required" onkeyup="cekvalidAll()" value="<?php echo $alamat?>"/>
						<br/>

						<label for='kodepos' >Kode Pos:</label>
						<input type='text' name='kodepos' id='kodepos' pattern="[0-9]+[0-9]*" title="harus angka" maxlength="50" required="required" onkeyup="cekvalidAll()" value="<?php echo $kodepos?>"/>
						<br/>
						<input type='submit' id="btn-profile" class="btn" name='edit' value='edit' />
					</form>

				</div>
				
			</div>
			
		</div>
		
	</div>
	

	
	<!-- Javascript -->
	<script src="res/js/common.js" type="text/javascript"></script>	
	<script src="scriptmember.js"></script>

</body>
</html>