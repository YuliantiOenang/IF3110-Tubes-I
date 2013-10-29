<?php
	include("connect.php");
	include("functions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		//$name=$_SESSION['username'];
		
		$date=date('Y-m-d');
		//$result=mysql_query("insert into orders values('','$date','$name')") or die("insert into orders"."<br/><br/>".mysql_error());
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$name=get_product_name($pid);
			$kategori=get_kategori($pid);
			mysql_query("insert into order_detail values ($orderid,$pid,'$name',$q,$price,'$kategori')") or die("insert order detail"."<br/><br/>".mysql_error());
			
			$stok = mysql_query("select stok from barang where id=$pid") or die("select stok"."<br/><br/>".mysql_error());
			$akhir = $stok - $q;
			mysql_query("update barang set stok=$akhir where id=$pid") or die("update barang set stok"."<br/><br/>".mysql_error());
		}
		die('Thank You! your order has been placed!');
	}
?>

<html>
<head>
<title>Pembayaran</title>
<script language="javascript">
	function validate(){
		f.command.value='update';
		f.submit();
	}
</script>
</head>


<body>
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
        <h1>Klik untuk membayar!</h1><br>
            &nbsp;<input type="submit" value="Bayar" />
</form>
</body>
</html>


