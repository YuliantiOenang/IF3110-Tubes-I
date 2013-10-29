<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Ambil database
	$con=mysqli_connect("localhost","root","","test");

	
	// Cek koneksi ke database
	if(mysqli_connect_errno()){ // Gagal
		$result = "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{ // Berhasil
		// Cek apakah ada kartu kembar atau tidak
		$sql = "SELECT * FROM user WHERE creditcardnum = '$_POST[cardnumber]'";
		$query = mysqli_query($con,$sql); // Masukkan query
		$i = 0;
		
		while($row = mysqli_fetch_array($query)){ // Kalau hasilnya ada isinya, i++
			$i++;
		}
		
		if(intval($i) == intval(0)){ // Gak ada yang pakai kartu ini
			// Update DB
			$sql = "UPDATE user SET creditcardnum = '$_POST[cardnumber]', creditcardname = '$_POST[cardname]', expireddate = '$_POST[expireddate]' WHERE id = '$_POST[id]'";
		
			if(!mysqli_query($con,$sql)){ // Gagal
			{
				$result = 'Error: ' . mysqli_error($con);
			}
			}else{ // Berhasil
				$result = 0;
			}
		}
		else{ // Kartu kredit terpakai
			$result = 1;
		}	
	}
	
	// Tutup koneksi
	mysqli_close($con);
	echo $result;
}
?>