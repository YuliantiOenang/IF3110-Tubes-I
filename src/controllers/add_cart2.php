<?php
	//get the q parameter from URL
	$amount=$_GET["amount"];
	$id=$_GET["id"];
	$desc = $_GET['desc'];
	
	//$amount = 1;
	//$id = 1;
	
	//lookup all hints from array if length of q>0
	include ("connect_database.php");

	//get names
	$result = mysqli_query($con,"SELECT * FROM inventori WHERE id_inventori = ".$id);
	
	$data = null;
	while($row = mysqli_fetch_array($result)){
		$data = $row;
		break;
	}
	
	$number = $data['jumlah'];
	$tag = $data['nama_inventori'];
	
	//checking if item count > 0
	$result = null;
	$counts = 0;
	
	session_start();
	$counts_permintaan = 0;
	if(isset($_SESSION['permintaan'])){
		$counts_permintaan = sizeof($_SESSION["permintaan"]);
	}
	
	if(isset($_SESSION["shopping_bag"])){
		$counts = sizeof($_SESSION["shopping_bag"]);
	}
	
	if($amount > $number){
		echo 3;
	} else{
		if(!isset($_SESSION[$tag."desc"])){
			$arr3 = array($counts_permintaan => $tag);
			$_SESSION[$tag."desc"] = $desc;
			if(!isset($_SESSION['permintaan'])){
				$result2 = $arr3;
			} else{
				$arr4 = $_SESSION['permintaan'];
				$result2 = array_merge($arr4, $arr3);
			}
			$_SESSION["permintaan"] = $result;
		} else{
			$_SESSION[$tag."desc"] = $desc;
		}
		if(!isset($_SESSION[$tag])){
			$arr2 = array($counts => $tag);
			$_SESSION[$tag] = $amount;
			if(!isset($_SESSION['shopping_bag'])){
				$result = $arr2;
				echo 2;
			} else{
				$arr1 = $_SESSION['shopping_bag'];
				$result = array_merge($arr1, $arr2);
				echo 1;
			}
			$_SESSION["shopping_bag"] = $result;
		} else{
			echo 0;
			$_SESSION[$tag] = $amount;
		}
	}
?>