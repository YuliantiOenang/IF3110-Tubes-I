<?php
include 'connect_db.inc.php';
//memasukkan data hasil form ke dalam db
$sql = "UPDATE data_user
			SET card_number = '$_POST[cardnumber]', name_on_card = '$_POST[nameoncard]', expired_date = '$_POST[expireddate]'
			WHERE nama_lengkap = '$_POST[nameoncard]';";

//error handling
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
else
{
	//echo 'registrasi berhasil';
	//update header
	echo ("<script type = 'text/javascript'>
			window.alert('registrasi berhasil')
			window.location.href='index.php';
			</script>");
	//redirect ke home
	//header( 'Location: index.php?page=header' );
}

//close connection
mysqli_close($con);
?>