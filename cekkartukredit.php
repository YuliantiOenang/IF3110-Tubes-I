<?php
if(isset($_POST['username'])){
	$username = $_POST['username']; 
}else{
	echo "error";
}
include "koneksi.inc.php";
$perintah = "select * from kartu_kredit where owner = '".$username."'";
$hasil = mysql_query($perintah,$koneksi);
if(mysql_num_rows($hasil)>0){
	$row = mysql_fetch_array($hasil);
	echo $row['card_number'];
}else{
	echo "notregistered";
}
?>