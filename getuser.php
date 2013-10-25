<?php
$u = $_GET['q'];
$p = $_GET['r'];

include "koneksi.inc.php";
$sql="SELECT password FROM anggota WHERE username = '".$u."'";
$result = mysql_query($sql,$koneksi);
if(mysql_num_rows($result)==1){
  $row = mysql_fetch_array($result);
  if($p==$row['password']) echo "LOGIN";
}else echo "Incorrect Email/Password Combination
The password and email address you entered don't match. Remember that Facebook passwords are case sensitive, so check your CAPS lock key. You can also reset your password here.";
?>