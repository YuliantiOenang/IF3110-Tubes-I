<?php
	include("lib/transaksi_lib.php");
	include("lib/search_lib.php");
	
	if(isset($_POST["ajax"])){
		$res = handleSearchAjax();
		
		if($res!=null){
			exit($res);
		}
		
		exit();
	}else if(!isset($_GET["cat"])){
		header("Location: index.php");
		exit();
	}
	
	$list = searchCategory($_GET["cat"], 0);
	if (count($list) == 0){
		header("Location: index.php");
		exit();
	}	
?>

<!DOCTYPE html />
<html>
<head>
<title>Kategori: <?php echo $_GET["cat"]?></title>
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/category.css" />

<script>
<?php echo "var category = '".$_GET["cat"]."';" ?>
</script>


<script src="js/ajax.js"></script>
<script src="js/transaction.js"></script>
<script src="js/category.js"></script>

</head>
<body>
<div class="outer">
	<?php include("header.php"); ?>
	<div class='content'>
	<?php echo "<h3>Kategori: ".$_GET["cat"]."</h3>"; ?>
	<div id='cattable' class='table'>
	<?php
		foreach($list as $barang){
			echo '<div class="row rowbarang">';
			
			echo '<div class="cell33 imgcell" ><img class="imgbarang" src="image/'.$barang->id.'.jpg" /></div>';
			echo '<div class="cell66"><div class="table">';
			echo '<div class="row title"><a href="barang.php?id='.$barang->id.'" />'.$barang->nama.'</a></div>';
			echo '<div class="row">Rp. '.formatCurrency($barang->harga).'</div>';
			echo '<div class="row">'.$barang->deskripsi.'</div>';
			echo '<div class="row"><input type="button" value="Tambahkan ke Keranjang" class="main-button-small" onclick="addCart('.$barang->id.')" /></div>';
			echo '</div></div>';
			
			echo '</div>';
		}
	?>
	</div>
	<div id='infobottom'></div>
	
	</div>
</div>
</body>
</html>