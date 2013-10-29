<?php
	$con=mysqli_connect("localhost","root","","tubessatu");
	if(mysqli_connect_errno()){
			echo "Gagal Buka DB" . msqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">		
	</head>
		
	<body> 
		<!--header-->
		<div>
			<div id="header">
				<div>
					<nav> <!-- untuk link-->
						<center>
							<ul>
								<li><a href="#">Logo</a></li> <!-- ganti dengan gambar logo ya-->
								<li><a href="index.php">Home</a></li> <!-- # = masuk ke HOME-->
								
								<li><a href="#">Kategori Barang</a> <!-- # = masuk ke katogori barang-->
									<ul>
										<li><a href="#">Elektronik</a></li>
										<li><a href="#">Sandang</a></li>	
										<li><a href="#">Otomotif</a></li>									
									</ul>
								</li>
									
								<li><a href="#login_form">Login</a></li>							
								<li>
									<center>
										<form id="search" action="listProduct.php">
											<input name="keyword" type="text" size="40" placeholder="Cari barang..." />
										</form>
									</center>
									
								<!--
									<center><form id="cariBarang">					
										<input type="type" placeholder="Pencarian">
									</form></center> -->
								</li>
								<li><a href="#" id="keranjang">Keranjang</a></li>	
							</ul>
						</center>
					</nav>
				</div>
			</div>
		</div>				
		
		<!-- BAGIAN POP UP MESSAGE-->
		<a href="#x" class="overlay" id="login_form"></a>
		<div class="popup">
			<h2>Selamat Datang disitus kami</h2>
			<p>Silahkan masukan username dan password</p>
			
			<div>
				<input type="text" id="login" placeholder="username" />
			</div>
			
			<div>
				<input type="password" id="login" placeholder="password" />	
			</div>			
			<input type="button" value="Log In"/>			
			
			<a class="close" href="#close"></a>
		</div>	
		<!-- END HEADER-->
		
		<!--content = detail barang-->
		<div class="detailBarang">						
				<ul>
					<center>
						<li> 						
							<img src="
								<?php
									$result = mysqli_query($con,"SELECT * FROM product WHERE product_id = " . $_GET['product_id']);									
									while($row = mysqli_fetch_array($result))
									{	
										echo $row['image_link'];
									}						
								?>">						
						</li>
					</center>				
					
					<ul>
						<li>
							<p>
								Nama Barang		<br>							
								Harga Barang	<br>
								Stock			<br>
								Deskripsi		<br>
							</p>
						</li>
						
						<li>
							<p align="justify">
								<?php
									$result = mysqli_query($con,"SELECT * FROM product WHERE product_id = " . $_GET['product_id']);									
									while($row = mysqli_fetch_array($result))
									{	
										echo $row['product_name'] . "<br>";	
										echo $row['price'] . "<br>";
										echo $row['stock_count'] . "<br>";
										echo $row['description'] . "<br>";										
									}						
								?>
							</p>
						</li>
					</ul>
					
					<li>
						<center>
							<button type="button" class="buttonBeli"> BELI </button>
						</center>
					</li>						
				</ul>			
		</div>
		<!--end content-->		
	</body>		
	<!--
	<footer>
		<div id="footer">
			INI FOOTER
		</div>		
	</footer>-->
</html>
