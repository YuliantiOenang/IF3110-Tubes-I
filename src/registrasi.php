<?php
$dbhost  = 'localhost';
$dbname  = 'progin';
$dbuser  = 'root';
$dbpass  = ''; 

$con = mysql_connect($dbhost, $dbuser, $dbpass);
/* $kkk = mysql_select_db('$dbname') */

if($con == FALSE)
{
    echo 'Cannot connect to database' . mysql_error();
}
else
{
    echo 'Connected to database';
}

mysql_select_db($dbname, $con);


$sql="INSERT INTO `user`(`Username`, `Email`, `Fullname`, `Password`) 
VALUES('$_POST[uname]','$_POST[uemail]','$_POST[nama]','$_POST[pass]')";

if (!mysql_query($sql, $con))
{
    die(' Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con);
setcookie('username', $_POST['uname'], time()+60*60*24*365, '/');
setcookie('password', md5($_POST['pass']), time()+60*60*24*365, '/');
header('Location: HalamanRegistrasiKartuKredit.php');
?>