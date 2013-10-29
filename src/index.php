<?php include "header.php";?>
<?php include "sidebar.php";?>
<link rel="stylesheet" href="css/halamanbarang.css" type="text/css" />
<link rel="stylesheet" href="css/imageslider.css" type="text/css" />
<article id="featured" class="body">
	<h2>Most Wanted Products</h2>
	<div id="slideshow">
			<label class="arrows" id="arrow-1" onclick="autoPlaySlide.slidetoleft();"><</label>
			<label class="arrows" id="arrow-2" onclick="autoPlaySlide.slidetoright();">></label>
			<div id="slideshow-inner">
				<ul id="myslide">
	<?php
		$query3 = "select * from barang group by kategori";
		$hasil3 = mysql_query($query3,$koneksi);
		$slideid = 0;
		while($row3 = mysql_fetch_array($hasil3)){
			$rank=1;
			$query4 = "select * from barang where kategori='".$row3["kategori"]."' order by terjual desc limit 0,3";
			$hasil4 = mysql_query($query4,$koneksi);
			while($row4 = mysql_fetch_array($hasil4)){
			$slideid++;
			?>
				<li id ="slide-<?php echo $slideid; ?>">
					<img src="<?php echo $row4['gambar']; ?>"/>
					<div class="description">
						<input type="checkbox" id="show-description-<?php echo $slideid; ?>"/>
                        <label for="show-description-<?php echo $slideid; ?>" class="show-description-label">
							<?php echo $row3["kategori"]." #".$rank; ?>
						</label>
                        <div class="description-text">
                            <a href="detailbarang.php?id=<?php echo $row4['id']; ?>"><?php echo $row4['nama']; ?></a>
                            <p><?php echo $row4['keterangan']; ?></p>
                        </div>
					</div>
				</li>
			<?php 
			$rank++;
			}
		}
	?>
	</ul></div></div>
</article><!-- /#featured -->
<script>
autoPlaySlide = {
	delay:3000,
	geser:0,
	counter:0,
	i:1,
	init: function(){
		document.getElementById("myslide").style.width="<?php echo $slideid; ?>00%";
	},
	play: function(){
		document.getElementById("myslide").style.left=autoPlaySlide.geser+"%";
		if(autoPlaySlide.counter==0){
			if(autoPlaySlide.i==<?php echo $slideid; ?>){ 
				autoPlaySlide.counter=1; 
				autoPlaySlide.geser+=100; 
			}else{ autoPlaySlide.geser-=100; }
		}else{
			if(autoPlaySlide.i==1){ 
				autoPlaySlide.counter=0; 
				autoPlaySlide.geser-=100; 
			}else{ autoPlaySlide.geser+=100; }
		}
		if(autoPlaySlide.counter==0){ autoPlaySlide.i++; }else{ autoPlaySlide.i--; }
		setTimeout("autoPlaySlide.play()",autoPlaySlide.delay);
	},
	slidetoleft: function(){
		autoPlaySlide.geser+=100;
		autoPlaySlide.i--;
		document.getElementById("myslide").style.left=autoPlaySlide.geser+"%";	
	},
	slidetoright: function(){
		autoPlaySlide.geser-=100;
		autoPlaySlide.i++;
		document.getElementById("myslide").style.left=autoPlaySlide.geser+"%";	
	}
}
autoPlaySlide.init();
autoPlaySlide.play();
</script>
<?php include "footer.php";?>
</div>
</body>
</html>