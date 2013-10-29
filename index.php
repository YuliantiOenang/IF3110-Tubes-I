<?php
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css.css" type="text/css">
<link rel="stylesheet" href="login.css" type="text/css">
<link rel="stylesheet" href="content.css" type="text/css">
</head>
<body>
	<div id="all"> 
		<div id="header"> 
			<div id="logo"> 
				<a href="index.php"> <img border="0" src="images/logo.png" width="100" height="100"></a> 
			</div> 
			<div id="shoppingbag"> 	
				<a href="index.php"> <img border="0" src="images/shoppingbag.png" width="70" height="70"></a> 
				<br>shopping bag 
				<br>item(0) 
			</div> 
			<div id="headerright"> 	
				<table border=0>
					<tr align="center"><td><a class="linkheader" href="index.php">Home</a> </td>
						<td><a class="linkheader" href="index.php">Direktori</a></td>
						<td><a class="linkheader" href="index.php">Tentang Kami</a></td>
						<td>
						<?php
							if(isset($_SESSION['userid'])){
								echo "<a class='linkheader' href='logout.php'>Logout</a>";
							}
							else{
								echo "<a class='linkheader' href='#popup'>Login</a>";
							}
						?>
						</td>
						<td>
						<?php
							if(isset($_SESSION['userid'])){
								echo "<a class='linkheader' href='index.php?page=profil'>Welcome ".$_SESSION['userid']."!</a>";
							}
							else{
								echo "<a class='linkheader' href='index.php?page=inputdaftar'>Registrasi</a>";
							}
						?>
						</td></tr>
					<form action="" method='post' id="cari">
					<tr align="center"><td></td>
						<td>Pencarian</td>
						<td><input type="text" name="kategori" id="kategori"></td>
						<td colspan="2"><input type="text" name="pencarian" id="kategori"></td></tr></form>
				</table>
				<!--POP UP LOGIN-->
				<div id="popup">
					<div class="window">
						<a href="#" class="close-button" title="Close">X</a>
						<h1>Login</h1>
						<form method="POST" action="sukseslogin.php">
						<table border=0 align="center">
						<tr><td><label>Username </label></td><td><input type="text" name="userid" id="userid"><br></td></tr>
						<tr><td><label>Password </label></td><td><input type="password" name="password" id="password"><br></td></tr>
						<!--<div id="submit"><a href="sukseslogin.php">Login</a></div>-->
						<tr><td></td><td><input class="submit" type="submit" name="submit" value="login"></td></tr>
						</table>
						</form>
					</div>
				</div>				
			 </div>
		 </div>
		 <div id="navigasi">
			 <ul class="nav">
				 <li><a href="index.php">Sembako</a></li>
				 <li><a href="index.php">Daging</a></li>
				 <li><a href="index.php">Sayur</a></li>
				 <li><a href="index.php">Buah</a></li>
				 <li><a href="index.php">Bumbu Dapur</a></li>
				 <li><a href="index.php">Snack</a></li>
				 <li><a href="index.php">Minuman</a></li>
				 <li><a href="index.php">Sabun</a></li>
				 <li><a href="index.php">Lainnya</a></li>
				 </ul>
		</div>
		<?php
		
		//$_POST['userid'] && $_POST['fullname'] && $_POST['nohp'] && $_POST['password'] && $_POST['alamat'] && $_POST['provinsi'] && $_POST['kabupaten'] && $_POST['email']
		//Sukses Registrasi
		if(isset($_GET['page'])) {
			$page = $_GET['page'] . ".php";
			include ($page);
		}
		else if(isset($_SESSION['userid']) && isset($_SESSION['password']) && isset($_SESSION['fullname']) && isset($_SESSION['email'])){
			include ('daftarkartukredit.php');
		}
		else if(isset($_SESSION['userid'])){
			include ('prosedur.php');
		}		
		else {
			include ('prosedur.php');
		}?>	
	</div>
</body>

<?php

?>