	<body>
		<!--Header's body-->
		<div id="logo">
			<a href="index.php"><img src="logo.jpg" alt="RuSerBa" width="150" height="100"></a>
		</div>
		<form id="search" action="search.php" method="get">
			Nama : <input type="search" name="keyword"><br>
			Kategori : <select name="kategori">
				<option value="beras" selected>Beras</option>
				<option value="daging">Daging</option>
				<option value="ikan">Ikan</option>
				<option value="sayur">Sayur</option>
				<option value="buah">Buah</option>
			</select><br>
			Harga : <select name="harga">
				<option value="<10000" selected>< 10000</option>
				<option value="10000-50000">10000 - 50000</option>
				<option value=">50000">> 50000</option>
			</select><br>
			<input type="submit" value="Search"><br><br>
		</form>
		<div id="account">
			<script>
				renderAccount();
			</script>
		</div>
		<ul id="kategori">
			<li><a href="product.php?kategori=beras&sort=namaasc">Beras</a>
			<li><a href="product.php?kategori=daging&sort=namaasc">Daging</a>
			<li><a href="product.php?kategori=ikan&sort=namaasc">Ikan</a>
			<li><a href="product.php?kategori=sayur&sort=namaasc">Sayur</a>
			<li><a href="product.php?kategori=buah&sort=namaasc">Buah</a>
		</ul>