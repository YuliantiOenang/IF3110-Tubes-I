<!-- List of Merchandises In Category -->
<!DOCTYPE html>
<html>
	<head>
		<script src="js/transaction.js"></script>
		<title>
			Kategori Barang
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
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
					<form name="forminput" action="<?php echo $link2; ?>" onsubmit="return validateForm1()" method="post">
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
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>