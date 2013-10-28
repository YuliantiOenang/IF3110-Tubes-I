<?php include "header.php";?>
<?php include "sidebar.php";?>
<article id="featured" class="body">
	<h2>Most Wanted Products</h2>
	<?php
		$query3 = "select * from barang group by kategori";
		$hasil3 = mysql_query($query3,$koneksi);
		$slideshow = 0;
		while($row3 = mysql_fetch_array($hasil3)){
			echo '<h3>'.$row3["kategori"].'</h3><hr>';
			$slideshow++;
			?>
			<div id="slideshow">
			<input type="radio" id="button-1" name="controls" checked="checked"/>
			<label for="button-1"></label>
			<input type="radio" id="button-2" name="controls"/>
			<label for="button-2"></label>
			<input type="radio" id="button-3" name="controls"/>
			<label for="button-3"></label>
			<label for="button-1" class="arrows" id="arrow-1">></label>
			<label for="button-2" class="arrows" id="arrow-2">></label>
			<label for="button-3" class="arrows" id="arrow-3">></label>
			<div id="slideshow-inner">
				<ul id="myslide-<?php echo $slideshow; ?>">
			<?php
			$query4 = "select * from barang where kategori='".$row3["kategori"]."' order by terjual desc limit 0,3";
			$hasil4 = mysql_query($query4,$koneksi);
			$slideid=1;
			while($row4 = mysql_fetch_array($hasil4)){
			?>
				<li id ="slide-<?php echo $slideid; ?>">
					<img src="<?php echo $row4['gambar']; ?>"/>
					<div class="description">
						<input type="checkbox" id="show-description-<?php echo $slideid; ?>"/>
                        <label for="show-description-<?php echo $slideid; ?>" class="show-description-label">#<?php echo $slideid; ?></label>
                        <div class="description-text">
                            <h2><?php echo $row4['nama']; ?></h2>
                            <p><?php echo $row4['keterangan']; ?></p>
                        </div>
					</div>
				</li>
			<? 
			$slideid++;
			}
			echo "</ul></div></div>";
		}
			/*echo '<h3>'.$row3["kategori"].'</h3><hr>';
			$query4 = "select * from barang where kategori='".$row3["kategori"]."' order by terjual desc limit 0,3";
			$hasil4 = mysql_query($query4,$koneksi);
			while($row4 = mysql_fetch_array($hasil4)){
				echo '<div class="view">';
				echo '<img src="'.$row4["gambar"].'" width="318" height="238"/>';
				echo '<div class="mask">';
				echo '<h2><a href="detailbarang.php?id='.$row4["id"].'">'.$row4["nama"].'</a></h2>';
				echo '<p>Harga: '.$row4["harga"].'</p>';
				echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
				echo '<input type="number" name="quantity" min="0"><input type="submit" value="Beli!"></form>';
				echo '</div></div>';
			}*/
	?>
</article><!-- /#featured -->
<script>
function playSlide(id,delay,geser,counter,i){
	document.getElementById(id).style.left=geser+"%";
	i++;
	if(counter==0){
		if(i==3){ counter=1; i=1; geser+=100; }else{ geser-=100; }
	}else{
		if(i==3){ counter=0; i=1; geser-=100; }else{ geser+=100; }
	}
	setTimeout("playSlide('"+id+"',"+delay+","+geser+","+counter+","+i+")",delay);
}
function startAllSlide(){
	var kanan = true;
	for(var i=1;i<=<?php echo $slideshow; ?>;i++){
		if(kanan){
			playSlide("myslide-"+i,3000,-100,0,1);
		}else{ 
			playSlide("myslide-"+i,3000,-200,1,1);
		}
		kanan=!kanan;
	}
}
startAllSlide();
</script>
<?php include "footer.php";?>
</div>
</body>
</html>