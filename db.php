<?php
  session_start();

<<<<<<< HEAD
$dbhost = "localhost";
$dbname = "kaskong";
$dbuser = "root";
$dbpass = "root";
=======
  $dbhost = "localhost";
  $dbname = "kaskong";
  $dbuser = "root";
  $dbpass = "";
>>>>>>> d034f0c0acce6f019ecfd3582656291b1ce03285

  $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
  	printf("MySQL connect failed: %s\n", mysqli_connect_error());
  	exit();
  }
