<?php
	//connection to database
	$con=mysqli_connect("localhost","root","","toko_imba");

	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	//mysqli_close($con);
?> 