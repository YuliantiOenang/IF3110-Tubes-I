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
<head>
<title>Registrasi Kartu Kredit</title>
</head>
<body>
<script src="js/ajax.js"></script>
<script>
	function validation (theForm) {
		var data = {"cardnumber" : theForm["cardnumber"].value, "expireddate" : theForm["expireddate"].value, "namecard" : theForm["namecard"].value};
		var callback = function(response) {
			if (response.status == "error") 
				alert(response.deskripsi) ;
			else
				alert("berhasil");
		};
		sendAjax(data, "submit.php", callback);
	}
	
	function skip(){
		window.location = "index.php";
	}
</script>
<h1> REGISTRASI KARTU KREDIT </h1>
<p> Registrasi kartu kredit dilakukan melalui form yang ada dibawah ini </p>
<form method="post" action="submit.php">
	<label for "cardnumber">Card Number : </label>
	<input type="text" id="cardnumber" name="cardnumber" "></br>
	<label for "namecard">Name on card : </label>
	<input type="text" id="namecard" name="namecard" /><br/>
	<label for "expireddate">Expired Date (Format MM/YY) : </label>
	<input type="text" id="expireddate" name="expireddate" /><br/>
	
	<input type="button" value = "Submit" onclick="validation(this.form)" />
	<input type="button" value = "Skip" onclick="skip()" />
</body>
</form>
</html>