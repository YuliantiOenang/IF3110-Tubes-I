<?php
	// Create connection
	$con=mysqli_connect("127.0.0.1","root","","toko_imba");

	// Check connection
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//mysqli_query($con,"INSERT INTO pengguna (id_pengguna, nama_pengguna)
	//VALUES ('Peter', 'Griffin')");

	//check data posted
	echo "Submit query".'<br/>';
	echo $_POST['name'].'<br/>';
	echo $_POST['username'].'<br/>';
	echo $_POST['password'].'<br/>';
	echo $_POST['email'].'<br/>';
	
	//do insertion query
	
	mysqli_close($con);
?>