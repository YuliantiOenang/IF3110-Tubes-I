<?php
include "koneksi.inc.php";
if(isset($_GET['sort'])){ $sort=$_GET['sort']; }else{ $sort="nama"; }
if(isset($_GET['page'])){ $page=($_GET['page']-1)*10; }else{ $page=0; }
if(isset($_GET['kategori'])){ 
	$kategori=$_GET['kategori']; 
	$query2 = "select * from barang where kategori='$kategori' order by $sort limit $page,10";
}else{
	$kategori=null;
	$query2 = "select * from barang order by $sort limit $page,10";
}
$hasil2 = mysql_query($query2,$koneksi);
while($row = mysql_fetch_array($hasil2)){
	echo '<div class="view">';
	echo '<img src="'.$row["gambar"].'" width="318" height="238"/>';
	echo '<div class="mask">';
	echo '<h2><a href="detailbarang.php?id='.$row["id"].'">'.$row["nama"].'</a></h2>';
	echo '<p>Harga: '.$row["harga"].'</p>';
	echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
	echo '<input type="number" name="quantity" min="0" id="qty2"><input type="button" value="Beli!" id="buy" onclick="tempBuy('.$row["id"].',qty2.value)"></form>';
	echo '</div></div>';
}
sleep(1);
?>