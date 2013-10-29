<!DOCTYPE html>

<html>
	
<head>
	<link rel="stylesheet" type="text/css"  href="CSS/CSSDetail.css">
</head>
	
<body>

<div class="container">

<!-- HEADER -->

<div class="header" >
	
	<div class="tempatlogo">
		<a href="HomeB.php" target="_blank"> 
			<img src ="Images/Logo.jpg" class="logo">
		</a>
	</div>
	
	<div class="judul">
		<h1 >
			Ruko Serba Ada<br>
			Menyediakan kebutuhan Anda secara Online !
		</h1>
		
		<div class="caribarang">
			<form name = 'search' action="HalamanResultB.php" method="post">
				Kata Pencarian : <input type="text" name="kata" id="kata">
			<br>

			Pilih Kategori : 
				<select required name="kategori" id="kategori">
					<option value="all">All</option>
  					<option value="Beras">Beras</option>
  					<option value="Daging">Daging</option>
  					<option value="Ikan">Ikan</option>
  					<option value="Teh">Teh</option>
					<option value="Kopi">Kopi</option>
				</select> <br>

		
			Pilih Harga : 
				<select required name="harga" id=	"harga">
					<option value=99>All</option>
  					<option value=0>Rp. 0 - Rp. 100.000,00</option>
  					<option value=100001>Rp. 100.001,00 - Rp. 200.000,00</option>
  					<option value=200001>Rp. 200.001,00 - Rp. 300.000,00</option>
  					<option value=300001>Rp. 300.001,00 - Rp. 400.000,00</option>
					<option value=400001>Rp. 400.001,00 - Rp. 500.000,00</option>
				</select> <br>

			<input type=submit value=Submit >

			</form>
		</div>
		
		<p id="textlogout">
				Welcome, <a href="HalamanProfil.php" target="_blank">"Username"</a> !
		</p>
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<img src ="Images/Login.png" class="isilogin"  >
			</img>
			
			<a href="HalamanRegistrasi.php" target="_blank">
				<img src ="Images/SignUp.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
		<div class="cart"  >
			<a href="HalamanShoppingBag.php" target="_blank">
				<img src ="Images/Cart.jpg" class="isicart" >
				</img>
			</a>
		</div>
	</div>
	
</div>

<!-- MENU -->

<div class="menu">
	<h2 align="center";> <b> Kategori Barang : </b> <br> <br> </h2>
	
	<div id="barang"> 
		<a href="HalamanBarang1.php" target="_blank">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2.php" target="_blank">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3.php" target="_blank">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4.php" target="_blank">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5.php" target="_blank">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	
		<!-- KATEGORI 1 -->
		
	
	<p id="registrasi"> 

			<strong>Your Profile :</strong>
			
		<?php
			$dbhost  = 'localhost';
			$dbname  = 'progin';
			$dbuser  = 'root';
			$dbpass  = ''; 
			
			$con = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if($con == FALSE)
			{
				echo 'Cannot connect to database' . mysql_error();
			}
			else
			{
				echo 'Connected to database <br>';
			}
			
			mysql_select_db($dbname, $con);
			
			$result = mysql_query("SELECT * FROM user WHERE `Username` = '$_COOKIE[username]';",$con);
			
			if($result === FALSE) {
			die(mysql_error()); // TODO: better error handling
			}
			
			$row = mysql_fetch_array($result)

			?>

		
		<p id="formregistrasi">
		<br>
			Username        		:	<?php echo $row['Username']; ?>
		</p>
		
		<p id="formregistrasi">
			Nama Lengkap			:	<?php echo $row['Fullname']; ?> 
		</p>
		
		
		<p id="formregistrasi">
			Alamat					:   <?php echo $row['Alamat']; ?> <br>
			Provinsi				:   <?php echo $row['Provinsi']; ?> <br>
			Kota					:	<?php echo $row['Kota']; ?> <br>
			Kodepos					:	<?php echo $row['Kodepos']; ?> <br>
			Nomor HP				:	<?php echo $row['NomorHP']; ?> <br>
			E-Mail					:	<?php echo $row['Email']; ?>
		</p>
		
		
		<p id="formregistrasi">
			Jumlah Transaksi yang dilakukan	:	x Kali
		</p>
		
		<div id="buttonregistrasi">
			<a href = "HalamanEditProfil.php" target="_blank"> 
				<input type="submit" id="submit" value="Edit Profile"> 
			</a>
		</div>
		
	</p>
	
</div>

<!-- MEKANISME -->

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>