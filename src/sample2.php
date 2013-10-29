<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	$css_file = 'styles/browse_product.css';
	$js_file = 'scripts/sample2.js';
	$page_title = 'Sebuah Judul';

	// Include begin.
	require_once('begin.php');
?>
<div class="browseproduct">
<?php
	require_once('db.php');
	databaseConnect();
	$product = getProductData(9);
	echo getProductBrowse($product);
?>
</div>
<?php
	require_once('end.php');
?>
