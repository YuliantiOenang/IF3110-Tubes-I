<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Lihat Belanjaan </title>
    <link href="<?=SITE_ROOT.NAME_ROOT;?>/css/table.css" rel="stylesheet"/>
	<link href="<?=SITE_ROOT.NAME_ROOT;?>/css/profile.css" rel="stylesheet"/>
    <link href="<?=SITE_ROOT.NAME_ROOT;?>/css/mainstyle.css" rel="stylesheet"/>
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
	<div class="basiccontent" id="largecontent">
		Ini laman belanjaan<br>
			<table border = 1>
			<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Quantity</th>
			<th>Kartu Kredit</th>
			<th>Tanggal Pembelian</th>
			<th>Deskripsi Tambahan</th>
			<th>Status</th>
		</tr>
		<?php
		$i = 0;
		while ($row = mysql_fetch_object($data['listBarang']))
		{
			$i++;
		?>
		<tr>
			<td><?=$i;?></td>
			<td><?=$row->nama_barang;?></td>
			<td><?=$row->jumlah_barang;?></td>
			<td><?=$row->card_number;?></td>
			<td><?=$row->tgl_pembelian;?></td>
			<td><?=$row->deskripsi_tambahan;?></td>
			<td>
			<?php
			if ($row->status == 0)
			{
			?>
				<font color="red">Barang belum dibayar / dibeli</font>
			<?php
			}
			else
			{
			?>
				<font color="green">Barang sudah dibayar / dibeli</font>
			<?php
			}
			?>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
        
	Klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/beli"> ini </a> untuk melakukan pembayaran<br>
	Klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/barang/"> ini </a> untuk belanja kembali<br>
	</div>
</body>
</html>
