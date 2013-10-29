<?php
include "config.php";

$result = mysql_query("SELECT * FROM bank");
while($row = mysql_fetch_array($result))
	$a[]= $row['card_number'];

$q=$_GET["q"];

if (strlen($q) > 0) {
	$i=0;
	$response="<font color=\"red\">Card number tidak ada</font>";
	while(($i < count($a)) && ($response == "<font color=\"red\">Card number tidak ada</font>")) {
	if (strtolower($q)==strtolower($a[$i])) {
	  $response="<font color=\"green\">Benar</font>";
	}
	$i++;
	}
}

echo $response;
?>