<?php
	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	// Redirect user jika tidak ada category_id.
	if (!isset($_GET['category_id'])) header('Location: index.php');

	// Set kategori.
	$category_id = $_GET['category_id'];

	databaseConnect();
	$category = getCategoryData($category_id);

	// Redirect user jika tidak ada category_id tidak valid.
	if (is_null($category)) header('Location: index.php');

	$category_name = $category['nama_kategori'];

	$page_title = 'RuSerBa - Daftar kategori ' . $category_name;
	$css_file = 'styles/browse_product.css';

	// Include begin.
	require_once('begin.php');

	// Include custom library.
	require_once('category_function.php');
?>
<?php
	echo '<h1>' . $category_name . '</h1>';

	// Membuat konfigurasi search.
	$search = array();
	$search['search_category_id'] = $category_id;
	$search['sort_id'] = ORDERBY_PRODUCTNAME;
	$search['sort_method'] = SORT_ASCENDING;
	$search['count'] = 10;

	$reslst = getProductSearchResult($search);

	//var_dump($reslst);

	echo '<div class="browseproduct">';
	if ($reslst != null)	{
		foreach ($reslst as $res)	{
			echo '<div>' . getProductBrowse($res) . '</div>';
		}
	} else {
			echo '<p>Tidak ada data.</p>';
	}
	echo '</div>';

?>
<?php
	require_once('end.php');
?>