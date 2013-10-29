<?php 
	session_start();
	session_destroy();

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
								<li><a href="#">Home</a></li> <!-- # = masuk ke HOME-->
								
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
			
			<form name="loginForm" method="post" action="checklogin.php">
				<div>
					<input name="myusername" type="text" id="id" placeholder="username" />
				</div>
				
				<div>
					<input name="mypassword" type="password" id="pass" placeholder="password" />	
				</div>			
				<input type="submit" name="Submit" value="Login"/>
			</form>	
				<br>
				Belum Punya Account ? <a href="#"> DAFTAR </a>
			<a class="close" href="#close"></a>
		</div>	
		<!-- END HEADER-->
		
		<!--content-->
		<div class="populer">
				<center>
					<div id="popularFont">
						<p>BARANG TERPOPULER</p>
					</div>
				<ul>
					<li>															
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=1)) AND category=1");					
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product.php?product_id=' . $row['product_id'] . '>';
								echo '<img src=' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>										
					</li>						
					
					<li>
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=2)) AND category=2");							
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product.php?product_id=' . $row['product_id'] . '>';
								echo '<img src=' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>				
					</li>
					
					<li> 				
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=3)) AND category=3");							
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product.php?product_id=' . $row['product_id'] . '>';
								echo '<img src=' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>				
					</li>
				</ul>
			</center>
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
