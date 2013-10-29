<?php 
if(isset($_GET['cari'])){ $cari = $_GET['cari']; }
if(isset($_GET['suggest'])){ $suggest = $_GET['suggest']; }
include "koneksi.inc.php";
$query = "select * from barang";
$hasil = mysql_query($query,$koneksi);
$p = -1;
$a = array();
while($row = mysql_fetch_array($hasil)){
	$p++;
    $a[$p] = array($row["id"],$row["nama"],$row["gambar"],$row["kategori"],$row["harga"]);
}
if (strlen($cari) > 0){
	$hint="";
	$acc =-1;
	for($i=0; $i<count($a); $i++)
	{
		if (strtolower($cari)==strtolower(substr($a[$i][1],0,strlen($cari))) || strtolower($cari)==strtolower(substr($a[$i][3],0,strlen($cari)))
			|| strtolower($cari)==$a[$i][4])
		{
			$acc++;
			if($suggest=="true"){
				$temp = '<li><a href="detailbarang.php?id='.$a[$i][0].'">'.$a[$i][1].'</a></li>';
				$hint=$hint.$temp;
			}else{
				echo '<div class="view">';
				echo '<img src="'.$a[$i][2].'" width="318" height="238"/>';
				echo '<div class="mask">';
				echo '<h2><a href="detailbarang.php?id='.$a[$i][0].'">'.$a[$i][1].'</a></h2>';
				echo '<p>Harga: '.$a[$i][4].'</p>';
				echo '<form action="shoppingbag.php" method="GET">Masukkan jumlah yang akan dibeli: ';
				echo '<input type="number" name="quantity" min="0"><input type="submit" value="Beli!"></form>';
				echo '</div></div>';
			}
		}
    }
}
//output the response
echo $hint;

?>