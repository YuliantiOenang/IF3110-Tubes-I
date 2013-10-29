<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$ID = $_POST["id"];
	$Pass = $_POST["pass"];
	$response =(string)"test";
	$hasil = array();
	//echo $ID;
	//echo $Pass;
	//validasi apakah data kosong atau tidak
	if(strlen($ID)<1 && strlen($Pass)<1){
		$response=(string)"no suggestion";
	}
	else{
	//echo $response;
	// Create connection
	$con=mysqli_connect("localhost","root","","test");

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
		$data= "test";
		while($row = mysqli_fetch_array($query)){
			$i++;
			$data ="".$row['full_name'] .",".$row['alamat'].",".$row['provinsi'].",".$row['kotakabupaten'].",".$row['kodepos'].",".$row['nomor_handphone'].",".$row['email'].",".$row['password'].",".$row['creditcardnum'].",".$row['creditcardname'].",".$row['expireddate'].",";
		}
		if(intval($i)==intval(0)){
			$response=1;
		}
		else if(intval($i)==intval(1)){
			$response=0;
		}
		$hasil['data']=$data;
	
	}
	
		mysqli_close($con);
		$hasil['login']=$response;
		echo json_encode($hasil);
	}
	
}

function test_input($data)
{
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
