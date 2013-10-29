<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno()){
	  $result = "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	else{
		//chek dulu ada id kembaran ga
		$sql = "SELECT * FROM user WHERE id = '$_POST[id]'";
		$query = mysqli_query($con,$sql);
		$i = 0;
		while($row = mysqli_fetch_array($query)){
			$i++;
		}
		if(intval($i)==intval(0)){ //gak ada yang pake id ini
			$response=1;
			//sekarang chek ada yang sama email nya
			$sql = "SELECT * FROM user WHERE email = '$_POST[email]'";
			$query = mysqli_query($con,$sql);
			$i = 0;
			while($row = mysqli_fetch_array($query)){
				$i++;
			}
			if(intval($i)==intval(0)){ //gak ada yang pake email ini
				//masuk bagaian masukin ke Query
				$sql="INSERT INTO user (id, email, password,full_name,alamat,provinsi,kotakabupaten,kodepos,nomor_handphone)
					VALUES
					('$_POST[id]','$_POST[email]','$_POST[password]','$_POST[fullname]','$_POST[alamat]','$_POST[provinsi]','$_POST[kota]','$_POST[kodepos]','$_POST[hp]')";

					if (!mysqli_query($con,$sql))
					  {
					  $result['code'] ='Error: ' . mysqli_error($con);
					  }
					else{
						$result['code'] = 0;//berhasil masukin data
						
						// Kirim data baru
						$sql = "SELECT * FROM user WHERE id = '$_POST[id]'";
						$query = mysqli_query($con,$sql);
			
						while($row = mysqli_fetch_array($query)){
							$data ="".$row['full_name'] .",".$row['alamat'].",".$row['provinsi'].",".$row['kotakabupaten'].",".$row['kodepos'].",".$row['nomor_handphone'].",".$row['email'].",".$row['password'];
						}
			
						if(!mysqli_query($con,$sql)){ // Gagal
						{
							$result['data'] = 'Error: ' . mysqli_error($con);
						}
						}else{
							$result['data'] = $data;
						}	
					} 
			}
			else{ //ada yang pake email ini
				$result['code']=2; //2 artinya email ada yang sama
			}
		}
		else{ //ada yang pake id ini
			$result['code']=1; //satu artinya id ada yang sama
		}
	}
	
mysqli_close($con);
echo json_encode($result);
}
?>
