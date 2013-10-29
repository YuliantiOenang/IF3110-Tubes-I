<?php
	include("lib/search_lib.php");

	if(!isset($_GET['q'])){
		header("Location: index.php");
	}
	
	$entry = $_GET['q'];
	
	$search = searchAll($entry, 0);	
	
	$success = count($search) > 0;
?>

<html>
<head>
<title>Search: <?php echo $entry?></title>
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/category.css" />

<script>
	<?php
		echo "var entry = '".$entry."'; ";
		echo "var loadable = ".($success ? "true" : "false").";\n";
	?>
	var loading = false;
	var page = 0;
</script>

<script src="js/ajax.js"></script>
<script src="js/login.js"></script>
<script src="js/search.js"></script>

</head>
<body>
<div class="outer">
	<?php include("header.php"); ?>
	<div class='content'>
		<h3><?php echo 'Search: "'.$entry.'"'; ?></h3>
		<div class="cattable">
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
	</div>
</div>

</body>
</html>