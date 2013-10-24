<?php $owner = $_GET['username']; ?>
<!DOCTYPE HTML>
<html>
<head><title>Pendaftaran Kartu Kredit</title></head>
<body>
	<?php include "header.php"; ?><hr>
	<strong><b>Pendaftaran Kartu Kredit</b></strong><br>
	<form method="post" action="registercard.php">
	<p><?php echo $owner; ?> bisa mendaftarkan kartu kredit sekarang atau nanti</p>
	<pre>Card Number	<input type="text" name="cardnumber"></pre>
	<pre>Name on Card	<input type="text" name="nama"></pre>
	<pre>Expired Date 	<input type="text" name="expired"></pre>
	<input type="hidden" name="username" value="<?php echo $owner; ?>">
	<input type="submit" value="Ok"> <a href="index.php">Skip</a></form>
</body>