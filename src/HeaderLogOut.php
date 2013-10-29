<!DOCTYPE html>

<html>
	
<head>
	<link rel="stylesheet" type="text/css"  href="CSS/CSS.css">
</head>
	
<body>

<div class="container">

<!-- HEADER -->

<div class="header" >
	
	<div class="tempatlogo">
		<a href="Home.php" target=""> 
			<img src ="Images/Logo.jpg" class="logo">
		</a>
	</div>
	
	<div class="judul">
		<h1 >
			Ruko Serba Ada<br>
			Menyediakan kebutuhan Anda secara Online !
		</h1>
		
		<div class="caribarang">
			<form action="demo_form.asp">
				Kata Pencarian : <input type="search" name="googlesearch">
			</form>
		</div>
	
		<div class="textkategori">
			<form action="demo_form.asp">	
			Pilih Kategori : 
				<select required>
					<option value="all">All</option>
  					<option value="kategori1">Kategori 1</option>
  					<option value="kategori2">Kategori 2</option>
  					<option value="kategori3">Kategori 3</option>
  					<option value="kategori4">Kategori 4</option>
					<option value="kategori5">Kategori 5</option>
				</select> <br>
			</form>
		</div>
		
		<div class="textkategori">
			<form action="demo_form.asp">	
			Pilih Harga : 
				<select required>
					<option value="all">All</option>
  					<option value="harga1">Rp. 0 - Rp. 100.000,00</option>
  					<option value="harga2">Rp. 100.001,00 - Rp. 200.000,00</option>
  					<option value="harga3">Rp. 200.001,00 - Rp. 300.000,00</option>
  					<option value="harga4">Rp. 300.001,00 - Rp. 400.000,00</option>
					<option value="harga5">Rp. 400.001,00 - Rp. 500.000,00</option>
				</select> <br>
					<a href = "HalamanResult.php" target=""> 
						<input type="button" value="Search!">
					</a>
			</form>
		</div>
		
	</div>

		<!-- INI YANG BEDA SETELAH LOGIN -->
	
	<div class="tempattombol"> 	
		<div class="login">
			<p id="textlogout">
				Welcome, <a href="HalamanProfil.php" target="">"Username"</a> !
			</p>
		</div>
		
		<div class="login">
			<img src ="Images/LogOut.png" class="isilogin" >
			</img>
		</div>
		
		<div class="login">
			<a href="HalamanShoppingBag.php" target="">
				<img src ="Images/Cart.jpg" class="isicart" >
				</img>
			</a>
		</div>
		
	</div>	
	
	
</div>

</div>

</body>

</html>