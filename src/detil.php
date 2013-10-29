<?php include 'header.php'; ?>
		<script src="AJAXaddtocart.js"></script>
	</head>
<?php include 'middle.php'; ?>
		<h2><?php echo ucfirst($_GET['nama']); ?></h2>
		<?php
			echo "<img src=\"/tubes1/images/",$_GET['nama'],".jpg\" alt='gambar' width='400' height='300'><br>";
			echo "Nama: ",$_GET['nama'],"<br>";
		?>
		<?php include '/deskripsi/'.$_GET['nama'].'.php'; ?>
		<?php
			echo "<br><br>Harga: ",$_GET['harga'],"<br>";
			echo "Banyak: <input type='text' name='qty' id='",$_GET['nama'],"'><br>";
			echo "Catatan: <input type='text'><br>";
			echo "<button type='button' onclick='AJAXaddtocart(\"",$_GET['nama'],"\")'>Add to cart</button><br><br>";
		?>
	</body>
</html>