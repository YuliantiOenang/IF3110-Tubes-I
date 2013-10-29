<?php
if (isset($_POST['data'])) $tabel = json_decode($_POST['data'],true);
include "koneksi.inc.php";
	$contents = array();
	for($i=0;$i<sizeof($tabel);$i++){
		if($tabel[$i]>0){
			$sqlx="SELECT jumlah from barang WHERE id = ".($i);
			$resultx = mysql_query($sqlx,$koneksi);
			$rowx = mysql_fetch_array($resultx);
			$jmlx = intval($rowx['jumlah']) - intval($tabel[$i]);
			$deltax = intval($rowx['terjual']) + intval($tabel[$i]);
			$sql="UPDATE barang SET jumlah = '$jmlx' WHERE id = '$i'";
			$result = mysql_query($sql,$koneksi);
			$row = mysql_fetch_array($result);
			$sql2="UPDATE barang SET terjual = '$deltax' WHERE id = '$i'";
			$result2 = mysql_query($sql2,$koneksi);
			$row2 = mysql_fetch_array($result2);
			//array_push($contents, array("id"=>$i,"nama"=>$row['nama'],"harga"=>$row['harga'],"jumlah"=>$row['jumlah'],"dibeli"=>$tabel[$i]),"terjual"=>$deltax); 
		}
	}
	//echo json_encode($contents);
?>