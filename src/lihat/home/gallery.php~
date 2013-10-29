<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Gallery </title>
	<link href="<?=SITE_ROOT.NAME_ROOT;?>/css/table.css" rel="stylesheet"/>
    <link href="<?=SITE_ROOT.NAME_ROOT;?>/css/mainstyle.css" rel="stylesheet"/>
    <script src="<?=SITE_ROOT.NAME_ROOT;?>/js/ajaxShop.js" type="text/javascript"></script>
</head>
<body>
	<div id="header">
		<div id="toplogo">
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home"><img id="logo" src="<?=SITE_ROOT.NAME_ROOT;?>/gambar_barang/logoruserba.jpg" alt="home"></a>
		</div>
		<div id="logintop">
			<?php
				if ($_SESSION['username'] == null)
				{
			?>
			<a href="#login_popup"><strong>Login</strong></a>
			<br><br>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/register"><strong>Register</strong></a>
			<?php
				} else {
			?>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/logout"><strong>Logout</strong></a>
			<br><br>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user"><strong>Profile</strong></a>
			<?php
				}
			?>
			<p id ="search">Cari Barang: <input type="text" size="100"> <input type="submit" value="Search"></p>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/cart"><img id="tasbelanja" src="<?=SITE_ROOT.NAME_ROOT;?>/gambar_barang/tasbelanja.jpg" alt="Tas Belanja"></a>	
		</div>
		<div id="kategori">
			 <p><span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>Sembako</strong></a></span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>Handphone</strong></a></span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>PeralatanElektronik</strong></a></span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>AksesorisKomputer</strong></a></span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>PerabotanRumah</strong></a></span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"><strong>AlatTulis</strong></a></span>
			 <p>
		</div>
	</div>
	<div class="basiccontent" id="giantcontent">
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
		
		Sort By : <br>
		<b> Nama (<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=nama&jenisSort=ASC"> ASC </a>, <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=nama&jenisSort=DESC"> DESC </a>) <br>
		Kategori(<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=kategori&jenisSort=ASC"> ASC </a>,<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=kategori&jenisSort=DESC"> DESC </a>)<br>
		Harga(<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=harga&jenisSort=ASC"> ASC </a>,<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$data['pageOf'];?>&sort=harga&jenisSort=DESC"> DESC </a>)<br>
		</b>

		<div id="table">
		<div class="header">
			<span class="kolom satu">Nama Barang</span>
			<span class="kolom dua">Gambar Barang</span>
			<span class="kolom tiga">Harga</span>
			<span class="kolom empat">Stok</span>
			<span class="kolom lima">Jumlah Beli</span>
			<span class="kolom enam">Aksi</span>
		</div>
		<?php
		while($row = mysql_fetch_object($data['barang']))
		{
		?>
			<div class="baris">
				<span class="kolom satu"><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/detail?id=<?=$row->id;?>"><?=$row->nama_barang;?></a></span>
				<span class="kolom dua"><img src="<?=SITE_ROOT.NAME_ROOT;?>/gambar_barang/<?=$row->gambar;?>" height=100px width=100px></span>
				<span class="kolom tiga"><?=$row->harga_barang;?></span>
				<?php
				if ($row->jumlah_barang > 0)
				{
				?>
				<span class="kolom empat"><?=$row->jumlah_barang;?></span>
				<span class="kolom lima"><input type="text" name="qty" size="8" id="qty_<?=$row->id;?>" value="0"></span>
				<span class="kolom enam">
				<input type="button" value="Tambah ke Cart" id="beli" onClick="onAddToCart('<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/addCart', <?=$row->id;?>); return false;">
				</span>
				<?php
				}
				else
				{
				?>
					<span class="kolom empat">Habis</span>
					<span class="kolom lima"></span>
					<span class="kolom enam"><input type="button" value="Tambah ke Cart" id="beli" onClick="" disabled="true"></span>
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
	 <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/index?page=<?=$i;?>&sort=<?=$data['sort'];?>&jenisSort=<?=$data['jenisSort'];?>"> <?=$i;?> </a>
<?php
}
?>
	</div>
</body>
</html>
