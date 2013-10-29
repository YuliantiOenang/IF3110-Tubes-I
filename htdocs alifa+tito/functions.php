<?php
	$con=mysqli_connect("localhost","root","","tubesweb");
	
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	function get_product_name($pid){
		$con=mysqli_connect("localhost","root","","tubesweb");
		$result=mysqli_query($con, "select namabarang from barang where id=$pid") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		$row=mysqli_fetch_array($result);
		return $row['namabarang'];
	}
	function get_price($pid){
		//$con=mysqli_connect("localhost","root","","tubesweb");
		$result=mysqli_query(mysqli_connect("localhost","root","","tubesweb"), "select harga from barang where id=$pid") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		$row=mysqli_fetch_array($result);
		return $row['harga'];
	}
	/*function kurangiJumlah($quan, $pid){
		$con=mysqli_connect("localhost","root","","tubesweb");
		$result = mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT stok FROM barang WHERE id=$pid") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		$row = mysqli_fetch_array($result));
		$akhir = $row['stok'] - $quan;
		mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"UPDATE barang SET stok=$akhir WHERE productid=$pid");
		mysqli_close($con);
	}*/
	function updateQuantity($quan, $pid){
		$con=mysqli_connect("localhost","root","","tubesweb");
		mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"UPDATE order_detail SET quantity=$quan WHERE productid=$pid");
		mysqli_close($con);
	}
	function addQuantity($quan, $pid){
		$con=mysqli_connect("localhost","root","","tubesweb");
		$result = mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT quantity FROM order_detail WHERE productid=$pid") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		$row = mysqli_fetch_array($result);
		$akhir = $quan+$row['quantity'];
		mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"UPDATE order_detail SET quantity=$akhir WHERE productid=$pid");
		mysqli_close($con);
	}
	function addtocart($pid,$q,$serial){
		$con=mysqli_connect("localhost","root","","tubesweb");
		$nama=get_product_name($pid);
		$cost=get_price($pid);
		if(isExist($pid))
			addQuantity($q, $pid);
		else
			mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"INSERT INTO order_detail (orderid, productid, productName, quantity, price) VALUES($serial,$pid,'$nama',$q,$cost)");
		mysqli_close($con);
	}
	function isExist($pid){
		$flag=0;
		//$con=mysqli_connect("localhost","root","","tubesweb");
		$result=mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT productid FROM order_detail") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		while($row = mysqli_fetch_array($result)){
			if($pid==$row['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}
	/*function kurangiSemua($orderid){
		$result=mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT * FROM order_detail WHERE orderid=$orderid");
		$result2=mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT id FROM barang") or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		while($row = mysqli_fetch_array($result)){
			while($row2 = mysqli_fetch_array($result2)){
				if($row['productid'] = $row2['id'])
					kurangiJumlah($row['quantity'], $row2['id']);
			}
		}	
	}*/
	function getStok($pid){
		$result=mysqli_query(mysqli_connect("localhost","root","","tubesweb"),"SELECT stok FROM barang WHERE id=$pid")  or die("select namabarang from barang where id=$pid"."<br/><br/>".mysql_error());
		$row = mysqli_fetch_array($result);
		return $row['stok'];
	}
	function convert_to_rupiah($angka){
		return 'Rp '.strrev(implode('.',str_split(strrev(strval($angka)),3))).',00';
	}
?>