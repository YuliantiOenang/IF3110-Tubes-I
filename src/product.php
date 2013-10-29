<?php include 'header.php'; ?>
		<script src="AJAXaddtocart.js"></script>
	</head>
<?php include 'middle.php'; ?>
		<h2><?php echo ucfirst($_GET['kategori']); ?></h2>
		<form id="sort" action="product.php" method="get">
			Sort : <select name="sort">
				<option value="namaasc" selected>Nama (a-z)</option>
				<option value="namadsc">Nama (z-a)</option>
				<option value="hargaasc">Harga (a-z)</option>
				<option value="hargadsc">Harga (z-a)</option>
			</select>
			<input type="hidden" name="kategori" value="<?php echo $_GET['kategori']; ?>">
			<input type="submit" value="Sort"><br><br>
		</form>
		<?php
			$kategori=$_GET["kategori"];
			$sort=$_GET["sort"];
			$con=mysqli_connect("localhost","root","","ruserba");
			// Check connection
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			// Query from database
			if ($_GET['sort']=="namaasc") {
				$sql = "SELECT * FROM barang WHERE kategori='".$_GET["kategori"]."' ORDER BY nama";
			}
			else if ($_GET['sort']=="namadsc") {
				$sql = "SELECT * FROM barang WHERE kategori='".$_GET["kategori"]."' ORDER BY nama DESC";
			}
			else if ($_GET['sort']=="hargaasc") {
				$sql = "SELECT * FROM barang WHERE kategori='".$_GET["kategori"]."' ORDER BY harga";
			}
			else if ($_GET['sort']=="hargadsc") {
				$sql = "SELECT * FROM barang WHERE kategori='".$_GET["kategori"]."' ORDER BY harga DESC";
			}
			
			//Kode paginasi
			$result=mysqli_query($con,$sql);
			$rows=mysqli_num_rows($result); 
			//Cek pagenum ada/tidak
			if (!(isset($pagenum))) { 
				$pagenum = 1;
			}
			// Tentukan halaman last
			$page_rows = 10;
			$last = ceil($rows/$page_rows);
			// Koreksi jika pagenum di luar range
			if ($pagenum < 1) {
				$pagenum = 1;
			}
			else if ($pagenum > $last) {
				$pagenum = $last; 
			}
			// Range query ke database
			$max = ' limit ' .($pagenum - 1) * $page_rows .',' .$page_rows;
			// Lakukan query sesuai range
			$sql = $sql.$max;
			$result=mysqli_query($con,$sql);

			// Display result
			while ($row = mysqli_fetch_array($result)) {
				$nama=$row['nama'];
				$harga=$row['harga'];
				echo "<img src=\"/tubes1/images/",$row['nama'],".jpg\" alt='gambar' width='400' height='300'><br>";
				echo "Nama: <a href='detil.php?nama=$nama&harga=$harga'>",$row['nama'],"</a><br>";
				echo "Harga: ",$row['harga'],"<br>";
				echo "Banyak: <input type='text' name='qty' id='",$row['nama'],"'>";
				echo "<button type='button' onclick='AJAXaddtocart(\"",$row['nama'],"\")'>Add to cart</button><br><br>";
			}
			
			// Display Paginasi
			echo " --Page $pagenum of $last-- <p>";
			if ($pagenum == 1) {
			}
			else {
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'> <<-First</a> ";
				echo " ";
				$previous = $pagenum-1;
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'> <-Previous</a> ";
			} 
			echo " ---- ";
			if ($pagenum == $last) {
			}
			else {
				$next = $pagenum+1;
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next&keyword=$keyword&kategori=$kategori&harga=$harga'>Next -></a> ";
				echo " ";
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last&keyword=$keyword&kategori=$kategori&harga=$harga'>Last ->></a> ";
			} 
			mysqli_close($con);
		?>
	</body>
</html>