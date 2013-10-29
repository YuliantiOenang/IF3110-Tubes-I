<?php
	include("connect.php");
	include("functions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		//$name=$_REQUEST['name'];
		//$email=$_REQUEST['email'];
		//$address=$_REQUEST['address'];
		//$phone=$_REQUEST['phone'];
		
		//$result=mysql_query("insert into customers values('','$name','$email','$address','$phone')");
		//$customerid=mysql_insert_id();
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$customerid')");
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysql_query("insert into order_detail values ($orderid,$pid,$q,$price)");
			
			$stok = mysql_query("select stok from barang where id=$pid");
			$akhir = $stok - $q;
			mysql_query("update barang set stok=$akhir where productid=$pid");
		}
		die('Thank You! your order has been placed!');
	}
?>

<html>
<head>
<title>Pembayaran</title>
<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
</head>


<body>
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
        <h1>Billing Info</h1>
        	Order Total:</td><td><?php=get_order_total()?>
            Your Name:</td><td><input type="text" name="name" />
            Address:</td><td><input type="text" name="address" />
            Email:</td><td><input type="text" name="email" />
            Phone:</td><td><input type="text" name="phone" />
            &nbsp;</td><td><input type="submit" value="Place Order" />
</form>
</body>
</html>
