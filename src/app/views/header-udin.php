<!--header-->
	<div id="header">
		<div>
			<nav> <!-- untuk link-->
				<center>
					<ul>
						<li><a href="#">Logo</a></li> <!-- ganti dengan gambar logo ya-->
						<li><a href="index.php">Home</a></li> <!-- # = masuk ke HOME-->
						
						<li><a href="#">Kategori Barang</a> <!-- # = masuk ke katogori barang-->
							<ul>
								<li><a href="product/category/1">Elektronik</a></li>
								<li><a href="product/category/3">Sandang</a></li>	
								<li><a href="product/category/2">Otomotif</a></li>									
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