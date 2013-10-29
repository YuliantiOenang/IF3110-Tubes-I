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
			<form action="demo_form.asp">
				Kata Pencarian : <input type="search" name="googlesearch">
			</form>
		</div>
	
		<div class="textkategori">
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