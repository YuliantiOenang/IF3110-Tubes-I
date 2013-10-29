<?php
$email=$_GET['email'];	
echo "<font size ='2'>", $email, " is" ;
if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){
echo "<font color=green> <font size='2'> Valid email</font>"; }
else{ echo "<font color=red> <font size='2'> Invalid Email</font>"; } 

?>