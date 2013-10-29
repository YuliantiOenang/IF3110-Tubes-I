<!DOCTYPE html>

<html>
	<head>
		<!-- judul tab nya, wajib ini -->
		<title>Halaman Barang</title>

		<!-- Javascript -->
		<script src="login.js"></script>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="daftar_barang.css">
	</head>

	<body>
		<!-- Header page -->
		<header>
		<div id="icon">
			<a href="home.php">
				<img src="Ruserba-icon1.png" alt="Ruserba Homepage" width="160" height="160">
			</a>
		</div>

		<div id="title">
			Showing result(s) for : "<?php $max = $_GET["max"]; $category = $_GET["cat"]; echo $category; ?>"
		</div>

		<div id="head-right">
			<div>
				<a href="Cart.php">Go to Cart</a>
				<?php
				if(!isset($_COOKIE["user"]))
				{
					echo '<div id="login">
						<a href="login.php">Login</a><br>
						<a href="registrasi_user.php">Register</a>
					</div>';
				} else {
					$conn = mysqli_connect("localhost","root","","ruserba");
					if(mysqli_connect_errno($conn)) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
			
					$hasil = mysqli_query($conn, "SELECT * FROM user_table WHERE username = '" . $_COOKIE["user"] ."'");
					
					$user = mysqli_fetch_array($hasil);
					
					echo '<div id="logout">
						<a href="logout.php">Logout</a><br>
						Welcome <a href="Profile.php?user=' . $_COOKIE["user"] . '">' . $user['nama_lengkap'] . '</a>
					</div>';
				
					
					mysqli_close($conn);
				}
				?>
			</div>
	
			<!-- kasih jarak ke bawah, MANUAL ^^ -->
			<br><br><br>
	
			<div id="search-tab">
				<form action="search.php" method="post">
					<input type="text" name="search">
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
		<!-- Sampai sini headernya udah beres -->
		</header>
		<section>
			<div id="wrap">
			<?php
			$con = mysqli_connect("localhost","root","","ruserba");
			if(mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$result = mysqli_query($con, "SELECT * FROM barang WHERE kategori = '" . $category ."'");
			
			for($i = 0; $i < $max && $nama = mysqli_fetch_array($result); $i++) {
				
				echo '<div style="padding-top:200px">
						<div style="text-align:center">
							<img src="'. $nama['image'] . '" width="300" height="300">
							<div>
								<a href="detail.php?name=' . $nama['nama_barang'] . '">' . $nama['nama_barang'] . '</a><br>Rp ' . $nama['harga'] . ',-
								<form action="buy()">
									Jumlah :
									<input type="number" size="4" name="sum">
									<input type="submit" value="Buy">
								</form>
							</div>
						</div>
					</div>';
			}
			mysqli_close($con);
			?>
			</div>
			<a href="halaman_barang.php?max=<?php echo $max+=10;?>&cat=<?php echo $category;?>">show more</a>
		</section>
	</body>
</html>