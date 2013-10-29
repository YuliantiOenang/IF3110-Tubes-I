<!DOCTYPE>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Detail</title>
	<link href="style.css" type="text/css" rel="stylesheet"></link>
	<link href="menu.css" type="text/css" rel="stylesheet"></link>
</head>
<body>
	
	<div class="frame_halaman">
	<div class="header1">
	</div>
	<div id="menu">
	<ul>
	<li>
		<a href="index.php?page=tesKategori">Daftar Kategori</a>
	</li>
	<li>
		<a href="index.php?page=tesMobil">Kembali</a>
	</li>
	</ul></div><table class="halaman" border="0">
	<img src="barang/<?php echo ($_GET['cek']); ?>.jpg" alt="gambar" class="gbr"   />
	<tr>
		<td class="kiri"><h3> <?php echo ($_GET['cek']); ?></h3>
		<h5> Rp 200.000,- </h5>
		
		Untuk ngetes deskripsi barang.
	
</td>
</tr>
</table>
<div class="footer">Copy rigth &copy; NAE 2011<br>
</div>	
</div>
</body>
</html> 
<style type="text/css">
body {
	background-image: url('<?php echo "Background.jpg";?>');
}
.gbr{
	width: 230px;
    height: 230px;
    position: relative;
    left: 50;
	top : 10;
}
</style>