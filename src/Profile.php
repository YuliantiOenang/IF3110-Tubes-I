<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Ambil database
	$con=mysqli_connect("localhost","root","","test");

	
	// Cek koneksi ke database
	if(mysqli_connect_errno()){ // Gagal
		$result['code'] = "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{ // Berhasil
		// Update DB
		$sql = "UPDATE user SET password = '$_POST[password]', full_name = '$_POST[fullname]', alamat = '$_POST[alamat]', provinsi = '$_POST[provinsi]', kotakabupaten = '$_POST[kota]', kodepos='$_POST[kodepos]', nomor_handphone='$_POST[hp]' WHERE id = '$_POST[id]'";
		
		
		if(!mysqli_query($con,$sql)){ // Gagal
		{
			$result['code'] = 'Error: ' . mysqli_error($con);
		}
		}else{ // Berhasil
			$result['code'] = 0;
			
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

	// Tutup koneksi
	mysqli_close($con);
	echo json_encode($result);
}
?>