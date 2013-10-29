<?php
	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	$page_title = 'RuSerBa - Halaman utama';
	$css_file = 'styles/browse_product.css';

	// Include begin.
	require_once('begin.php');

	// Include custom library.
	require_once('category_function.php');
?>
<?php
	$catlst = getCategory();
	echo '<h1>Produk dengan Pembelian Terbanyak</h1>';
	foreach ($catlst as $cat)	{
		echo '<h2>' . $cat['nama_kategori'] . '</h2>';

		// Membuat konfigurasi search.
		$search = array();
		$search['search_category_id'] = $cat['id_kategori'];
		$search['sort_id'] = ORDERBY_SOLDQTY;
		$search['sort_method'] = SORT_DESCENDING;

		$reslst = getProductSearchResult($search);

		//var_dump($reslst);

		echo '<div class="browseproduct">';
		if ($reslst != null)	{
			foreach ($reslst as $res)	{
				echo '<div>' . getProductBrowseIndex($res) . '</div>';
			}
		} else {
				echo '<p>Tidak ada data.</p>';
		}
		echo '</div>';
	}
?>
<?php
	require_once('end.php');
?>