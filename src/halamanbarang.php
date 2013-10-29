<!DOCTYPE HTML>
<html>
<head><title>Halaman Barang</title></head>
<link rel="stylesheet" href="css/halamanbarang.css" type="text/css" />
<?php include "header.php";?>
<?php include "sidebar.php";?>
<article id="featured" class="body">
	<?php
	if(isset($_GET['sort'])){ $sort=$_GET['sort']; }else{ $sort="nama"; }
	if(isset($_GET['page'])){ $page=($_GET['page']-1)*10; }else{ $page=0; }
	if(isset($_GET['kategori'])){ 
		$kategori=$_GET['kategori']; 
		$query2 = "select * from barang where kategori='$kategori' order by $sort limit $page,10";
	}else{
		$kategori=null;
		$query2 = "select * from barang order by $sort limit $page,10";
	}
	echo "<h3>Barang-barang $kategori yang kami jual</h3><hr>";
	if(isset($_GET['kategori'])){ 
		echo "<div style='text-align:right'>Sort by <a href='halamanbarang.php?kategori=$kategori&sort=nama'>Name</a> | <a href='halamanbarang.php?kategori=$kategori&sort=harga'>Harga</a></div>";
	}else{
		echo "<div style='text-align:right'>Sort by <a href='halamanbarang.php?sort=nama'>Name</a> | <a href='halamanbarang.php?sort=harga'>Harga</a></div>";
	}
	include "koneksi.inc.php";
	$hasil2 = mysql_query($query2,$koneksi);
	while($row = mysql_fetch_array($hasil2)){
		echo '<div class="view">';
		echo '<img src="'.$row["gambar"].'" width="318" height="238"/>';
		echo '<div class="mask">';
		echo '<h2><a href="detailbarang.php?id='.$row["id"].'">'.$row["nama"].'</a></h2>';
		echo '<p>Harga: '.$row["harga"].'</p>';
		echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
		echo '<input type="number" name="quantity" min="0" id="qty"><input type="button" value="Beli!" id="buy" onclick="tempBuy('.$row["id"].',qty.value)"></form>';
		echo '</div></div>';
	}
	?>
	<center id="indikator"></center>
</article>
<?php include "footer.php";?>
<!-- Paginasi halaman dengan auto-generated content -->
<script>	
	function getcontent(page){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("featured").innerHTML+=xmlhttp.responseText;
				document.getElementById("indikator").innerHTML="";
			}else{
				document.getElementById("indikator").innerHTML="<img src='images/loader.gif'><p>Memuat barang-barang yang lain...</p>";
			}
		}
		<?php if($kategori){ echo 'xmlhttp.open("GET","ajaxbarang.php?page="+page+"&kategori='.$kategori.'&sort='.$sort.'",true);'; }
		else{ echo 'xmlhttp.open("GET","ajaxbarang.php?page="+page+"&sort='.$sort.'",true);'; } ?>
		xmlhttp.send();
	}
	window.onscroll = function() {
		if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			if(currentpage<maxpage){
				currentpage++;
				getcontent(currentpage);
			}
		}
	};
</script>
</div>
</body>
</html>