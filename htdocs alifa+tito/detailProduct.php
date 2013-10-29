<html>

<head>
	<link href="styledetail.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="stylesearch.css" rel="stylesheet" type="text/css" media="screen" />
	<div id="divsearch" >
		<form id="formuser" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<span id="tabuser">
				<a href="registrasi.php" style="text-decoration:none;" > <span id="menuuser1" > <b>REGISTER &nbsp; &nbsp;  </b> </span> </a> &nbsp; &nbsp; 
				<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menuuser2" > <b>LOGIN  &nbsp; &nbsp;   </b> </span> </a>  &nbsp; &nbsp;
				<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menuuser3" > <b>PROFIL  &nbsp; &nbsp;  </b> </span> </a>  &nbsp; &nbsp; 
			</span>
			<span> <img id="logotroli" src="images/cartlogo.png" height="22" width="22" > </span> &nbsp;
			<span id="cartmenu" > <b>Produk :    </b> </span> 
			<span id="cartmenu" > <b>Rp ,-  </b> </span> 
		</form> 
		<form id="formsearch" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<span> <a href="index.php"> <img id="logo" src="images/logo10.gif" height="60" width=auto > <br/>  <br/> </span>
			<span id="tabkategori">
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;" > <span id="menukategori1" > <b>BERAS &nbsp; &nbsp;  |</b> </span> </a> &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori2" > <b>ROTI  &nbsp; &nbsp;  | </b> </span> </a>  &nbsp; &nbsp;
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori3" > <b>DAGING SEGAR   &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori4" > <b>DAGING OLAHAN  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori5" > <b>SAYUR  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori6" > <b>BUAH </b> </span> </a>  &nbsp; &nbsp;
			</span> </br><br/>
			<input id="namasearch" name="namabarang" placeholder="Nama Barang" type="text"  /> 
			<select  id="kat" value="Kategori" name="kategori">
				<option value="" >Kategori</option>
				<option value="beras">Beras</option>
				<option value="roti">Roti</option>
				<option value="daging segar">Daging Segar</option>
				<option value="daging olahan">Daging Olahan</option>
				<option value="buah">Buah</option>
				<option value="sayur">Sayur</option>
			</select>
			<select id="harga" value="harga" name="harga">
				<option value="0" >Harga</option>
				<option value="1">< Rp 10.000</option>
				<option value="2">Rp 10.000 <= harga < Rp 25.000 </option>
				<option value="3">Rp 25.000 <= harga <  Rp 50.000 </option>
				<option value="4">Rp 50.000 <= harga <  Rp 75.000 </option>
				<option value="5">>= Rp 75.000</option>
			</select>
			<input id="tombol2"" name="search" type="submit" value="search" /> 
		</form>
	</div>
</head>

<body>
	
<?php
	include ("functions.php");
	session_start();
	if(isset($_GET['nama']))
		$nama = $_GET['nama'];
    else echo 'session problem';
	
	$con=mysqli_connect("localhost","root","","tubesweb");
	
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	/* Get data. */
	$tbl_name="barang";		//table's name
	$sql = "SELECT * FROM $tbl_name WHERE namabarang = '$nama'";
	$result = mysqli_query($con,$sql);

	echo "<br>";
	while($row = mysqli_fetch_array($result))
	{
		echo '
		<div id="divdetail">
		<form id="formdetail" name="formregistrasi" >  <br/>
		<img src="',$row['path'],'" width="150" height="150" />
		<br> <b>',$row['namabarang'],'</b>
		<br>Harga	&nbsp;:',convert_to_rupiah($row['harga']),' IDR <br>Kategori &nbsp;	:',$row['kategori'],'
		<br> <br>Spesifikasi: <br>', $row['keterangan'],'<br><br> Keterangan (Tambahan Permintaan):<br><br> 
		<input align="left" type="text" style="width:350px;height:100px;" name="ket" value=""> <br><br>
		</form
		</div>';
	
	
		
?>
	<form action="shoppingcart.php" method="post">
		<?php
			// store session data
			$_SESSION['id']=$row['id'];
		?>
		<input type="number" style="width:45px;height:20px;" name="sum" min="1">
		<button type="submit" style="width:45px;height:30px;">beli</button>
		<br />
	</form
<?php
	}
?>

</body>
</html>