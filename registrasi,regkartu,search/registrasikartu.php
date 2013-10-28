<?php

// Create connection
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");

$number=strtolower(mysql_real_escape_string($_POST['nomorkartu']));
$nama=strtolower(mysql_real_escape_string($_POST['namakartu']));

$username='alifanurani';
$HTML='fail';

if(preg_match('/^([_0-9-]{10})$/',$number) && preg_match('/([_a-zA-Z-]* [_a-zA-Z-]*)/',$nama)){
    $HTML='success';
	$sql="UPDATE user SET nokartukredit='$_POST[nomorkartu]' , namadikartu='$_POST[namakartu]' , dateexp='$_POST[tanggalexp]' WHERE username='$username'";
	if (!mysql_query($sql,$con)) {
		$HTML="";
		die('Error: ' . mysql_error($con));
	} $HTML="1 record added";	
}

echo $HTML;
mysql_close($con);

?>  