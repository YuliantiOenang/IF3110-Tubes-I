<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');
	
	$js_file = 'scripts/product.js';
	$page_title = 'Detail produk';

	// Include begin.
	require_once('begin.php');
?>
<?php
databaseConnect();
$product = getProductData($_GET['product_id']);
?>

<p id="gambar">
<img src="images/products/<?php echo $product['nama_gambar']; ?>" alt="gambar_product" />
</p>
<div id="detail_product">
<p>
<h2> <?php echo $product['nama_barang']; ?> </h2>
</p>
<p>
<?php echo $product['deskripsi']; ?>
<br></br>
</p>
<p>
Harga: Rp<?php echo $product['harga']; ?>,- / <?php echo $product['satuan']; ?>
</p>
<p>
Sisa stok: <?php echo $product['jumlah_stok']; ?>
</p>
<p>
Jumlah beli: <input id="jumlahproduk" name="text" name="jumlah_product"></input>
</p>
<p>
Keterangan: 
<br></br>
<textarea name="comment" id="keteranganproduk" rows="5" cols="40"></textarea>
</p>
<p>
<button id="buybutton" type="submit" >Beli</button>
</p>
</div>

<?php
	require_once('end.php');
?>
