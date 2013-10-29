<?php
	include("connect.php");
	include("functions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>

<html>
<head>
	<title>Shopping Cart</title>
	<script language="javascript">
		function del(pid){
			if(confirm('Are you seure you want to delete this item?')){
				document.form1.pid.value=pid;
				document.form1.command.value='delete';
				document.form1.submit();
			}
		}
		function clear_cart(){
			if(confirm('This will empty your shopping cart, continue?')){
				document.form1.command.value='clear';
				document.form1.submit();
			}
		}
		function update_cart(){
			document.form1.command.value='update';
			document.form1.submit();
		}
	</script>
</head>

<body>
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
    <h1>Your Shopping Cart</h1>
    <input type="button" value="Continue Shopping" onclick="window.location='product.php'" /><br><br><br>
    <?php=$msg?>
    	<?php
			if(is_array($_SESSION['cart'])){
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<?php echo $i+1?><br>
					<?php echo 'Nama Barang : ' . $pname?><br>
                    <?php echo 'Harga : ' . convert_to_rupiah(get_price($pid))?><br>
                    Banyaknya : <input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="3"/><br>                  
                    Total : <?php echo convert_to_rupiah((get_price($pid))*$q)?><br>
                    <a href="javascript:del(<?php echo $pid?>)">Remove Barang</a><br></br>
            <?php					
				}
			?>
				<br><br>Harga Total: <?php echo convert_to_rupiah(get_order_total())?><br><br>
				<input type="button" value="Clear Cart" onclick="clear_cart()"><input type="button" value="Update Cart" onclick="update_cart()"><input type="button" value="Buy" onclick="window.location='billing.php'"><br>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
</form>
</body>
</html>