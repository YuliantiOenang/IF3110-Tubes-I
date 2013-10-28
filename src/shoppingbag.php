<!-- Shopping Bag Page -->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>
			Tas Belanja
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<h1>Tas Belanja</h1>
			<?php
				if (isset($_GET['nama'])) $nama = $_GET['nama'];
				
				if (isset($_POST['submit'])){
					if ($_POST['jumlah'] > 0) $_SESSION["$nama"] = $_POST['jumlah'];
					else echo "Jumlah tidak sesuai..";
				}
				
				if (isset($_POST['delete'])){
					unset($_SESSION["$nama"]);
				}
				
				foreach ($_SESSION as $key=>$value)
				{
					$set = 1;
					?>
					<div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
					<img src="res/<?php echo $key.".jpg"; ?>" alt=<?php echo $key; ?> width=150 height=200>
					<br/>
					<?php
					echo $key;
					echo "<br/>";
					$link2 = "shoppingbag.php?nama=".$key;
					
					$con=mysqli_connect("localhost","root","","ruserba");
					// Check connection
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }

					$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");

					$row = mysqli_fetch_array($result);

					mysqli_close($con);
					
					?>
					<form name="forminput" action="<?php echo $link2; ?>" method="post">
					Jumlah: <input type="number" value=<?php echo $value; ?> name="jumlah">
					<input type="submit" value="UPDATE" name="submit">
					<input type="submit" value="DELETE" name="delete">
					</form>
					<pre><?php echo 'Jumlah : '.$value; ?><br/><br/></pre>
					<pre><?php echo 'Harga : '.$value * $row['Harga']; ?><br/><br/></pre>
					</div>
					<?php
				} 
			?>
			<?php
			if (isset($set)){
			?>
			<form name="formsubmit" action="<?php echo $link2; ?>" method="post">
			<input type="submit" value="BUY ALL!" name="submitall">
			</form>
			<?php
			} else {
				echo "Tas Belanja kosong..";
			}
			?>
			
			<?php
				if (isset($_POST['submitall'])){
					
					$success = 0;
					
					foreach ($_SESSION as $key=>$value)
					{
						$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }

						$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");

						$row = mysqli_fetch_array($result);
						
						if ($row['Banyak'] < $value){
							echo "Stok ".$key." tidak tersedia..";
							unset($success);
							break;
						} else {
							$success = $success + $value * $row['Harga'];
						}

						mysqli_close($con);
					}
					
					if (isset($success)){
						echo "Pembelian barang berhasil!";
						echo "<br/>";
						echo "Total Harga : ".$success;
						echo "<br/>";
						
						// update database..
						
						//
					}
				}
			?>
			
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>