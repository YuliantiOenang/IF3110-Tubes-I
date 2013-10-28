<?php 
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>RuSerBa Online</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="index.js"></script>
		<script src="calendar.js"></script>
		<link href="calendar.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
				<?php
					include("header.php");
				?>
		</div>
		<div id="index-page-body">
		<div id="index-body">
		<div id="left-body">
			White Meth:
			<div id=\"user-result\">
				<?php
				echo "
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					";
			?>
			</div>
			
			Blue Meth:
			<div id=\"user-result\">
				<?php
				echo "
					<a href=\"profile.php\"><img src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					<a href=\"profile.php\"><img src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					";
			?>
			</div>
			
			Purple Meth:
			<div id=\"user-result\">
				<?php
				echo "
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					";
			?>
			</div>
			
			Methylamine:
			<div id=\"user-result\">
				<?php
				echo "
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					";
			?>
			</div>
			
			Pseudo:
			<div id=\"user-result\">
				<?php
				echo "
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					<a href=\"profile.php\"><img id=\"photo\" src=\"../image/dummy.jpg\" width=\"100\" height=\"120\"/></a>
					";
			?>
			</div>
		</div>
		<div id="right-body">
			Mekanisme Pembelian:</br>
			1.Mendaftar sebagai user.</br>
			2.Daftarkan kartu kredit.</br>
			3.Pilih barang yang dibeli serta jumlahnya.</br>
			4.Konfirmasi transaksi.</br>
			5.Barang terbeli.</br>
		</div>
		</div>
		</div>
	</body>
</html>
