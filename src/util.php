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
	function getProductImagePath($product_image_filename)	{
		return 'images/products/' . $product_image_filename;
	}
	function getProductPage($product_id)	{
		return 'product.php?product_id=' . $product_id;
	}
?>