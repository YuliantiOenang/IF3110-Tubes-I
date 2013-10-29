<?php
	include("connect.php");
	include("functions.php");
	session_start();
	$username=$_SESSION['username'];
?>

<?php
	
	$con=mysql_connect("localhost","root",null) or die("cannot connect");
	mysql_select_db("tubesweb")or die("cannot select DB");
	
	$query="select nokartukredit from user where username like '%$username%' ";
	$res=mysql_query($query, $con) or die ('Unable to run query:'.mysql_error());

	
	if ($res==NULL) {
		echo'<script> window.location="registrasikartu.php"; </script> ';
	} else {
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$username')") or die("insert into orders"."<br/><br/>".mysql_error());
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
		echo'<script type="text/javascript">
				alert("Thank You! your order has been placed!i");	
			 </script>';
		unset($_SESSION['cart']);
		echo'<script> window.location="index.php"; </script> ';
	}
?>


