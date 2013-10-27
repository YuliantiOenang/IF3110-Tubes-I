<?php
	include "config/connect.php";
	
	$card_number = $_GET["card_number"];
	$card_name = $_GET["card_name"];
	$card_expired = $_GET["card_expired"];
	$return = array();
	
	$arrCardName = mysql_query("SELECT card_name FROM kartu_kredit WHERE card_name = '$card_name'");
	if(arrCardName.length >0){
		echo json_encode($return);
	}else{
		$return["status"] = false;
		echo json_encode($return);
	}
?>