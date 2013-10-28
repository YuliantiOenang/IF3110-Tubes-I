<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Search </title>
	<link href="<?=SITE_ROOT.NAME_ROOT;?>/css/table.css" rel="stylesheet"/>
</head>
<body>

<h3> Hasil Pencarian untuk keyword <font color="green"><?=$data['nama_barang'];?></font> </h3>

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
	 <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/cari?page=<?=$i;?>&search=<?=$data['nama_barang']?>&kategori=<?=$data['kategori'];?>&harga=<?=$data['harga'];?>&operator=<?=$data['operator'];?>"> <?=$i;?> </a>
<?php
}
?>

</body>
</html>
