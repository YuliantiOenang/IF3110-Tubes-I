<!DOCTYPE HTML>
<html>
<head><title>Detail Barang</title></head>

<?php include "header.php";?>
<?php include "sidebar.php"; ?>

<article id="featured" class="body">
	<?php
	if(isset($_GET['id'])){ $id=$_GET['id']; }
	include "koneksi.inc.php";
	$query2 = "select * from barang where id='$id'";
	$hasil2 = mysql_query($query2,$koneksi);
	while($row = mysql_fetch_array($hasil2)){
		echo '<img src="'.$row["gambar"].'" width="318" height="238"/>';
		echo '<h2>'.$row["nama"].'</h2>';
		echo '<p>Keterangan : '.$row["keterangan"].'</p>';
		echo '<form>';
		echo '<pre>Masukkan tambahan permintaan			<input type="text"></pre>';
		echo '<pre>Masukkan jumlah barang yang akan dibeli		<input type="number" name="quantity" min="1"></pre>';
		echo '<input type="submit" value="Beli!"></form>';
	}
	?>
</article>

<?php include "footer.php";?>

</div>
</body>
</html>