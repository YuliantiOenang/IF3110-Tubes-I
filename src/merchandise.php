<!-- Detail of A Merchandise -->
<!DOCTYPE html>
<html>
	<head>
		<script src="js/transaction.js"></script>
		<title>
			Detail Barang
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
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
					<form name="input" action="<?php echo $link; ?>" onsubmit="return validateForm2()" method="post">
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
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>