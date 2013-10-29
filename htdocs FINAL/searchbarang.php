<html>
<?php
require_once('header.php'); ?>

<?php

// Create connection
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");

if(isset($_GET['namabarang'])){

	//username
    $namabarang=strtolower(mysql_real_escape_string($_GET['namabarang']));
	$nama=$_GET['namabarang'];
	$katbarang=strtolower(mysql_real_escape_string($_GET['kategori']));
	$kategori=$_GET['kategori'];
	$harga=strtolower(mysql_real_escape_string($_GET['harga']));
	if ($harga=="0") {
		$bawah=0;
		$atas=99999999;
	} else if ($harga=="1") {
		$bawah=0;
		$atas=10000;
	} else if ($harga=="2") {
		$bawah=10000;
		$atas=25000;
	} else if ($harga=="3") {
		$bawah=25000;
		$atas=50000;
	} else if ($harga=="4") {
		$bawah=50000;
		$atas=75000;
	} else if ($harga=="4") {
		$bawah=75000;
		$atas=99999999;
	}
	
	if (!empty($_GET['namabarang'])) {
		$query="select * from barang where UPPER(namabarang) like UPPER('%$nama%') and kategori like '%$kategori%' and harga>=$bawah and harga <$atas";
	} else {
		$query="select * from barang where kategori like '%$kategori%' and harga>=$bawah and harga <$atas";
	}
    $res=mysql_query($query, $con) or die ('Unable to run query:'.mysql_error());
    $count=mysql_num_rows($res);
    $HTML='';
	
    if($count == 0 ){
		$HTML='tidak ada hasil ditemukan';
		echo $HTML;
    } else{
		$i=0;
		while($result = mysql_fetch_array( $res )) { 
			$path = $result['path']; 
			
			if ($i%2) {
			echo '<div id="divresult">
				<form id="formresult" name="formregistrasi" >
				
				
				
				
				<img src=', $path, ' height="100" width="100" > </br>
				<span id="resultnama"> <a href="detailProduct.php?id=',$result['id'] ,'"> <b>' ,$result['namabarang'], '</b> </a>   </span> </br>
	
				<span id=resultharga> ' ,$result['harga'], ' IDR </span> </br>
				</form>
				</div>';
			} else {
				echo '<div id="divresult">
				<form id="formresult2" name="formregistrasi" >
				<img src=', $path, ' height="100" width="100" > </br>
				<span id="resultnama"> <a href="detailProduct.php?id=',$result['id'] ,'"> <b>' ,$result['namabarang'], '</b> </a>   </span> </br>

				<span id=resultharga> ' ,$result['harga'], ' IDR </span> </br>
				</form>
				</div>';
			}
			$i=$i+1;
		
		} 	
	}
}

mysql_close($con);

?>  