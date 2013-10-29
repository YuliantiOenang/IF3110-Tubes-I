<!-- Search Result -->
<!DOCTYPE html>
<html>
	<head>
		<title>
			Hasil Penelusuran
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<h1>Hasil Pencarian</h1>
			<?php
			
			$arr = array();
			$size = 0;
			
			function DisplayBarang(){
				if (isset($_POST['name'])) $name = $_POST['name'];
				if (isset($_GET['name'])) $name = $_GET['name'];
			
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='" . $name . "'");
				if (mysqli_num_rows($result) > 0){
					$GLOBALS['size'] = mysqli_num_rows($result);
					while ($row = mysqli_fetch_assoc($result)) {
						$GLOBALS['arr'][] = $row;
					}
					echo "Page ";
					for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
						$link = "search.php?&name=".$name."&page=".$i;
						echo "<a href='".$link."'>" .$i . "   </a>";
					}
					$startidx = ($GLOBALS['page']-1)*10;
					for ($j=$startidx; $j<$GLOBALS['size']; $j++){
						if ($j >= $startidx+10) break;
						$row = $GLOBALS['arr'][$j];
					//while($row = mysqli_fetch_array($result)) {
					    ?>
						<div id="itemlist">
						<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
						<br/>
						<?php
						$link = "merchandise.php?id=".$row['ID'];
						echo "<a href='".$link."'>" .$row['Nama'] . "</a>";
						echo "<br/><br/>";
						$link2 = "search.php?name=".$name."&id=".$row['Nama'];
						?>
						<form name="forminput" action="<?php echo $link2; ?>" method="post">
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
						<?php }
					echo "Page ";
					for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
						$link = "search.php?&name=".$name."&page=".$i;
						echo "<a href='".$link."'>" .$i . "   </a>";
					}
				}
				
				$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Kategori='" . $name . "'");
				if (mysqli_num_rows($result) > 0){
					$GLOBALS['size'] = mysqli_num_rows($result);
					while ($row = mysqli_fetch_assoc($result)) {
						$GLOBALS['arr'][] = $row;
					}
					echo "Page ";
					for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
						$link = "search.php?&name=".$name."&page=".$i;
						echo "<a href='".$link."'>" .$i . "   </a>";
					}
					$startidx = ($GLOBALS['page']-1)*10;
					for ($j=$startidx; $j<$GLOBALS['size']; $j++){
						if ($j >= $startidx+10) break;
						$row = $GLOBALS['arr'][$j];
					//while($row = mysqli_fetch_array($result)) {
					    ?>
						<div id="itemlist">
						<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
						<br/>
						<?php
						$link = "merchandise.php?id=".$row['ID'];
						echo "<a href='".$link."'>" .$row['Nama'] . "</a>";
						echo "<br/><br/>";
						$link2 = "search.php?name=".$name."&id=".$row['Nama'];
						?>
						<form name="forminput" action="<?php echo $link2; ?>" method="post">
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
						<?php }
					echo "Page ";
					for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
						$link = "search.php?&name=".$name."&page=".$i;
						echo "<a href='".$link."'>" .$i . "   </a>";
					}
				}
				
				if (is_numeric($name)){
					$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Harga='" . $name . "'");
					if (mysqli_num_rows($result) > 0){
						$GLOBALS['size'] = mysqli_num_rows($result);
						while ($row = mysqli_fetch_assoc($result)) {
							$GLOBALS['arr'][] = $row;
						}
						echo "Page ";
						for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
							$link = "search.php?&name=".$name."&page=".$i;
							echo "<a href='".$link."'>" .$i . "   </a>";
						}
						$startidx = ($GLOBALS['page']-1)*10;
						for ($j=$startidx; $j<$GLOBALS['size']; $j++){
							if ($j >= $startidx+10) break;
							$row = $GLOBALS['arr'][$j];
						//while($row = mysqli_fetch_array($result)) {
							?>
							<div id="itemlist">
							<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
							<br/>
							<?php
							$link = "merchandise.php?id=".$row['ID'];
							echo "<a href='".$link."'>" .$row['Nama'] . "</a>";
							echo "<br/><br/>";
							$link2 = "search.php?name=".$name."&id=".$row['Nama'];
							?>
							<form name="forminput" action="<?php echo $link2; ?>" method="post">
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
							<?php }
						echo "Page ";
						for ($i=1; $i<=($GLOBALS['size']+9)/10; $i++){
							$link = "search.php?&name=".$name."&page=".$i;
							echo "<a href='".$link."'>" .$i . "   </a>";
						}
					}
				}
				
				mysqli_close($con);
			}
			
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
			DisplayBarang();
			
			?> 
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>