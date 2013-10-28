<?php

session_start();  

require_once("database.php");   //memanggil file database.php  

connect_db();  


$username=$_SESSION["username"];
$cardnumber=mysql_real_escape_string($_POST['cardnumber']);



// Insert data into mysql

$sql="UPDATE user SET nocredit = '$cardnumber' WHERE username = '$username' ";
$result=mysql_query($sql) or die ('error Updating database');

 $_SESSION['cardnumber']=$cardnumber;  
 header('location: home.php');  
exit;  

?>