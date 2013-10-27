<!-- List of Merchandises In Category -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
		<title>
			Kategori Barang
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
					<li id="nav_hor">
						<a href="login.php" onclick="return login()">
							<b>
								MASUK
							</b>
						</a>
					</li>
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
			// Menampilkan seluruh kategori barang yang tersedia
			function DisplayAllKategori(){
				echo "Kategori Barang : <br/>";
				
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				$result = mysqli_query($con,"SELECT DISTINCT Kategori FROM Merchandise");

				while($row = mysqli_fetch_array($result))
				  {
				  $link = "category.php?kat=".$row['Kategori'];
				  echo "<a href= $link>" .$row['Kategori'] . "</a>";
				  echo "<br>";
				  }

				mysqli_close($con);
			}

			function FilterKategori(){
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				if ($GLOBALS['type'] == 0) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM Merchandise WHERE Kategori='" . $GLOBALS['kat'] . "'");
				if ($GLOBALS['type'] == 1) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM Merchandise WHERE Kategori='" . $GLOBALS['kat'] . "' ORDER BY Nama");
				if ($GLOBALS['type'] == 2) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM Merchandise WHERE Kategori='" . $GLOBALS['kat'] . "' ORDER BY Harga");
				
				mysqli_close($con);
			}

			function DisplayKategori(){
				while($row = mysqli_fetch_array($GLOBALS['result']))
				  { ?>
				  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
					<br/>
					<?php
					$link = "merchandise.php?id=".$row['ID'];
					echo "<a href= $link>" .$row['Nama'] . "</a>";
					echo "<br/><br/>";
					$link2 = "category.php?kat=".$row['Kategori'];
					?>
					<form name="forminput" action="<?php echo $link2; ?>" onsubmit="return validateForm()" method="post">
					Jumlah: <input type="number" name="jumlah">
					<input type="submit" value="BUY!">
					</form>
					<pre><?php echo 'Harga : '.$row['Harga']; ?><br/><br/></pre>
				  </div>
				  <?php }
			}

			function DisplaySort(){
				$link = "category.php?kat=".$GLOBALS['kat']."&type=1";
				echo "<form name='input' method='post' action='".$link."'>";
				echo "<input type='submit' name='button' value='Sort by Nama'>";
				echo "</form>";
				
				$link2 = "category.php?kat=".$GLOBALS['kat']."&type=2";
				echo "<form name='input' method='post' action='".$link2."'>";
				echo "<input type='submit' name='button' value='Sort by Harga'>";
				echo "</form>";
				echo "<br/>";
			}

			//DisplayAllKategori();
			if (isset($_POST['submitForm'])) { 
				print_r($_POST);
			}
			
			if (isset($_GET['kat'])) $GLOBALS['kat'] = $_GET['kat'];
			echo "Kategori : ".$kat;
			if (isset($kat)) {
				if (isset($_GET['type'])) $type = $_GET['type'];
				else $type = 0;
				if (!isset($result)) FilterKategori();
				if (isset($result)) DisplaySort();
				if (isset($result)) DisplayKategori();
			}

			?> 
		</div>
		<div id="footer">
			<p>Copyright 2013 by <b>Kelompok LapAn</b></p>
			<p>Muhammad Nassirudin - 13511044 | Arief Pradana - 13511062 | Ryan Ignatius Hadiwijaya - 13511070</p>
		</div>
		<script>
			function validateForm()
			{
			var x=document.forms["forminput"]["jumlah"].value;
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