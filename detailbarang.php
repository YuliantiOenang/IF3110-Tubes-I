<!DOCTYPE HTML>
<html>
<head><title>Detail Barang</title></head>

<?php include "header.php";?>
<?php include "sidebar.php"; ?>

<article id="featured" class="body">
	<img src="images/1.jpg" width="318" height="238"/>
	<h2>Tahu</h2>
	<p>Tahu adalah makanan yang terbuat dari kedelai.</p>
	
	<form>
		<pre>Masukkan tambahan permintaan			<input type="text"></pre>
		<pre>Masukkan jumlah barang yang akan dibeli		<input type="number" name="quantity" min="1"></pre>
		<input type="submit" value="Beli!">
	</form>
</article>

<?php include "footer.php";?>

</div>
</body>
</html>