<!DOCTYPE HTML>
<html>
<head><title>Halaman Barang</title></head>

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
	var currentpage=1;
	var shopping_bag =[];
	var addTo = '{ "Cart" : []}';
	var sum_item = parseInt(<?php 
		if($kategori){ $hasil3 = mysql_query("select count(*) from barang where kategori='$kategori'",$koneksi); }
		else{ $hasil3 = mysql_query("select count(*) from barang",$koneksi); }
		$num =  mysql_fetch_array($hasil3);
		echo $num["count(*)"]-1;?>);
	var maxpage= (sum_item/10+1);
	var isi,buyitem;
	initialize_bag();
	
	function tempBuy(id_brg,qtty){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				if((parseInt(shopping_bag[id_brg])+parseInt(qtty))<=(parseInt(xmlhttp.responseText))){
						//alert("Barang berhasil ditambahkan ke keranjang.");
						doInCart(1,id_brg,qtty);}
				else
						alert("Pembelian tidak bisa dilakukan. Jumlah barang yang tersisa hanya ada "+(parseInt(xmlhttp.responseText)-parseInt(shopping_bag[id_brg]))+" buah.");
			}
		}
		xmlhttp.open("POST","ajaxbeli.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("id="+id_brg+"&qtt="+qtty);
	}

	function initialize_bag(){
		for(var i=0;i<=sum_item+1;i++){
			shopping_bag[i]=0;
		}
	}

	function generateSideBar(tab_shopping){
		var xmlhttp;
		var content_sb ="<div><span>NO.</span><span  style='margin-left:10px'>nama brg</span><span  style='margin-left:20px'>qtt</span><span  style='margin-left:10px'>price</span></div>";
		var itt =0;
		var total=0;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				isi = JSON.parse(xmlhttp.responseText);
			for(var k=0;k<isi.length;k++){
					itt++;
					total+=isi[k].dibeli*isi[k].harga;
					content_sb += "<div id=k"+isi[k].id+"><span>"+itt+"</span><span  style='margin-left:20px'>"+isi[k].nama+"</span><span  style='margin-left:20px'>"+isi[k].dibeli+"</span><span  style='margin-left:10px'>"+isi[k].harga+"</span><a href='javascript:doInCart(0,"+isi[k].id+",0)'><img src='images/cancel.png' width=15 height=15/></a></div>";	
			}
			content_sb += "<hr/><div><pre>Total     :       Rp "+total+",-</pre></div><input type='button' value='Bayar Transaksi' id='deal' onclick='buy()'>";
				document.getElementById("sidebar").innerHTML=content_sb;
			}else{
				//alert("PIKACHU!");
				//document.getElementById("indikator").innerHTML="<img src='images/loader.gif'><p>Memuat barang-barang yang lain...</p>";
			}
		}
		xmlhttp.open("POST","fillsidebar.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("data="+JSON.stringify(tab_shopping));
	}

	function buy(){
		var r=confirm("Anda yakin mau memroses transaksi?");
		if (r==true)
		  {
		var report ="";
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				alert("LOMPAT KE ATAP, TRANSAKSI BERHASIL!");
				document.getElementById("sidebar").innerHTML="Silakan pilih barang belanjaan Anda! :)";
			}
		}
		xmlhttp.open("POST","buyprocess.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("data="+JSON.stringify(shopping_bag));	
	}
	}

	function doInCart(type,id,qtty){
		if(type==0){//cancel
			shopping_bag[id]=0;
			isi.splice(id,1);
			var elmt = document.getElementById("k"+id);
			elmt.innerHTML ="";
		}else if(type==1)
			shopping_bag[id]+=parseInt(qtty);
		generateSideBar(shopping_bag);
	}

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