<?php  

session_start();

require_once("database.php");   //memanggil file database.php  

connect_db();       // memanggil fungsi connect_db yang ada di file database.php  

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$data = mysql_query("SELECT * FROM user where username='$username'") 
 or die(mysql_error()); 
 $num=mysql_numrows($data);

$i=0;
while ($i < $num) {

$email=mysql_result($data,$i,"email");
$namalengkap=mysql_result($data,$i,"namalengkap");
$nohp=mysql_result($data,$i,"nohp");
$provinsi=mysql_result($data,$i,"provinsi");
$kotakabupaten=mysql_result($data,$i,"kotakabupaten");
$alamat=mysql_result($data,$i,"alamat");
$kodepos=mysql_result($data,$i,"kodepos");
$i++;
}

$_SESSION['email']=$email;
$_SESSION['namalengkap']=$namalengkap;
$_SESSION['nohp']=$nohp;
$_SESSION['provinsi']=$provinsi;
$_SESSION['kotakabupaten']=$kotakabupaten;
$_SESSION['alamat']=$alamat;
$_SESSION['kodepos']=$kodepos;

header('location: edit-profile.php');  

 ?> 