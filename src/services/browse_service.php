<?php
	require_once('../util.php');
	require_once('../db.php');
	require_once('../category_function.php');

	databaseConnect();

	echo json_encode(getProductSearchResult($_GET));

?>
