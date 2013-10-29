<?php
include 'connect_db.inc.php';
$username = ($_GET['username']);
//mencari username atau email pada basis data
$sql = "SELECT *
			FROM data_user 
			WHERE username = '$username'";
$result = mysqli_query($con,$sql);
$value = '';

//mengecek apakah hasil query mengembalikan nilai
if ($result->num_rows == 0)
{
	die("Error while trying to get the field value");
}
else
{
	while($row = mysqli_fetch_array($result))
	{
		$value = 
		"<div>Username : <span id = \"prof_username\">".$row['username']."</span></div>
		<div>Nama Lengkap : <span id = \"prof_namalengkap\">".$row['nama_lengkap']."</span></div>
		<div>Nomor Handphone : <span id = \"prof_nomor_hp\">".$row['nomor_hp']."</span></div>
		<div>Alamat : <span id = \"prof_alamat\">".$row['alamat']."</span></div>
		<div>Kota/Kabupaten : <span id = \"prof_kota_kabupaten\">".$row['kota_kabupaten']."</span></div>
		<div>Provinsi : <span id = \"prof_provinsi\">".$row['provinsi']."</span></div>
		<div>Kode Pos : <span id = \"prof_kodepos\">".$row['kodepos']."</span></div>
		<div>Email : <span id = \"prof_email\">".$row['email']."</span></div>
		<div style=\"visibility:hidden\">Password : <span id = \"prof_password\">".$row['password']."</span></div>
		<div>Jumlah transaksi : <span>".$row['jumlah_transaksi']."</span></div>";
		echo $value;
	}
}
//close connection
mysqli_close($con);
?>
