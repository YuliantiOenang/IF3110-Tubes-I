<?php 
	$value = $_GET['value'];

	$regex = '/^[0-9]{16,16}$/';
	if (preg_match($regex,$value)) {
		echo "OK";
	} else {
		echo "Nomor kartu kredit tidak valid";
	}
?>