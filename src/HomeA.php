<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	
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
			<form name = 'search' action="HalamanResultA.php" method="post">
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
		<a href="HalamanBarang5A.php" target="">Kategori 5<br><br>
		</a> 
	</div>
	
	<button onclick="playVid()" type="button">Play Music</button>
	<button onclick="pauseVid()" type="button">Pause Music</button> 
	<br>
	
	<audio id="audio1">
		<source src="Sound/Depapepe - One.mp3" type="audio/mp3">
		Your browser does not support HTML5 video.
	</audio>

	<script> 
		var myVideo=document.getElementById("audio1"); 

		function playVid()
		{ 
			myVideo.play(); 
		} 

		function pauseVid()
		{ 
			myVideo.pause(); 
		} 
	</script> 
	
</div>

<!-- CONTENT -->

<div class="content">
	<h1 align="center";> 
	<br><br>
	<h2 align="center">Kategori Beras</h2>
		
		<div class="test2">
			<div class="test3">
				<div class="kotak">Nama</div>
				<div class="kotak">Harga</div>
				<div class="kotak">Gambar</div>
			</div>
			
			<?php
				mysql_connect("localhost","root","");//database connection
				mysql_select_db("progin");
				
				$order = "SELECT * FROM produk WHERE kategori ='Beras'";
				//order to search data
				//declare in the order variable
					
				$result = mysql_query($order);	
				//order executes the result is saved
				//in the variable of $result
				
				while($data = mysql_fetch_array($result))
				{
					$image = "Images/" . $data['gambar'];
					
					echo" 	<div class='test4'>
								<div class='kotak2'>".$data[2]."</div>
								<div class='kotak2'>".$data[3]."</div>
								<div class='kotak2'><img src='".$image."' class='foto'>	</img></div>
							</div>";
					
					/* echo "<tr><td>",$data[2],"</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>"; */	
				}
			?>
			
		</div>
		<br><br>
		<h2 align="center">Kategori Kopi</h2>
		
		<div class="test2">
			<div class="test3">
				<div class="kotak">Nama</div>
				<div class="kotak">Harga</div>
				<div class="kotak">Gambar</div>
			</div>
			
			<?php
				mysql_connect("localhost","root","");//database connection
				mysql_select_db("progin");
				
				$order = "SELECT * FROM produk WHERE kategori ='Kopi'";
				//order to search data
				//declare in the order variable
					
				$result = mysql_query($order);	
				//order executes the result is saved
				//in the variable of $result
				
				while($data = mysql_fetch_array($result))
				{
					$image = "Images/" . $data['gambar'];
					
					echo" 	<div class='test4'>
								<div class='kotak2'>".$data[2]."</div>
								<div class='kotak2'>".$data[3]."</div>
								<div class='kotak2'><img src='".$image."' class='foto'>	</img></div>
							</div>";
					
					/* echo "<tr><td>",$data[2],"</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>"; */	
				}
			?>
			
		</div>
		<br><br>
	<h2 align="center">Kategori Daging</h2>
		
		<div class="test2">
			<div class="test3">
				<div class="kotak">Nama</div>
				<div class="kotak">Harga</div>
				<div class="kotak">Gambar</div>
			</div>
			
			<?php
				mysql_connect("localhost","root","");//database connection
				mysql_select_db("progin");
				
				$order = "SELECT * FROM produk WHERE kategori ='Daging'";
				//order to search data
				//declare in the order variable
					
				$result = mysql_query($order);	
				//order executes the result is saved
				//in the variable of $result
				
				while($data = mysql_fetch_array($result))
				{
					$image = "Images/" . $data['gambar'];
					
					echo" 	<div class='test4'>
								<div class='kotak2'>".$data[2]."</div>
								<div class='kotak2'>".$data[3]."</div>
								<div class='kotak2'><img src='".$image."' class='foto'>	</img></div>
							</div>";
					
					/* echo "<tr><td>",$data[2],"</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>"; */	
				}
			?>
			
		</div>
		<br><br>
		<h2 align="center">Kategori Ikan</h2>
		
		<div class="test2">
			<div class="test3">
				<div class="kotak">Nama</div>
				<div class="kotak">Harga</div>
				<div class="kotak">Gambar</div>
			</div>
			
			<?php
				mysql_connect("localhost","root","");//database connection
				mysql_select_db("progin");
				
				$order = "SELECT * FROM produk WHERE kategori ='Ikan'";
				//order to search data
				//declare in the order variable
					
				$result = mysql_query($order);	
				//order executes the result is saved
				//in the variable of $result
				
				while($data = mysql_fetch_array($result))
				{
					$image = "Images/" . $data['gambar'];
					
					echo" 	<div class='test4'>
								<div class='kotak2'>".$data[2]."</div>
								<div class='kotak2'>".$data[3]."</div>
								<div class='kotak2'><img src='".$image."' class='foto'>	</img></div>
							</div>";
					
					/* echo "<tr><td>",$data[2],"</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>"; */	
				}
			?>
			
		</div>	
	<br><br>
	<h2 align="center">Kategori Teh</h2>
		
		<div class="test2">
			<div class="test3">
				<div class="kotak">Nama</div>
				<div class="kotak">Harga</div>
				<div class="kotak">Gambar</div>
			</div>
			
			<?php
				mysql_connect("localhost","root","");//database connection
				mysql_select_db("progin");
				
				$order = "SELECT * FROM produk WHERE kategori ='Teh'";
				//order to search data
				//declare in the order variable
					
				$result = mysql_query($order);	
				//order executes the result is saved
				//in the variable of $result
				
				while($data = mysql_fetch_array($result))
				{
					$image = "Images/" . $data['gambar'];
					
					echo" 	<div class='test4'>
								<div class='kotak2'>".$data[2]."</div>
								<div class='kotak2'>".$data[3]."</div>
								<div class='kotak2'><img src='".$image."' class='foto'>	</img></div>
							</div>";
					
					/* echo "<tr><td>",$data[2],"</td><td>",$data[3],"</td><td><img src=".$image." /></td></tr>"; */	
				}
			?>
			
		</div>	
	
</div>

<!-- MEKANISME -->

<div class="mekanisme">
	<p id="textmekanisme">
		Mekanisme Pembayaran :<br>	
		1. 	COD<br>
		2.	Transfer<br>
		3.	Rekber<br>
	</p>
</div>

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>