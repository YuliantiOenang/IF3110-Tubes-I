<?php
	include("connect.php");
	include("functions.php");
?>

<html>
<head>
	<title>Home</title>
</head>
<?php
	$hasilBeras = mysql_query("select distinct * from order_detail where kategori='beras' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
	$hasilRoti = mysql_query("select distinct * from order_detail where kategori='roti' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
	$hasilDS = mysql_query("select distinct * from order_detail where kategori='daging segar' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
	$hasilDO = mysql_query("select distinct * from order_detail where kategori='daging olahan' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
	$hasilBuah = mysql_query("select distinct * from order_detail where kategori='buah' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
	$hasilSayur = mysql_query("select distinct * from order_detail where kategori='sayur' order by quantity desc limit 3") or die("select hasil beras"."<br/><br/>".mysql_error());
?>
<body>

<div style="float: left; width: 30%;">
<ul>
		<h1>Barang Terlaris</h1>
		1. Kategori Beras<br>
		<?php
			while($row = mysql_fetch_array($hasilBeras)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
		
		<br>2. Kategori Roti<br>
		<?php
			while($row = mysql_fetch_array($hasilRoti)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
		
		<br>3. Kategori Daging Segar<br>
		<?php
			while($row = mysql_fetch_array($hasilDS)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
		
		<br>4. Kategori Daging Olahan<br>
		<?php
			while($row = mysql_fetch_array($hasilDO)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
		
		<br>5. Kategori Buah<br>
		<?php
			while($row = mysql_fetch_array($hasilBuah)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
		
		<br>6. Kategori Sayur<br>
		<?php
			while($row = mysql_fetch_array($hasilSayur)){
				$id=$row['productid'];
				$result=mysql_query("select * from barang where id=$id") or die("select path"."<br/><br/>".mysql_error());
				while($row2 = mysql_fetch_array($result))
					echo '<img src= "'.$row2['path'].'" width="150" height="150" />';
		?>
				<br><a href="detailProduct.php?id=<?php echo $row['productid'] ?>"><?php echo $row['productName'] ?></a><br><br>
		<?php
			}
		?>
</ul>
</div>
<div style="float: right; width: 70%;">
<ul>
	<br>Aturan Belanja:
	<br>1. Pengguna yang ingin berbelanja harus memiliki akun terlebih dahulu, jika sudah, pilih login dan jika belum pilih registrasi
	<br>2. Pengguna yang ingin berbelanja harus memasukkan informasi kartu kredit, jika tidak, transaksi tidak akan direalisasikan
	<br>HAPPY SHOPPING!
</ul>
</div>
	
</body>
</html>