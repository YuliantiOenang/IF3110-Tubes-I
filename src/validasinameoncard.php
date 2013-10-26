<?php
include "config.php";
//get the q parameter from URL
$q=$_GET["q"];
$r=$_GET["r"];
if (strlen($r) > 0) {
	// Fill up array with names
	$result = mysql_query("SELECT * FROM bank WHERE card_number='$r'");
	if ($result){
		while($row = mysql_fetch_array($result))
			$a[]= $row['name_on_card'];
			// lookup all hints from array if length of q>0
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

//output the response
echo $response;
?>