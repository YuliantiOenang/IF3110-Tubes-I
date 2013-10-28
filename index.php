<?php include "header.php";?>
<?php include "sidebar.php";?>
<article id="featured" class="body">
	<h2>Featured Product</h2>
	<?php
		$query3 = "select * from barang order by terjual desc limit 0,3";
		$hasil3 = mysql_query($query3,$koneksi);
		while($row3 = mysql_fetch_array($hasil3)){
			echo '<div class="view">';
			echo '<img src="'.$row3["gambar"].'" width="318" height="238"/>';
			echo '<div class="mask">';
			echo '<h2><a href="detailbarang.php?id='.$row3["id"].'">'.$row3["nama"].'</a></h2>';
			echo '<p>Harga: '.$row3["harga"].'</p>';
			echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
			echo '<input type="number" name="quantity" min="0"><input type="submit" value="Beli!"></form>';
			echo '</div></div>';
		}
	?>
</article><!-- /#featured -->
<?php include "footer.php";?>
</div>
</body>
</html>