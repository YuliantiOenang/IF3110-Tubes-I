<?php
include "config.php";

$q=$_GET["q"];
$r=$_GET["r"];

if (strlen($r) > 0) {
	$result = mysql_query("SELECT * FROM bank WHERE card_number='$r'");
	if ($result){
		while($row = mysql_fetch_array($result))
			$a[]= $row['name_on_card'];
			if (strlen($q) > 0) {
				$i=0;
				$response="<font color=\"red\">Nama tidak sesuai</font>";
				while(($i < count($a)) && ($response == "<font color=\"red\">Nama tidak sesuai</font>")) {
				if (strtolower($q)==strtolower($a[$i])) {
				  $response="<font color=\"green\">Benar</font>";
				}
				$i++;
				}
			}
	} else {
		$response="<font color=\"red\">Card number tidak ada</font>";
	}
} else {
	$response="<font color=\"red\">Card number tidak ada</font>";
}

echo $response;
?>