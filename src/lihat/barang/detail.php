<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Home </title>
</head>
<body>
<b>Detail Barang</b><br>
<?php
while($row = mysql_fetch_object($data['detail']))
{
?>
	Gambar : <img src="<?=$row->gambar;?>"><br>
	Nama Barang : <?=$row->nama_barang;?><br>
	Keterangan : <?=$row->keterangan;?><br>
	Harga Barang : <?=$row->harga_barang;?><br>
	Kategori : <?=$row->name;?><br>
	<?php
	if ($row->jumlah_barang > 0)
	{
	?>
		Stok : <?=$row->jumlah_barang;?><br>
		<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/beli?id=<?=$data['id'];?>">Beli Barang</a>
	<?php	
	}
	?>
<?php
}
?>
</body>
</html>
