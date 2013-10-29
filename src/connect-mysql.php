<?php
	$mysql['host'] = "localhost";
	$mysql['username'] = "root";
	$mysql['password'] = "";
	$mysql['dbs'] = "progin_13511020";

	$connect = mysql_connect($mysql['host'] , $mysql['username'] , $mysql['password']);
	if (!$connect) {
 		 echo "Failed to Connect!";
  			mysql_error();
  	}

	mysql_select_db($mysql['dbs'])
	 	or die ("Database tidak ditemukan!".mysql_error());
?>