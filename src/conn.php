<?php
$server = "localhost"; 
$user = "root"; 
$password='';

$conn = mysql_connect($server, $user, $password) or die ("Error connecting to MySQL");
//echo "Connected to MySQL <br \>";

$dbname = "ruserba";
mysql_select_db($dbname) or die ("Error connecting to Database:".$dbname);
//echo "Connected to Database <br \>";

//Close specified connection
//mysql_close($conn);
?>