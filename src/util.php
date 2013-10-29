<?php
	function writeOkSmall($message)	{
		echo '<span class="systemmessagesmall"><img src="images/icon_ok_small.png" alt="OK" />' . $message . '</span>';
	}
	function writeWarningSmall($message)	{
		echo '<span class="systemmessagesmall"><img src="images/icon_warning_small.png" alt="Warning" />' . $message . '</span>';
	}
	function writeErrorSmall($message)	{
		echo '<span class="systemmessagesmall"><img src="images/icon_error_small.png" alt="Error" />' . $message . '</span>';
	}
	function getLoginHash($username, $password_hash)	{
		return md5($username . $password_hash . $_SERVER['REMOTE_ADDR']); // Bad practice, actually...
	}
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
			<img src="images/products/' . $product['nama_gambar_thumb'] . '" alt="' . $product['nama_barang'] . '" />
		</span>
		<span class="browseproductspan">' . 
			$product['nama_barang'] . '<br />Rp ' . $product['harga'] . ',00 / ' . $product['satuan'] . '
		</span>
		<span class="browseproductspan">
			<label for="' . getProductBrowseQuantity($product) . '">Jumlah pembelian</label>
			<input type="text" id="' . getProductBrowseQuantity($product) . '" />
			<button id="' . getProductBrowseButton($product) . '">Beli</button><br />
			<span id="' . getProductBrowseMessage($product) . '"></span></span>';
	}
?>