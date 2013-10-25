<?php $owner = $_GET['username']; ?>
<!DOCTYPE HTML>
<html>
<head><title>Pendaftaran Kartu Kredit</title></head>
<body>
	<?php include "header.php"; ?>
	<form id="registerform" method="post" action="registercard.php">
	<strong><h2>Pendaftaran Kartu Kredit</h2></strong><br>
	<p><?php echo $owner; ?>, Anda bisa mendaftarkan kartu kredit sekarang atau nanti.</p>
	<pre>Card Number		<input type="text" name="cardnumber"></pre>
	<pre>Name on Card		<input type="text" name="nama"></pre>
	<pre>Expired Date 		<input type="text" name="expired"></pre>
	<input type="hidden" name="username" value="<?php echo $owner; ?>">
	<input type="submit" value="Ok"> <a href="index.php">Skip</a></form>
	<?php include "footer.php"; ?>
</body>