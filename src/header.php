<div id="header"> 
	<div id="logo">
		<a href="dashboard.php"><img src="images/logo.png" title="Home" alt="Home"/></a>
	</div>
	<div id="bukan_logo">
		<div class="menu" id="kategori1">
			<a href="halamanbarang.php?q=beras">Beras</a>
		</div>
		<div class="menu" id="kategori2">
			<a href="halamanbarang.php?q=gula">Gula</a>
		</div>
		<div class="menu" id="kategori3">
			<a href="halamanbarang.php?q=daging">Daging</a>
		</div>
		<div class="menu" id="kategori4">
			<a href="halamanbarang.php?q=sayur">Sayur</a>
		</div>
		<div class="menu" id="kategori5">
			<a href="halamanbarang.php?q=bumbu">Bumbu</a>
		</div>
		<div class = "menu" id = "search">
			 <form name="search" method="post" action="search.php">
				 Search for: <input type="text" name="find" /> in 
				 <Select NAME="field">
				 <Option VALUE="nama">Nama Barang</option>
				 <Option VALUE="kategori">Kategori</option>
				 <Option VALUE="harga">Harga</option>
				 </Select>
				 <input type="hidden" name="searching" value="yes" />
				 <button type="submit" id="searchbutton">Cari</button>
			 </form>
		</div>
	</div>
	<div id="button_keluar">
		<input type=button value="Log Out" onClick="window.location.href='logout.php'">
	</div>
</div>