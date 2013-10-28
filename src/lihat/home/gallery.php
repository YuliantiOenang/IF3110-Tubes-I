<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Gallery </title>
	<link href="<?=SITE_ROOT.NAME_ROOT;?>/css/table.css" rel="stylesheet"/>
</head>
<body>

<form action="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/cari" method="GET">
<h3>Cari Barang</h3>
Nama : <input type="text" name="search"><br>
Kategori : 
<select name="kategori">
<option value="">--Pilih--</option>
<?php
while ($row = mysql_fetch_object($data['listCateg']))
{
?>
<option value="<?=$row->name;?>"><?=$row->name;?></option>
<?php
}
?>
</select>
<br>
Harga : <input type="text" name="harga"><br>
<input type="radio" name="operator" value="L" checked>Less than
<input type="radio" name="operator" value="E">Equal to
<input type="radio" name="operator" value="G">Greater than
<br>
<input type="submit"><br>
</form>
<hr>

<div id="table">
<div class="header">
	<span class="kolom satu">Nama Barang</span>
	<span class="kolom dua">Gambar Barang</span>
	<span class="kolom tiga">Harga</span>
	<span class="kolom empat">Stok</span>
	<span class="kolom lima">Aksi</span>
</div>
<?php
while($row = mysql_fetch_object($data['barang']))
{
?>
	<div class="baris">
		<span class="kolom satu"><?=$row->nama_barang;?></span>
		<span class="kolom dua"><img src="<?=SITE_ROOT.NAME_ROOT;?>/gambar_barang/<?=$row->gambar;?>" height=100px width=100px></span>
		<span class="kolom tiga"><?=$row->harga_barang;?></span>
		<?php
		if ($row->jumlah_barang > 0)
		{
		?>
		<span class="kolom empat"><?=$row->jumlah_barang;?></span>
		<span class="kolom lima"><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/beli?id=<?=$row->id;?>">Beli</a>
		    <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/detail?id=<?=$row->id;?>">Detail</a>
		</span>
		<?php
		}
		else
		{
		?>
			<span class="kolom empat">Habis</span>
			<span class="kolom lima">
			  <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/detail?id=<?=$row->id;?>">Detail</a>
			</span>
		<?php		
		}
		?>
	</div>
<?php
}
?>
</div>

Halaman : 
<?php
for ($i=0; $i<$data['jmlPage']; $i++)
{
?>
	 <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$i;?>"> <?=$i;?> </a>
<?php
}
?>

</body>
</html>
