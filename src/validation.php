<?php

$name = &$_POST['names'];
$email = &$_POST['emails'];


if($name!=""){
mysql_connect("localhost", "root", "") or die("We couldn't connect!");
mysql_select_db("ruserba");
$username = mysql_query("SELECT username FROM user WHERE username='$name'");
$count = mysql_num_rows($username);
if($count!=0){
	echo "no";
}else{
	echo "yes";
}
}

if($email!=""){
mysql_connect("localhost", "root", "") or die("We couldn't connect!");
mysql_select_db("ruserba");
$useremail = mysql_query("SELECT email FROM user WHERE email='$email'");
$ecount = mysql_num_rows($useremail);

if($ecount!=0){
	echo "no";
}else{
	echo "yes";
}
}
	
?>