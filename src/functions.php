<?php
	mysql_connect("localhost","root","") or die("Demo is not available, please try again later");
	mysql_select_db("tubesweb") or die("Demo is not available, please try again later");

	function get_product_name($pid){
		$result=mysql_query("select namabarang from barang where id=$pid");
		$row=mysql_fetch_array($result);
		return $row['namabarang'];
	}
	function get_kategori($pid){
		$result=mysql_query("select kategori from barang where id=$pid");
		$row=mysql_fetch_array($result);
		return $row['kategori'];
	}
	function get_price($pid){
		$result=mysql_query("select harga from barang where id=$pid");
		$row=mysql_fetch_array($result);
		return $row['harga'];
	}
	function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function addtocart($pid,$q){
		echo $pid;
		if($pid<0 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
		}
	}
	function product_exists($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}
	function convert_to_rupiah($angka){
		return 'Rp '.strrev(implode('.',str_split(strrev(strval($angka)),3))).',00';
	}
	function get_jum_cart(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$q=$_SESSION['cart'][$i]['qty'];
			$sum+=$q;
		}
		return $sum;
	}
	function get_jum_transaksi($user){
		$result=mysql_query("select count(*) serial from orders where usernameCustomer=$user");
		return $result;
	}
?>