<?php
	$u = $_GET["u"];
	$p = $_GET["p"];
	$conn = mysqli_connect("localhost","root","","ruserba");
	if(mysqli_connect_errno($conn)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
			
	$hasil = mysqli_query($conn, "SELECT * FROM user_table WHERE username = '" . $u ."' AND password = '" . $p . "'");
	
	if(mysqli_fetch_array($hasil)) {
		$expire = time() + (60*60*24*30);
		setcookie("user",$u,$expire);
		echo "OK";
	} else {
		setcookie("user","",(time()-(60*60*24*30)));
		echo "Sorry, maybe you're wrong fill your username or password";
	}
	
	mysqli_close($conn);
?>