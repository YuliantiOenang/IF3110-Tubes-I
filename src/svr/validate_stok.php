<?php
	session_start();

	$success = 0;
	
	foreach ($_SESSION as $key=>$value)
	{
		if ($key != 'usr')
		{
			$con=mysqli_connect("localhost","root","","ruserba");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");

			$row = mysqli_fetch_array($result);
				
			if ($row['Banyak'] < $value){
				echo "Stok ".$key." tidak tersedia..";
				unset($success);
				break;
			} else {
				$success = $success + $value * $row['Harga'];
			}

			mysqli_close($con);
		}
	}
	
	if (isset($success)){
		
		//
		$con=mysqli_connect("localhost","root","","ruserba");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		// cek credit card..
		$result2 = mysqli_query($con,"SELECT * FROM Have WHERE IdName='".$_SESSION['usr']."'");
		if (mysqli_num_rows($result2) > 0){
		// ada! update database
			$row2 = mysqli_fetch_array($result2);
			// update database..
			foreach ($_SESSION as $key=>$value)
			{
				if ($key != 'usr')
				{
					$con=mysqli_connect("localhost","root","","ruserba");
					// Check connection
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }

					$result = mysqli_query($con,"SELECT * FROM Merchandise WHERE Nama='".$key."'");
					$row = mysqli_fetch_array($result);
					$temp = $row['Banyak'] - $value;
					mysqli_query($con,"UPDATE Merchandise SET Banyak=". $temp ." WHERE Nama='".$key."'");

					unset($_SESSION["$key"]);
					
					mysqli_close($con);
				}
			}
			echo "Pembelian barang berhasil!";
			echo "<br/>";
			echo "Total Harga : ".$success;
			echo "<br/>";
			echo 1;
		} else {
			echo 0;
		// ga ada! ke register_card deh
			//header("Location: register_card.php");
			//die();
		}
	} else {
		echo 0;
	}
	
	/*
	
	$con = mysqli_connect('localhost', 'root', '', 'ruserba'); // create connection with database
	if (mysqli_connect_errno($con)) { // check if connection established
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$usr = $_GET['usr']; // username
	$pass = $_GET['pass']; // password

	// To protect MySQL injection
	$usr = stripslashes($usr);
	$pass = stripslashes($pass);
	$usr = mysqli_real_escape_string($con, $usr);
	$pass = mysqli_real_escape_string($con, $pass);
	
	$query = "SELECT Password FROM customer WHERE IdName='" . $usr . "'";
	$result = mysqli_query($con, $query);
	if ($row = mysqli_fetch_array($result)) {
		if ($row['Password'] == $pass) {
			$_SESSION['usr'] = $usr;
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 0;
	}

	mysqli_close($con); // close connection
	*/
?>