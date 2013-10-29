<?php
	session_start();
	include('functions.php');

	if(isset($_REQUEST['command']) && isset($_REQUEST['productid'])) {
		if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
			$pid=$_REQUEST['productid'];
			addtocart($pid);
			header("location:shoppingcart.php");
			exit();
		}
	}

	include('header.php');
	include('connect-mysql.php');
	
	$result = mysql_query("SELECT * FROM product WHERE id = " .$_GET['product_id']) 
			or die("Error searching database.".mysql_error());
	$row = mysql_fetch_array($result);
	$title = "Product Details : " .$row['name'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> <?php echo $title; ?>  </title>
		<script language="javascript">
			function addtocart(pid){
				document.form1.productid.value=pid;
				document.form1.command.value='add';
				document.form1.submit();
			}
		</script>
    </head>
    <body>
    	<form name="form1">
			<input type="hidden" name="productid" />
	    	<input type="hidden" name="command" />
		</form>
		<table>
			<tr>
        	<td>
				<?php 
					echo '<img src="'.$row['picture'].'">';
				?>
			</td>
            <td>   	
				<b> <?php echo $row['name']?> </b> <br />
				<?php echo '<img scr="',$row['picture'],'"/>'; ?>
            	<?php echo $row['description']?> <br />
				Price:<big style="color:green"> $<?php echo $row['price']?></big> <br /> <br />
				<form>
					<pre>Comment :</pre>
					<textarea name="comment"></textarea>
					<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['id'];?>)" />
				</form>
			</td>
		</tr>
		</table>
    </body>
</html>
