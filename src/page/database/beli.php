<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['login_user'])) {
		$user_check = $_SESSION['login_user'];
	} else {
		$user_check = "";
	}
	
	if (!function_exists('getConnection')) {
		function getConnection(){
			// Create connection
			$con = mysqli_connect("localhost","root","","progin_13510023");
			// Check connection
			if (mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			return $con;
		}
	}
		
	$con 	= getConnection();
	
	$barang		= $_GET["namabarang"];
	$jumlahbeli	= $_POST["textjumlah"];
	$cart_note	= $_POST["textnotes"];
	
	$sql	= "SELECT * FROM goods WHERE goods_name='$barang'";
	
	$result = mysqli_query($con, $sql);
	
	$row	= mysqli_fetch_array($result);
	
	if($jumlahbeli <= $row["goods_available"]){
		$sisa 	= $row["goods_available"] - $jumlahbeli;
		$sql	= " UPDATE goods
					SET goods_available = $sisa, goods_sold = $jumlahbeli
					WHERE goods_name='$barang'";
					
		if (!mysqli_query($con,$sql))
		{
			die('Error: ' . mysqli_error($con));
		}
		
		$sql	= " INSERT INTO cart 
						(profil_ID, cart_goods, cart_count, cart_note)
					VALUES
						('$user_check', '$barang', '$jumlahbeli', '$cart_note')";
					
		if (!mysqli_query($con,$sql))
		{
			die('Error: ' . mysqli_error($con));
		}
		
		header("Location: ../detailbarang.php?namabarang=$barang&hasil=berhasil ditambahkan dalam cart");
		
		mysqli_close($con);
	}
	else
	{
		$sisa = $_POST["textjumlah"]-$row["goods_available"];
		header("Location: ../detailbarang.php?namabarang=$barang&hasil=barang kurang $sisa");
	}
	//
?>