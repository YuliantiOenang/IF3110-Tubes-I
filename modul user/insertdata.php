<?php

session_start();  

require_once("database.php");   //memanggil file database.php  

connect_db();  


$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$email=mysql_real_escape_string($_POST['email']);
$namalengkap=mysql_real_escape_string($_POST['namalengkap']);
$nohp=mysql_real_escape_string($_POST['nohp']);
$provinsi=mysql_real_escape_string($_POST['provinsi']);
$kotakabupaten=mysql_real_escape_string($_POST['kotakabupaten']);
$alamat=mysql_real_escape_string($_POST['alamat']);
$kodepos=mysql_real_escape_string($_POST['kodepos']);


// Insert data into mysql

$sql="INSERT INTO user (username,password,email,namalengkap,nohp,provinsi,kotakabupaten,alamat,kodepos)VALUES('$username', '$password', '$email', '$namalengkap', '$nohp', '$provinsi','$kotakabupaten','$alamat','$kodepos')";
$result=mysql_query($sql) or die ('error Updating database');

 $_SESSION['username']=$username;  
 $_SESSION['password']=$password;  
 $Expire = time() +60*60*24*30;
 setcookie('username', $username, $Expire);
 
 header('location: register_creditcard.php'); 
exit;  

?>