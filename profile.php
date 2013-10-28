
<!DOCTYPE HTML>
<html>

<?php

include 'db.php';
include 'macro/header.php';

?>

<body>

<?php
if (isset($_GET['id'])) {
	$result = mysqli_query($link, "SELECT * FROM user WHERE id='".$_GET['id']."'");
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		echo "<h1>".$row['username']."</h1><br />";
		echo "Fullname: ".$row['nama']."<br />";
		echo "Email: ".$row['email']."<br />";
		echo "Alamat: ".$row['alamat']."<br />";
		echo "Provinsi: ".$row['provinsi']."<br />";
		echo "Kota: ".$row['kota']."<br />";
		echo "Kodepos: ".$row['kodepos']."<br />";
		echo "Phone: ".$row['hp']."<br />";
	}
	if (isset($_SESSION['user_id']) && $_GET['id'] == $_SESSION['user_id']) {
		echo "<button type=\"button\" onclick=\"location.href='editprofile.php';\">Ubah profil</button><br />";
		echo "<button type=\"button\">Ganti kata sandi</button><br />";
		echo "<button type=\"button\" onclick=\"location.href='editprofile.php';\">Registrasi kartu kredit</button><br />";
	}
}
?>
</body>
</html>