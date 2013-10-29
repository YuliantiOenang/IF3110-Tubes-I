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


$sql="UPDATE `user` SET `CCNumber` = '$_POST[CCNumber]' WHERE `Username` = '$_COOKIE[username]'";

if (!mysql_query($sql, $con))
{
    die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con);

setcookie('ccnumber', $_POST['CCNumber'], time()+60*60*24*365, '/');
header('Location: HomeB.php');

?>