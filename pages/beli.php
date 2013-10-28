<?php
	session_start();
	if(isset($_SESSION['item' . $_GET['id']])){
		$_SESSION['item' . $_GET['id']] += $_POST['jumlah'];
	} else{
		$_SESSION['item' . $_GET['id']] = $_POST['jumlah'];
	}
	echo "Barang sudah dimasukkan ke shopping cart. Silahkan kembali melakukan browsing barang <a href='list.php?cat=". $_GET['cat'] ."'>disini</a>.";
?>