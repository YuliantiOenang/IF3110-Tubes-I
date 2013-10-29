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
		<a href="HomeB.php" target=""> 
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
				Welcome, <a href="HalamanProfil.php" target="">"Username"</a> !
		</p>
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<a href="HomeA.php" target="">
			<img src ="Images/Logout.png" class="isilogin">
			</img>
			</a>
			
			<a href="HalamanEditProfil.php" target="">
				<img src ="Images/apdet.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
		<div class="cart"  >
			<a href="HalamanShoppingBagB.php" target="">
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
		<a href="HalamanBarang1B.php" target="">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2B.php" target="">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3B.php" target="">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4B.php" target="">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5B.php" target="">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	
		<!-- KATEGORI 1 -->
	
	<h2 id="kategori"> 
		<br>
		Product Detail :
	</h2>
	
		<!-- BARIS 1 -->
	
	<div class="kotakkategori">
		<div class="spacekotakkategori">
		
		</div>
		
		<div class="isikotakkategori">
			<div class="contentkategori">
		
			</div>
		</div>
		
		<div class="spacekotakkategori">
		
		</div>	
		
		<div class="keteranganproduk">
		<form action='' method='POST'>
		<?php
			$con = mysql_connect("localhost","root","");//database connection
			mysql_select_db("progin");
							
			$order = "SELECT * FROM produk WHERE id = '$_GET[id]'";
							
			$result = mysql_query($order);	
			$row = mysql_fetch_array($result);
			
			mysql_close($con);
		?>	
			<p id="textproduk">
				Nama Barang			:	<?php echo $row['nama'] ?><br><br>
				Harga Barang		:	Rp.	<?php echo $row['harga'] ?><br><br>
				Deskripsi Barang	:	<?php echo $row['deskripsi'] ?><br> <br>
				<form name="shopbag" action="HalamanShoppingBagB.php" method="post" id="textproduk">
				Jumlah Pembelian : <input type="number" min="1" id="jumlahpembelian" name="jumlahpembelian">
				<?php
					echo "<input type=hidden name=id id=id value='$_GET[id]'>"
				?>
				<br>
				<input type="submit" value="Add to Shopping Bag">
				</form>
				<a href="HalamanShoppingBagB.php" target="">
					<input type="button" value="See my Shopping Bag">
				</a>
		</div>	
	</div>
	
</div>

<!-- MEKANISME -->

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>