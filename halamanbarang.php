<!DOCTYPE HTML>
<html>
<head><title>Halaman Barang</title></head>

<?php include "header.php";?>
<?php include "sidebar.php";?>
<article id="featured" class="body">
	<?php
	if(isset($_GET['kategori'])){ $kategori=$_GET['kategori']; }
	echo "<h3>Barang-barang $kategori yang kami jual</h3><hr>";
	include "koneksi.inc.php";
	$query2 = "select * from barang where kategori='$kategori'";
	$hasil2 = mysql_query($query2,$koneksi);
	while($row = mysql_fetch_array($hasil2)){
		echo '<div class="view">';
		echo '<img src="'.$row["gambar"].'" width="318" height="238"/>';
		echo '<div class="mask">';
		echo '<h2><a href="detailbarang.php?id='.$row["id"].'">'.$row["nama"].'</a></h2>';
		echo '<p>Harga: '.$row["harga"].'</p>';
		echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
		echo '<input type="number" name="quantity" min="0"><input type="submit" value="Beli!"></form>';
		echo '</div></div>';
	}
	?>
</article>

<?php include "footer.php";?>

</div>
</body>
</html>