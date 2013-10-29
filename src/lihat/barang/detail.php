<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Home </title>
    <script src="<?=SITE_ROOT.NAME_ROOT;?>/js/ajaxShop.js" type="text/javascript"></script>
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
        Jumlah Barang : <input type="text" name="qty" size="8" id="qty_<?=$data['id'];?>" value="0"><br>
        Deskripsi Tambahan : <textarea name="deskripsi_tambahan" id="deskripsi_tambahan"></textarea><br>
		<input type="button" value="Tambah ke Cart" id="beli" onClick="onAddToCart('<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/addCart', <?=$data['id'];?>); return false;">
	<?php	
	}
	?>
<?php
}
?>
</body>
</html>
