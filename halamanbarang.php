<!DOCTYPE HTML>
<html>
<head><title>Halaman Barang</title></head>

<?php include "header.php";?>

<article id="featured" class="body">
	<div class="view">
		<img src="images/1.jpg" width="318" height="238"/>
		<div class="mask">
			<h2><a href="#">Tahu</a></h2>
			<p>Harga: Rp 1000,00</p>
			<form>Masukkan jumlah yang akan dibeli:
			<input type="number" name="quantity" min="0">
			<input type="submit">
			</form>
		</div>
	</div>
	<div class="view">
		<img src="images/2.jpg" width="318" height="238"/>
		<div class="mask">
			<h2><a href="#">Tempe</a></h2>
			<p>Harga: Rp 1500,00</p>
			<form>Masukkan jumlah yang akan dibeli:
			<input type="number" name="quantity" min="0">
			<input type="submit">
			</form>
		</div>
	</div>
</article>

<?php include "footer.php";?>

</div>
</body>
</html>