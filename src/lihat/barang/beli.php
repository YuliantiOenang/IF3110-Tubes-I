<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Beli Barang </title>
    <link href="<?=SITE_ROOT.NAME_ROOT;?>/css/table.css" rel="stylesheet"/>
	<link href="<?=SITE_ROOT.NAME_ROOT;?>/css/profile.css" rel="stylesheet"/>
    <link href="<?=SITE_ROOT.NAME_ROOT;?>/css/mainstyle.css" rel="stylesheet"/>
</head>
<body>
<h2>Pembelian Barang</h2>

		<div id="table">
		<div class="header">
			<span class="kolom satu" id="narrowcolumn">No</span>
			<span class="kolom dua">Nama Barang</span>
			<span class="kolom tiga">Quantity</span>
            <span class="kolom empat">Harga Total</span>
			<span class="kolom lima">Deskripsi Tambahan</span>
			<span class="kolom enam">Status</span>

		</div>
		<?php
		$i=0; $total_harga=0;
		while ($row = mysql_fetch_object($data['listBarang']))
		{
			$i++;
            if ($row->status == 0) 
            {
              $total_harga = $total_harga + $row->jumlah_barang * $row->harga_barang;
		?>
		<div class="baris">
			<span class="kolom satu" id="narrowcolumn"><?=$i;?></span>
			<span class="kolom dua"><?=$row->nama_barang;?></span>
			<span class="kolom tiga"><?=$row->jumlah_barang;?></span>
            <span class="kolom empat"><?=$row->jumlah_barang * $row->harga_barang;?></span>
			<span class="kolom lima"><?=$row->deskripsi_tambahan;?></span>
			
			<?php
			if ($row->status == 0)
			{
			?>
				<span class="kolom enam"><font color="red">Barang belum dibayar / dibeli</font></span>
			<?php
			}
			else
			{
			?>
				<span class="kolom enam"><font color="green">Barang sudah dibayar / dibeli</font></span>
			<?php
			}
			?>
			</span>
		</div>
		<?php
            }
		}
		?>
		</div><br>
        
    Total Harga (Yang belum dibeli) : <?=$total_harga;?><br><br>

<form action="" method="POST">
Kartu Kredit :
<select name="kartu">
<?php
while ($row = mysql_fetch_object($data['listCC']))
{
?>
	<option value="<?=$row->id;?>"><?=$row->card_number;?></option>
<?php
}
?>
</select><br>
<input type="submit" value="submit" name="submit" <?php if ($total_harga == 0) echo "disabled"; ?>>
<input type="button" value="back" onClick="history.go(-1);return reset();">
</form>
</body>
</html>
