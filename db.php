<?php
  session_start();

<<<<<<< HEAD
<<<<<<< HEAD
$dbhost = "localhost";
$dbname = "kaskong";
$dbuser = "root";
$dbpass = "root";
=======
=======
>>>>>>> fe64ba72f466e2741044a123c0afebcac0ae2944
  $dbhost = "localhost";
  $dbname = "kaskong";
  $dbuser = "root";
  $dbpass = "";
<<<<<<< HEAD
>>>>>>> d034f0c0acce6f019ecfd3582656291b1ce03285
=======
>>>>>>> fe64ba72f466e2741044a123c0afebcac0ae2944

  $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
  	printf("MySQL connect failed: %s\n", mysqli_connect_error());
  	exit();
<<<<<<< HEAD
  }
=======
  }
>>>>>>> fe64ba72f466e2741044a123c0afebcac0ae2944
