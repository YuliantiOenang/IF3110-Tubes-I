<?php
	session_start();

	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$catt = $_GET['catt'];
	
	$query = "SELECT Nama FROM merchandise WHERE Kategori='" . $catt . "' ORDER BY Terjual DESC";
	$result = mysqli_query($con, $query);
	for ($x = 0; $x < 1; $x++) {
		$row = mysqli_fetch_array($result);
	}
	echo '<img id="img2" src="res/' . $row['Nama'] .'.jpg"></img>';
	
	mysqli_close($con); // close connection
?>