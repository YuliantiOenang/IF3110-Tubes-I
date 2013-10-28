<html>
<head>
<title>Shooping Bag</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/validasibeli.js"></script>
<?php
	include "config.php";
	session_start();
	$result1 = mysql_query("SELECT * FROM shopping_bag WHERE username='ditra77' and status='Belum Selesai' ");
	if ($result1!=null) {
		$row1 = mysql_fetch_array($result1);
		$id_shopping_bag = $row1['id_shopping_bag'];
		$result2 = mysql_query("SELECT * FROM detail_shopping_bag WHERE id_shopping_bag=$id_shopping_bag");
		$hargatotal=0;
		$i=0;
	}
?>
</head>

<body>
	<div id="container">
		<div id="tab_tengah"> 
			<?php if (mysql_num_rows($result1)>0) { ?>
				<form name="shopping_bag_form" method="post" action="editshoppingbag.php" enctype="multipart/form-data">
					<h3>SHOPPING BAG PENGGUNA <?php echo strtoupper('tes'); ?></h3>
					<div class="detail_shopping_bag">
						<div class="baris">
							<div class="kolom1">
								<label>Nama Barang</label>
							</div>
							<div class="kolom2">
								<label>Harga Satuan</label>
							</div>
							<div class="kolom3">
								<label>Jumlah Dibeli</label>
							</div>
							<div class="kolom4">
								<label>Keterangan</label>
							</div>
						</div>
						<?php while($row2=mysql_fetch_array($result2)) { 
							$id_barang = $row2['id_barang'];
							$result3 = mysql_query("SELECT * FROM barang WHERE id_barang=$id_barang");
							$row3=mysql_fetch_array($result3);
							$stok[$i]=$row3['stok'];
							$hargatotal = $hargatotal + $row3['harga']*$row2['jumlah'];
						?>
							<div class="baris">
								<div class="kolom1">
									<?php echo $row3['nama']; ?>
								</div>
								<div class="kolom2">
									<?php echo $row3['harga']; ?>
								</div>
								<div class="kolom3">
									<input type="text" name="jumlah_beli[]" maxlength="256" value=<?php echo $row2['jumlah']; ?> >
								</div>
								<div class="kolom4">
									<input type="text" name="keterangan[]" maxlength="256" value=<?php echo "'".$row2['keterangan']."'";?> >
								</div>
							</div>
						<?php $i++; } ?>
						<div class="total_harga">
						<div class="kolom1">
							Total Harga :
						</div>
						<div class="kolom2">
							<?php echo $hargatotal; ?>
						</div>
					</div>
					</div>
					<div class="kolom_tombol">
						<input type="submit" name="submit" value="Edit">	
					</div>
					<div class="kolom_tombol">
						<input type="button" name="beli" value="Beli" onClick="parent.location='beli.php'">	
					</div>					
				</form>
			<?php } else { ?>
				<h3>Tidak ada barang yang dibeli</h3>
			<?php } ?>
		</div>
	</div>
</body>
</html>
