<?php
	include("header.php");
	include("connect-mysql.php");
	include("functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Successful!</title>

</head>

<body>
	<script>
		if (!localStorage.username) {
			window.location = "Register.php";
		}
	</script>
	<?php 
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid= $_SESSION['cart'][$i]['productid'];
			$q= $_SESSION['cart'][$i]['qty'];
			
			$data = mysql_query("SELECT * FROM product WHERE id = ".$pid);
			$row = mysql_fetch_array($data);
			if($row['quantity'] < $q) {
				die("Not enough ".$row['name']." in our stock. Please try again later.");
			}
			
			$result = mysql_query("UPDATE product SET sold = sold + ".$q.", quantity = quantity - ".$q." WHERE id = ".$pid);
			if(!$result) {
				die("Your order cannot be placed! Please try again later.");
			}
		}
		
		for($i=0;$i<$max;$i++){
			unset($_SESSION['cart'][$i]);
		}
		unset($_SESSION['cart']);
	?>
	Your order has been placed! Thank you for buying from us! <br />
	<a href="index.php">Kembali</a>
</body>
</html>
