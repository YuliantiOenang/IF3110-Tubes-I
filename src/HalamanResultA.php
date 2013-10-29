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
		<a href="HomeA.php" target=""> 
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
					<a href = "HalamanResultA.php" target=""> 
						<input type="button" value="Search!">
					</a>
			</form>
		</div>
		
	
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<img src ="Images/Login.png" class="isilogin" onclick="window.open('login.php', 'newwindow', 'width=300, height=250');" >
			</img>
			
			<a href="HalamanRegistrasi.php" target="">
				<img src ="Images/SignUp.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
		</div>
</div>

<!-- MENU -->

<div class="menu">
	<h2 align="center";> <b> Kategori Barang : </b> <br> <br> </h2>
	
	<div id="barang">
		<a href="HalamanBarang1A.php" target="">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2A.php" target="">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3A.php" target="">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4A.php" target="">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5A.php" target="">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	<h1 align="center";> <b> SEARCH RESULT </b> </h1>

<title>Search data</title>
</head>
<body>

<?php
$con = mysql_connect("localhost","root","");//database connection
mysql_select_db("progin");

if(($_POST['harga'] == 99) && ($_POST['kategori'] == "all"))				
	$order = "SELECT * FROM produk WHERE nama LIKE '%$_POST[kata]%' ";
else if ($_POST['harga'] != 99)
	$order = "SELECT * FROM produk WHERE nama LIKE '%$_POST[kata]%' && (harga >= '$_POST[harga]') && (harga <= '$_POST[harga]' + 100000)";
else if ($_POST['kategori'] != "all")
		$order = "SELECT * FROM produk WHERE nama LIKE '%$_POST[kata]%' && kategori LIKE '%$_POST[kategori]%' ";
else
		$order = "SELECT * FROM produk WHERE nama LIKE '%$_POST[kata]%' && kategori LIKE '%$_POST[kategori]%' && (harga >= '$_POST[harga]' + 100000) && (harga <= '$_POST[harga]')";

$result = mysql_query($order);	

if(mysql_num_rows($result)==0){
  echo ("No Result");
}
else { ?>
<table>
  <tr>
    <td align="center">Kategori 1</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <tr>
        <td>Nama</td>
        <td>Harga</td>
        <td>Gambar</td>
      </tr>

<?php	while($data = mysql_fetch_array($result)){
	$image = "Images/" . $data['gambar'];
	$link = "HalamanDetailA.php?id=" . $data['id'];
	echo "<tr><td>","<a href=",$link,">",$data[2],"</a>","</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>";
	}
}
mysql_close($con);
?>
    </table>
  </td>
</tr>
</table>

	
	
</div>

<!-- MEKANISME -->

<div class="mekanisme">
	<p id="textmekanisme">
		Mekanisme Pembayaran :<br>	
		1. 	<br>
		2.	<br>
		3.	<br>
	</p>
</div>

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>