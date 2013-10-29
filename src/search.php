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
			
			function DisplayBarang(){
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='" . $_POST['name'] . "'");
				if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result))
				  { ?>
				  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
					<br/>
					<?php
					$link = "merchandise.php?id=".$row['ID'];
					echo "<a href= $link>" .$row['Nama'] . "</a>";
					echo "<br/><br/>";
					$link2 = "category.php?kat=".$row['Kategori']."&id=".$row['Nama'];
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
				}
				
				$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Kategori='" . $_POST['name'] . "'");
				if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result))
				  { ?>
				  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
					<br/>
					<?php
					$link = "merchandise.php?id=".$row['ID'];
					echo "<a href= $link>" .$row['Nama'] . "</a>";
					echo "<br/><br/>";
					$link2 = "category.php?kat=".$row['Kategori']."&id=".$row['Nama'];
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
				}
				
				$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Banyak='" . $_POST['name'] . "'");
				if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result))
				  { ?>
				  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
					<img src="res/<?php echo $row['Nama'].".jpg"; ?>" alt=<?php echo $row['Nama']; ?> width=150 height=200>
					<br/>
					<?php
					$link = "merchandise.php?id=".$row['ID'];
					echo "<a href= $link>" .$row['Nama'] . "</a>";
					echo "<br/><br/>";
					$link2 = "category.php?kat=".$row['Kategori']."&id=".$row['Nama'];
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
				}
				
				mysqli_close($con);
			}
			DisplayBarang();
			?> 
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>