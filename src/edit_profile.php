<?php
include 'connect_db.inc.php';
//mencari username atau email pada basis data
$username = ($_POST["username"]);
//mencari username atau email pada basis data
$sql = "SELECT *
			FROM data_user 
			WHERE username = '$username'";
$result = mysqli_query($con,$sql);
//error handling
if ($result->num_rows == 0)
{
	die("Error while trying to get the field value");
}
else
{
	while($row = mysqli_fetch_array($result))
	{
		//jika tidak ada field profil yang diubah, maka pesan kesalahan akan ditampilkan
		if(($_POST['namalengkap'] == $row['nama_lengkap']) && ($_POST['nomor_hp'] == $row['nomor_hp']) && ($_POST['alamat'] == $row['alamat']) && ($_POST['kota_kabupaten'] == $row['kota_kabupaten']) && ($_POST['provinsi'] == $row['provinsi']) && ($_POST['kodepos'] == $row['kodepos']) && ($_POST['password'] == $row['password']))
		{
			echo ("<script type = 'text/javascript'>
			window.alert('profil tidak mengalami perubahan')
			window.location.href='index.php?page=profil';
			</script>");
		}
		else
		{
			//update field ke username yang bersangkutan
			$sql = "UPDATE data_user
			SET nama_lengkap = '$_POST[namalengkap]', nomor_hp = '$_POST[nomor_hp]', alamat = '$_POST[alamat]', kota_kabupaten = '$_POST[kota_kabupaten]', provinsi = '$_POST[provinsi]', kodepos = '$_POST[kodepos]', password = '$_POST[password]'
			WHERE username = '$username';";
			$result = mysqli_query($con,$sql);
			//redirect ke home
			header( 'Location: index.php' );
		}
	}
}

//close connection
mysqli_close($con);
?>