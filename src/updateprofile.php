<?php
$dbhost  = 'localhost';
$dbname  = 'progin';
$dbuser  = 'root';
$dbpass  = ''; 

$con = mysql_connect($dbhost, $dbuser, $dbpass);

if($con == FALSE)
{
    echo 'Cannot connect to database' . mysql_error();
}
else
{
    echo 'Connected to database';
}

mysql_select_db($dbname, $con);


$sql= "UPDATE `user` SET `Email` = '$_POST[uemail]', `Fullname` = '$_POST[nama]', `Password` = '$_POST[pass]', `Alamat` = '$_POST[alamat]', `Provinsi` = '$_POST[provinsi]', `Kota` = '$_POST[kota]', `Kodepos` = '$_POST[kodepos]', `NomorHP` = '$_POST[nomorhp]' WHERE `Username` = '$_COOKIE[username]'"; 
if (!mysql_query($sql, $con))
{
    die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con);
header('Location: HomeB.php');
?>