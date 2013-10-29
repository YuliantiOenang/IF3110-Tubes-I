<?php

// Create connection
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");


if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email'])){

	//username
    $username=strtolower(mysql_real_escape_string($_POST['username']));
    $query="select * from user where username='$username'";
    $res=mysql_query($query, $con) or die ('Unable to run query:'.mysql_error());
    $count=mysql_num_rows($res);
	
	//email
	$email=strtolower(mysql_real_escape_string($_POST['email']));
    $query1="select * from user where email='$email'";
    $res1=mysql_query($query1, $con) or die ('Unable to run query:'.mysql_error());
    $count1=mysql_num_rows($res1);
	
    $HTML='';
    if($count > 0 ){
		$HTML='username sudah digunakan';
    } else if($count1 > 0 ){
		$HTML='alamat email sudah digunakan';
    } else{
		$sql="INSERT INTO `user`(`username`, 
		`email`,
		`fullname`, 
		`password`, 
		`alamat`, 
		`kabupaten`, 
		`provinsi`, 
		`kodepos`, 
		`telepon`) 
		VALUES
		('$_POST[username]',
		'$_POST[email]',
		'$_POST[namalengkap]',
		'$_POST[pwd]',
		'$_POST[almt]',
		'$_POST[kab]',
		'$_POST[prov]',
		'$_POST[kode]',
		'$_POST[hp]')";
		
		if (!mysql_query($sql,$con)) {
			$HTML="";
			die('Error: ' . mysql_error($con));
		} $HTML="1 record added";
		
	}
	echo $HTML;
}

mysql_close($con);

?>  