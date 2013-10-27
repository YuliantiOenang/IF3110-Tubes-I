<!-- Detail of A Merchandise -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
		<title>
			Detail Barang
		</title>
	</head>
	<body>
		<div id="header">
			<div id="header_top">
				<ul id="nav_bar_right">
					<li id="nav_hor">
						<a href="shoppingbag.php">
							<img src="img/cart.png"></img>
						</a>
					</li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="#"><b>MASUK</b></a></li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="register.php"><b>DAFTAR</b></a></li>
				</ul>
			</div>
			<div id="header_bottom">
				<ul id="nav_bar">
					<li id="nav_hor_wrap"></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Makanan">MAKANAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Pakaian">PAKAIAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Furnitur">FURNITUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Peralatan Dapur">ALAT DAPUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Alat Sehari - hari">LAIN-LAIN</a></li>
					<li id="search">
						<form action="search.php" method="post">
							<input id="text_field" type="text" name="name"></input>
							<input id="button" type="submit" value="CARI"></input>
						</form>
					</li>
				</ul>
			</div>
			<a id="logo" href="index.php">
				<img src="img/logo.png"></img>
			</a>
			<div id="title">
				<h1>
					RuSerBa LapAn
				</h1>
				<p id="subtitle">
					Ruko Serba Ada Lapak Andalan
				</p>
			</div>
		</div>
		<div id="content">
			<?php
			function DisplayBarang(){
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				$GLOBALS['result'] = mysqli_query($con,"SELECT * FROM Merchandise WHERE ID='" . $GLOBALS['id'] . "'");
				
				while($row = mysqli_fetch_array($GLOBALS['result']))
				  { 
				  echo "Detail Barang :";
				  $link = "category.php?kat=".$row['Kategori'];
				  ?>
				  <br/>
				  <div>
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?>>
					<pre><?php echo 'Nama : '.$row['Nama']; ?></pre>
					<pre><?php echo 'Harga : '.$row['Harga']; ?></pre>
					<pre><?php echo 'Kategori : '.$row['Kategori']; ?></pre>
					<pre><?php echo 'Keterangan : '.$row['Keterangan']; ?></pre>
					<pre><?php echo 'Stok : '.$row['Banyak']; ?></pre>
					<pre><?php echo 'Tambahan Permintaan :' ?></pre>
					<textarea rows="10" cols="100"></textarea>
					<form name="input" action="<?php echo $link; ?>" onsubmit="return validateForm()" method="post">
					Jumlah: <input type="number" name="jumlah">
					<input type="submit" value="BUY!">
					</form> 
				</div>
				  <?php }

				mysqli_close($con);
			}
			if (isset($_GET['id'])) $GLOBALS['id'] = $_GET['id'];
			DisplayBarang();
			?> 
		</div>
		<div id="footer">
			<p>Copyright 2013 by <b>Kelompok LapAn</b></p>
			<p>Muhammad Nassirudin - 13511044 | Arief Pradana - 13511062 | Ryan Ignatius Hadiwijaya - 13511070</p>
		</div>
		<script>
		function validateForm()
		{
		var x=document.forms["input"]["jumlah"].value;
		if (x==null || x=="" || !isFinite(x))
		  {
		  alert("Jumlah pembelian tidak sesuai..");
		  return false;
		  }
		alert("Pembelian sukses! (not implemented yet.. )");
		}
		</script>
	</body>
</html>