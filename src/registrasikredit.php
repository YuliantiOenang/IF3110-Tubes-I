<!--
field card number,
name on card
expired date
submit
submit, maka akan dilakukan ajax untuk mengecek card numer dan name on card tersebut valid
jika sukses akan ada notifikasi pembelian sukses
jika gagal memberikan notifikasi gagal dan kembali ke halaman registrasi kartu kredit -->
<!DOCTYPE html>
<html>
<body>
<script src="js/ajax.js"></script>
<script src="validation.js"></script>
<h1> REGISTRASI KARTU KREDIT </h1>
<p> Registrasi kartu kredit dilakukan melalui form yang ada dibawah ini </p>
<form method="post">
	<label for "cardnumber">Card Number : </label>
	<input type="text" id="cardnumber" name="cardnumber" "></br>
	<label for "namecard">Name on card : </label>
	<input type="text" id="namecard" name="namecard" /><br/>
	<label for "expireddate">Expired Date : </label>
	<input type="text" id="expireddate" name="expireddate" /><br/>
	<button type="button" onclick="validation(this.form)"  >Submit</button>
	<?php
		
/* <!--		if(isset($_POST["ajax"])){
			$response = handleTransactionAjax();
			if ($response != null){
				exit($response);
			}
			exit();	
		} else if(!isset($_GET["id"])){
		header("Location: indeks.php");
		} -->
 		$card_number = $_POST['cardnumber'];
		$name_card = $_POST['namecard'];
		$expired_date = $_POST ['expireddate'];
 		echo 'Thanks for submitting the form. <br/>';
		echo 'Nomor kartu : ' . $card_number . '<br/>' ;
		echo 'Nama pada kartu : ' . $name_card. '<br/>';
		echo 'Tanggal Kartu Expired : ' . $expired_date . '<br/>';
 */	?>
</body>
</form>
</html>