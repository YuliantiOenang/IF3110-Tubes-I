<?php
include "config.php";
// Fill up array with names
$result = mysql_query("SELECT * FROM bank");
while($row = mysql_fetch_array($result))
	$a[]= $row['card_number'];

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
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

//output the response
echo $response;
?>