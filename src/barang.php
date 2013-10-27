<?php

include("lib/transaksi_lib.php");
include("lib/search_lib.php");

if(isset($_POST["ajax"])){
	$response = handleTransactionAjax();
	if ($response != null){
		exit($response);
	}
	
	exit();	
}else if(!isset($_GET["id"])){
	header("Location: index.php");
}



$barang = searchId($_GET["id"]);
if ($barang == null) header("Location: index.php");

?>
<!DOCTYPE html />
<html>
<head>
<title>Barang</title>
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/barang.css" />

<script src="js/ajax.js"></script>
<script src="js/transaction.js"></script>
</head>
<body>
<?php
	include("header.php");
?>
<?php
	echo '<div class="barang">';
	echo '<div class="row title">'.$barang->nama.'</div>';
	echo '<div class="row"><img class="imgbarang" src="image/'.$barang->id.'.jpg" /></div>';
	echo '<div class="row harga"><div class="cell33">Harga</div><div class="cell66">: Rp. '.$barang->harga.'</div></div>';
	echo '<div class="row kategori"><div class="cell33">Kategori</div><div class="cell66">: '.$barang->kategori.'</div></div>';
	echo '<div class="row"><div class="cell33">Deskripsi</div><div class="cell66">:</div></div>';
	echo '<div class="row deskripsi">'.$barang->deskripsi.'</div>';
	echo '</div>';
	
	echo '<input type="button" value="tambahkan ke keranjang" onclick="addCart('.$barang->id.')"/>';
?>



</body>
</html>