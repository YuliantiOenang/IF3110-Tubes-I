<!-- Shopping Bag Page -->
<!DOCTYPE html>
<html>
	<head>
		<title>
			Tas Belanja
		</title>
		<script src="js/transaction.js"></script>
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
						if (mysqli_num_rows($result) > 0){
							$row = mysqli_fetch_array($result);
								
							if ($row['Banyak'] < $value){
								echo "Stok ".$key." tidak tersedia..";
								unset($success);
								break;
							} else {
								$success = $success + $value * $row['Harga'];
							}
						}
						mysqli_close($con);
					}
					
					if (isset($success)){
						
						//
						$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						// cek credit card..
						$result2 = mysqli_query($con,"SELECT * FROM Have WHERE IdName='".$_SESSION['usr']."'");
						if (mysqli_num_rows($result2) > 0){
						// ada! update database
							$row2 = mysqli_fetch_array($result2);
							// update database..
							foreach ($_SESSION as $key=>$value)
							{
								$con=mysqli_connect("localhost","root","","ruserba");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }

								$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");
								if (mysqli_num_rows($result) > 0){
									$row = mysqli_fetch_array($result);
									$temp = $row['Banyak'] - $value;
									mysqli_query($con,"UPDATE Merchandise SET Banyak=". $temp ." WHERE Nama='".$key."'");

									unset($_SESSION["$key"]);
								}
								mysqli_close($con);
							}
							echo "Pembelian barang berhasil!";
							echo "<br/>";
							echo "Total Harga : ".$success;
							echo "<br/>";
						} else {
						// ga ada! ke register_card deh
							header("Location: register_card.php");
							die();
						}
					}
				}
				
				foreach ($_SESSION as $key=>$value)
				{
					
					$con=mysqli_connect("localhost","root","","ruserba");
					// Check connection
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }

					$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");
					if (mysqli_num_rows($result) > 0){
						?>
						<div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
						<img src="res/<?php echo $key.".jpg"; ?>" alt=<?php echo $key; ?> width=150 height=200>
						<br/>
						<?php
						$link2 = "shoppingbag.php?nama=".$key;
						echo $key;
						echo "<br/>";
						$set = 1;
						$row = mysqli_fetch_array($result);
						
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
					mysqli_close($con);
				} 
			?>
			<?php
			if (!isset($_SESSION['usr'])){
				echo "Silakan login terlebih dahulu";
			} else if (isset($set)){
				$link2 = "shoppingbag.php";
			?>
			<form name="formsubmit" action="<?php echo $link2; ?>" method="post">
			<input type="submit" value="BUY ALL!" name="submitall"></input>
			</form>
			<?php
			} else {
				echo "Tas Belanja kosong..";
			}
			?>
			
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>