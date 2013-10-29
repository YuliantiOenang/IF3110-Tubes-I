<?php
include "config.php";
$result = mysql_query("SELECT * FROM pengguna");
while($row = mysql_fetch_array($result))
	$a[]= $row['email'];

$q=$_GET["q"];

if (strlen($q) > 0) {
  $i=0;
  $response="<font color=\"green\">Benar</font>";
  while(($i < count($a)) && ($response == "<font color=\"green\">Benar</font>")) {
    if (strtolower($q)==strtolower($a[$i])) {
      $response="<font color=\"red\">Email telah terpakai, silahkan coba email lain</font>";
    }
	$i++;
  }
}
echo $response;
?>