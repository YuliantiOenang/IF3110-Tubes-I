<?php
define('INCLUDE_CHECK',1);
require "connect.php";

if(!$_POST) {
	if($_SERVER['HTTP_REFERER'])
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit;
}
?>

<!-- Bagian XHTML Code -->

<?php

$cnt= array();
$products = array();

foreach($_POST as $key=>$value) {
	$key=str_replace('_cnt','',$key);
	$products[]=$key;
	$cnt[$key]=$value;
}

$result = mysql_query("SELECT * FROM item_table WHERE id IN(".join($products,',').")");

if(!mysql_num_rows($result)) {
	echo '<h1>Ada yang salah nih gan!</h1>';
} else {
	echo '<h1>Agan memesan: </h1>';
	while($row=mysql_fetch_assoc($result)) {
		echo '<h2>'.$cnt[$row['id']].'	x '.$row['nama'].'</h2>';
		$total+=$cnt[$row['id']]*$row['harga'];
	}
	echo '<h1>Total: $'.$total.'</h1>';
}

?>