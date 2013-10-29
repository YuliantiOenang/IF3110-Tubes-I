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
			$arr = array();
			$size = 0;
			
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

				if (mysql_num_rows($result) > 10){
					while($row = mysqli_fetch_array($result))
					  {
					  $link = "category.php?kat=".$row['Kategori'];
					  echo "<a href= $link>" .$row['Kategori'] . "</a>";
					  echo "<br>";
					  }
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
				$GLOBALS['size'] = mysqli_num_rows($GLOBALS['result']);
				while ($row = mysqli_fetch_assoc($GLOBALS['result'])) {
					$GLOBALS['arr'][] = $row;
				}
				echo "Page ";
				for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
					$link = "category.php?kat=".$GLOBALS['kat']."&type=".$GLOBALS['type']."&page=".$i;
					echo "<a href='".$link."'>" .$i . "   </a>";
				}
				$startidx = ($GLOBALS['page']-1)*10;
				for ($j=$startidx; $j<$GLOBALS['size']; $j++){
					if ($j >= $startidx+10) break;
					$row = $GLOBALS['arr'][$j];
					?>
					<div id="itemlist">
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
					<br/>
					<?php
					$link = "merchandise.php?id=".$row['ID'];
					echo "<a href='".$link."'>" .$row['Nama'] . "</a>";
					echo "<br/><br/>";
					$link2 = "category.php?kat=".$row['Kategori']."&id=".$row['Nama'];
					?>
					<?php
					echo "<form name='forminput' action='".$link2."' method='post'>";
					?>
					<?php
					if (isset($_SESSION['usr'])){
					?>
					Jumlah: <input type="number" name="jumlah">
					<input type="submit" value="BUY!">
					<?php
					}
					?>
					</form>
					<pre><?php echo 'Harga : '.$row['Harga']; ?><br/><br/></pre>
					</div>
					<?php
				}
				echo "Page ";
				for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
					$link = "category.php?kat=".$GLOBALS['kat']."&page=".$i;
					echo "<a href='".$link."'>" .$i . "   </a>";
				}
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
			//print_r($_POST);
			if (isset($_GET['kat'])) $GLOBALS['kat'] = $_GET['kat'];
			if (isset($_GET['id'])) $GLOBALS['id'] = $_GET['id'];
			if (isset($_GET['page'])) $GLOBALS['page'] = $_GET['page'];
			else $GLOBALS['page'] = 1;
			if (isset($_POST['jumlah'])){
				if ($_POST['jumlah'] > 0){
					if (isset($_SESSION["$id"])) $_SESSION["$id"] = $_SESSION["$id"] + $_POST['jumlah'];
					else $_SESSION["$id"] = $_POST['jumlah'];
					echo $_POST['jumlah']." ".$id." dimasukkan ke shopping bag.. <br/>";
				} else echo "Jumlah tidak sesuai.. <br/>";
			}
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