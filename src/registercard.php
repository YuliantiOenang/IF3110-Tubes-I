<?php
include "koneksi.inc.php";
if(isset($_GET['cardnumber'])){ $cardnumber=$_GET['cardnumber']; }
if(isset($_GET['name'])){ $name=$_GET['name']; }
if(!empty($cardnumber) && !empty($name)){
	$ret = "notvalid";
	//cardnumber and name validator
	$regex = '/^([A-Za-z]{1,10})+([ ][A-Za-z]{1,20})+$/';
	if(preg_match($regex, $name) && strlen($cardnumber)==16){
		$ret = "valid";
	}
	sleep(3);
	echo $ret;
}else{
	if(isset($_POST['username'])){$username=$_POST['username'];}
	if(isset($_POST['cardnumber'])){$cardnumber=$_POST['cardnumber'];}
	if(isset($_POST['nama'])){$nama=$_POST['nama'];}
	if(isset($_POST['expired'])){$expired=$_POST['expired'];}
	$perintah="INSERT INTO kartu_kredit(owner,card_number,nama,expired) 
		values ('$username','$cardnumber','$nama','$expired')";
	if(!empty($cardnumber)){
		$hasil=mysql_query($perintah,$koneksi);
		if($hasil){?>
			<html>
			<head><script>
				alert("Pendaftaran kartu kredit berhasil!");
				window.location.href="../tubeswbd1/index.php";
			</script>
			</head><body></body></html>
		<?php
		}else{
			echo "<html><body>Pendaftaran kartu kredit gagal.<br><a href='registercardform.php?username=".$username."'>Kembali</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
		}
	}else{
		echo "<html><body>Your card number is incorrect!<br><a href='registercardform.php?username=".$username."'>Daftar ulang</a> atau <a href='index.php'>Kembali ke halaman utama</a></body></html>";
	}
}
?>