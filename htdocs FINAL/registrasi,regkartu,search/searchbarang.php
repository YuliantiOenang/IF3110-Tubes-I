<?php

// Create connection
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");


if(isset($_POST['namabarang']) && !empty($_POST['namabarang'])){

	//username
    $namabarang=strtolower(mysql_real_escape_string($_POST['namabarang']));
	$nama=$_POST['namabarang'];
	$katbarang=strtolower(mysql_real_escape_string($_POST['kategori']));
	$kategori=$_POST['kategori'];
	$harga=strtolower(mysql_real_escape_string($_POST['harga']));
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
	
	
    $query="select * from barang where UPPER(namabarang) like UPPER('%$nama%') and kategori like '%$kategori%' and harga>=$bawah and harga <$atas";
    $res=mysql_query($query, $con) or die ('Unable to run query:'.mysql_error());
    $count=mysql_num_rows($res);

    $HTML='';
	
	echo'

HALAMAN SEARCH

<form name="formsearch" action="searchbarang.php" method="post" tag="registrasi">
	<div align="left">
		Nama Barang : <input name="namabarang" type="text"  /> 
		<select value="Kategori" name="kategori">
			<option value="" >Kategori</option>
			<option value="beras">Beras</option>
			<option value="roti">Roti</option>
			<option value="daging segar">Daging Segar</option>
			<option value="daging olahan">Daging Olahan</option>
			<option value="beras">Buah</option>
			<option value="roti">Sayur</option>
		</select>
		<select value="harga" name="harga">
			<option value="0" >Harga</option>
			<option value="1">< Rp 10.000</option>
			<option value="2">Rp 10.000 <= harga < Rp 25.000 </option>
			<option value="3">Rp 25.000 <= harga <  Rp 50.000 </option>
			<option value="4">Rp 50.000 <= harga <  Rp 75.000 </option>
			<option value="5">>= Rp 75.000</option>
		</select>
	<input name="search" type="submit" value="search" /> 
	</div>
</form>


';
	
    if($count == 0 ){
		$HTML='tidak ada hasil ditemukan';
		echo $HTML;
    } else{
		while($result = mysql_fetch_array( $res )) 
		{ 
		echo $result['namabarang']; 
		echo " "; 
		echo $result['kategori']; 
		echo "<br>"; 
		echo $result['harga']; 
		echo "<br>"; 
		$path = $result['path']; 
		echo '<img src=', $path, ' height="100" width="100" >';
		echo "<br>"; 
		} 	
	}
	
}

mysql_close($con);

?>  