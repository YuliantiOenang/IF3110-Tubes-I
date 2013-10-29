<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET["name"]; ?></title>
	<link rel="stylesheet" type="text/css" href="daftar_barang.css">
</head>
<body>
	<header>
		<div id="icon">
			<a href="home.php">
				<img src="Ruserba-icon1.png" alt="Ruserba Homepage" width="160" height="160">
			</a>
		</div>

		<div id="title">
			Detail Barang
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
	
	<?php
		$con = mysqli_connect("localhost","root","","ruserba");
		if(mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
			
		$result = mysqli_query($con, "SELECT * FROM barang WHERE nama_barang = '" . $_GET["name"] ."'");
		
		$barang = mysqli_fetch_array($result);
		
		echo '<div style="padding-top:200px">
						<div style="text-align:center">
							<img src="'. $barang['image'] . '" width="300" height="300">
							<div>
								<b>' . $barang['nama_barang'] . '</b><br>Rp ' . $barang['harga'] . ',-
								<br>Sisa stok : ' . $barang['total_stok'] . '
								<br><b>Keterangan : </b>
								<br>' . $barang['keterangan'] . '
							</div>
						</div>
					</div><br><br><br><br>';
		
		mysqli_close($con);
	?>
</body>
</html>