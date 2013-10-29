<?php
	define('NONE', 0);
	define('COMP_LT', 1);
	define('COMP_LTE', 2);
	define('COMP_GT', 3);
	define('COMP_GTE', 4);
	define('SORT_ASCENDING', 1);
	define('SORT_DESCENDING', 2);
	define('ORDERBY_PRODUCTNAME', 1);
	define('ORDERBY_PRICE', 2);
	define('ORDERBY_SOLDQTY', 3);

	function getProductBrowseQuantity($product)	{
		return $product['id_barang'] . '_quantity';
	}
	function getProductBrowseButton($product)	{
		return $product['id_barang'] . '_button';
	}
	function getProductBrowseMessage($product)	{
		return $product['id_barang'] . '_message';
	}
	function getProductBrowse($product)	{
		return
		'<span class="browseproductspan">
			<img src="' . getProductImagePath($product['nama_gambar_thumb']) . '" alt="' . $product['nama_barang'] . '" />
		</span>
		<span class="browseproductspan"><a href="' . getProductPage($product['id_barang']) . '">' .  
			$product['nama_barang'] . '</a><br />Rp ' . $product['harga'] . ',00 / ' . $product['satuan'] . '
		</span>
		<span class="browseproductspan">
			<label for="' . getProductBrowseQuantity($product) . '">Jumlah pembelian</label>
			<input type="text" id="' . getProductBrowseQuantity($product) . '" />
			<button id="' . getProductBrowseButton($product) . '">Beli</button><br />
			<span id="' . getProductBrowseMessage($product) . '"></span>
		</span>';
	}
	function getProductBrowseIndex($product)	{
		return
		'<span class="browseproductspan">
			<img src="' . getProductImagePath($product['nama_gambar_thumb']) . '" alt="' . $product['nama_barang'] . '" />
		</span>
		<span class="browseproductspan"><a href="' . getProductPage($product['id_barang']) . '">' .  
			$product['nama_barang'] . '</a><br />Rp ' . $product['harga'] . ',00 / ' . $product['satuan'] . '
		</span>
		<span class="browseproductspan">
			Total penjualan: ' . $product['jumlah_pembelian'] . ' unit
		</span>';
	}
	function getComparisonString($comparison_id)	{
		if ($comparison_id == COMP_LT) return '<';
		else if ($comparison_id == COMP_LTE) return '<=';
		else if ($comparison_id == COMP_GT) return '>';
		else if ($comparison_id == COMP_GTE) return '>=';
		else return '<'; // Jika tidak ada yang sesuai.
	}

	function getProductSearchResult($get)	{
		global $db;

		// Periksa input ada atau tidak.
		if (isset($get['search_product_name'])) $search_product_name = $get['search_product_name']; else $search_product_name = ''; // Empty string jika tidak ada data.
		if (isset($get['search_category_id'])) $search_category_id = $get['search_category_id']; else $search_category_id = NONE;
		if (isset($get['search_price'])) $search_price = $get['search_price']; else $search_price = null; // Harga null jika tidak ada data.
		if (isset($get['search_comparison'])) $search_comparison = $get['search_comparison']; else $search_comparison = NONE;
		if (isset($get['sort_id'])) $sort_id = $get['sort_id']; else $sort_id = ORDERBY_PRODUCTNAME;
		if (isset($get['sort_method'])) $sort_method = $get['sort_method']; else $sort_method = SORT_ASCENDING;
		if (isset($get['index'])) $index = $get['index']; else $index = 0;
		if (isset($get['count'])) $count = $get['count']; else $count = 3;

		// Validasi masukan, nantinya...
		////////////////////

		// Membuat query.
		$query = 'select * from barang ';
		$query_where = array();
		if ($search_product_name != '') $query_where[] = "nama_barang like ('%$search_product_name%')";
		if ($search_category_id != NONE) $query_where[] = "id_kategori = $search_category_id";
		if ($search_comparison != NONE && !is_null($search_price))	{
			$cmp = getComparisonString($search_comparison);
			$query_where[] = "harga $cmp $search_price";
		}

		$query_end = array();
		// Sorting
		if ($sort_id == ORDERBY_PRODUCTNAME) $sort_attribute = 'nama_barang';
		if ($sort_id == ORDERBY_PRICE) $sort_attribute = 'harga';
		else if ($sort_id == ORDERBY_SOLDQTY) $sort_attribute = 'jumlah_pembelian';
		else $sort_attribute = 'nama_barang';
		$query_end[] = "order by $sort_attribute";

		// Metode sorting
		if ($sort_method == SORT_DESCENDING) $sort_method_string = 'desc';
		else $sort_method_string = 'asc';
		$query_end[] = $sort_method_string;

		$query_end[] = "limit $index, $count";

		// Buat query dengan where.
		if (count($query_where) > 0) $query .= 'where ' . implode(' and ', $query_where) . ' ';
		
		// Buat query akhir.
		$query .=  implode(' ', $query_end);

		//echo $query . '<br />';

		if ($stmt = $db->prepare($query))	{
				$stmt->execute();
				$result = fetchAssocArray($stmt);
				$stmt->close();
		}
		
		return $result;
	}
?>
