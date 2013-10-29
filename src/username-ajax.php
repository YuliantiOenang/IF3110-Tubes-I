<?php
$username=$_GET['username'];
//if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){
if ((preg_match("/^[0-9a-zA-Z_]{5,}$/", $_GET['username'])) == 1) {
echo "<font color=green> <font size='2'> Username valid</font>"; }
else{ echo "<font color=red> <font size='2'> Username minimal 5 karakter</font>"; } 

?>