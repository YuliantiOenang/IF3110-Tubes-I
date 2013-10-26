<?php
include "koneksi.inc.php";
if(isset($_POST['username'])){$username=$_POST['username'];}
if(isset($_POST['password'])){$password=$_POST['password'];}
if(empty($username) and empty($password)){
//echo "<li><a href=\"javascript:ANIMATEPOPUPBOX.showbox('userlogin','User Login');\">Login</a></li><li><a href=\"registerform.php\">Daftar</a></li>";}
echo 2;
}else{
$hasil = mysql_query("SELECT * FROM anggota where username='".$username."' and password='".$password."'",$koneksi);
		if(mysql_num_rows($hasil)==1)echo 0;else echo 1;
	}
?>