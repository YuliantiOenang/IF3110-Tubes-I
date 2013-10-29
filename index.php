<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class="opening">
		<div class="ocontent">
			<img src="img/logo.png" width='336px' height='149px'>
		</div>
	</div>
	<div class = "page_container">
		<?php 
			session_start();
			$_SESSION['state'] = 2;
			
			if($_SESSION['state'] == 1){
				include ("../templates/header.php");
				include ("../templates/navigation.php"); 
			}
			else{
				include ("templates/header.php");
				include ("templates/navigation.php"); 
			}
		?>
		
		<div class = "container">
			<?php
				//buat kategori 1
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				// Check connection
				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				//check data posted
				for($i=1;$i<=5;$i++){
					$result = mysqli_query($con,"SELECT * FROM transaksi, inventori, kategori WHERE transaksi.id_inventori = inventori.id_inventori AND inventori.id_kategori = kategori.id_kategori AND inventori.id_kategori = ".$i." ORDER BY transaksi.jumlah DESC LIMIT 3");
					$found = false;
					echo "<div "; 
					if($i != 1) 
						echo "class='popular'"; 
					echo ">";
						while($row = mysqli_fetch_array($result)){
							if(!$found){
								echo "<h2>Barang Populer untuk Kategori: ". $row['nama_kategori']."</h2><br/>";
							}
							$found = true;
							echo "<div class='goods'>"	;
							echo "<img width = 170px src='img/". $row['gambar']. "'> <br/>";
							echo "<a href='details.php?gid=". $row['id_inventori'] ."'>". $row['nama_inventori'] . " </a><br/>";
							echo "Rp ".$row['harga'].",00 <br/>";
							echo "</div>";
						}
					echo "</div>";
				}
			?>
			<!--<p>Toko Imba</p>-->
		</div>
		
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
	</div>
	<?php
		include ("templates/mask.php");
	?>
</html>