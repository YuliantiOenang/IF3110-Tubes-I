<?php

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
	
/*	function findPicture($ID){ 
		$con 	= getConnection();
		
		$sql 	= "SELECT goods_name FROM goods WHERE goods_ID = '$ID'";
		
		$result = mysqli_query($con, $sql);
		
		$row	= mysqli_fetch_array($result);
		
		$path	= '../image/goods/'.$row["goods_name"].'.jpg';

		mysqli_close($con);
		
		return $path;
	} 
	
	$URL = findPicture('goods002'); // */
	
//	echo $URL;

	$con	= getConnection();
	
	$sql	= "SELECT * FROM goods WHERE goods_detail LIKE '%a%'";
	
	$result	= mysqli_query($con, $sql);
	
	while($row = mysqli_fetch_array($result)){
		echo $row["goods_ID"].'<br>';
	}
	
	
?>