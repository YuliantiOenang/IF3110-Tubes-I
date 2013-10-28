<!DOCTYPE html>
<html>
<head>
<title>Shopping Bag</title>
	<script language="javascript" type="text/javascript">
		function changeTextarea(bool,idis) {
			if(bool) { document.getElementById(idis).readOnly = false;}
			else { document.getElementById(idis).readOnly = true;}}
	</script>
</head>
<body>
	<input type="button" value="Continue Shopping" onclick="window.location='product.php'" />
	<?php
		include ("functions.php");
		session_start();
		if(isset($_POST["sum"], $_SESSION['id'])):
			$sum = $_POST["sum"];
			$id=$_SESSION['id'];
			addtocart($id, $sum , 1);
		else:
			//echo 'session problem';
		endif;
	?>
    <h1>Your Shopping Bag</h1>
    <?php
		$sql = "SELECT * FROM order_detail";
		$hasil = mysqli_query($con,$sql);
		$total = 0;
		while($row = mysqli_fetch_array($hasil)){
			//$something = 'something'.$row['productid'];
			//$rows = $row['productid'];
			//$some = 'something';
			//echo $something;
			//echo '".something."';
			//echo "$some$rows";
			if(isset($_POST['$some$rows']))
				$quantity = $_POST['$some$rows'];
			else {
				$quantity = $row['quantity'];
			}
	?>
			ID order	:<?php echo $row['orderid']?><br>
			Nama	: <?php echo $row['productName']?><br>
			Harga Satuan	: <?php echo convert_to_rupiah($row['price'])?><br>
			Banyaknya		:
			<form method="post" action="shoppingcart.php">
				<textarea name="something" id="something" readonly><?php echo $quantity?></textarea><br />
				<input type="button" value="Edit" onclick="changeTextarea(this.onclick,'something')" />
				<input type="submit" value="Save" />
			</form>
	<?php 
			$subTotal	= $row['price']*$quantity;
			echo 'Total	= ' . convert_to_rupiah($subTotal);
			$total = $total + $subTotal;
			echo '<br><br><br>';
		}
	?>
	Total Keseluruhan = <?php echo convert_to_rupiah($total)?><br><br>
	<?php
		/*$i = 1;
		if($i == 1){
			kurangiSemua(1);
	?>
			<input type="button" value="Buy" onclick="window.location='shoppingcart.php'" />
	<?php
		}*/
	?>
</body>
</html>