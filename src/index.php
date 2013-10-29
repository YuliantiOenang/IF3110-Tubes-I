<?php include 'header.php'; ?>
		<script src="AJAXaddtocart.js"></script>
	</head>
<?php include 'middle.php'; ?>
		<h2>Home</h2>
		<?php
			$kategori=array("beras","daging","ikan","sayur","buah");
			for($i=0;$i<count($kategori);$i++) {
				echo "<h3>",ucfirst($kategori[$i]),"</h3>";
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				// Query from database
				$sql = "SELECT * FROM barang WHERE kategori='".$kategori[$i]."' ORDER BY 'terjual' DESC";
				$result=mysqli_query($con,$sql);
				// Display result
				for ($j=0;$j<3;$j++) {
					$row = mysqli_fetch_array($result);
					$nama=$row['nama'];
					$harga=$row['harga'];
					echo "<img src=\"/tubes1/images/",$row['nama'],".jpg\" alt='gambar' width='400' height='300'><br>";
					echo "Nama: <a href='detil.php?nama=$nama&harga=$harga'>",$row['nama'],"</a><br>";
					echo "Harga: ",$row['harga'],"<br>";
					echo "Banyak: <input type='text' name='qty' id='",$row['nama'],"'>";
					echo "<button type='button' onclick='AJAXaddtocart(\"",$row['nama'],"\")'>Add to cart</button><br><br>";
				}
				mysqli_close($con);
			}
		?>
	</body>
</html>