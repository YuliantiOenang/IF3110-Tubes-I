<?php


mysql_connect("127.0.0.1", "root", "")or die("cannot connect");
mysql_select_db("waserda")or die("cannot select DB");



$sql = "SELECT DISTINCT kategori FROM data_barang ";

$result = mysql_query($sql);
if (false === $result) {
    echo mysql_error();
}else{
	$i=0;
	while ($row=mysql_fetch_array($result)) {
		echo "<li>".$row["kategori"]."</li>\n";
		$i++;
	}
}
?>