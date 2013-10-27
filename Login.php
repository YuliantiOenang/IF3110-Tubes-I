<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$ID =$_POST["id"];
	$Pass =$_POST["pass"];
	$response =(string)"test";
	//echo $ID;
	//echo $Pass;
	//validasi apakah data kosong atau tidak
	if(strlen($ID)<1 && strlen($Pass)<1){
		$response=(string)"no suggestion";
	}
	else{
	//echo $response;
	// Create connection
	$con=mysqli_connect("localhost","root","setsunaeseiei","test");

	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 else{
		//baca mysql, cari apa ada yang id nya  $id trus pass nya $
		$sql = "SELECT * FROM user WHERE id = '$ID' AND password='$Pass'";
		$query = mysqli_query($con,$sql);
		$i = 0;
		while($row = mysqli_fetch_array($query)){
			$i++;
		}
		if(intval($i)==intval(0)){
			$response=false;
		}
		else if(intval($i)==intval(1)){
			$response=true;
		}
	}
	mysqli_close($con);
	echo $response;
	}
	
}

function test_input($data)
{
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
