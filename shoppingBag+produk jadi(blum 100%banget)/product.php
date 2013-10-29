<?php
	//if(isset($_GET['kategori']))
	//	$id = $_GET['kategori'];
    //else echo 'session problem';

	$kategori='beras';
	include("connect.php");
	include("functions.php");
	
	if ( isset($_REQUEST['command']) && $_REQUEST['command'] == 'add' && isset($_REQUEST['productid'])){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
?>

<html>

<head>
	<link href="paginasi.css" rel="stylesheet" type="text/css">
	<title>Products</title>
	<script language="javascript">
		function addtocart(pid){
			document.form0.productid.value=pid;
			document.form0.command.value='add';
			document.form0.submit();
			document.form01.submit();
		}
	</script>
</head>

<body>
<form method="post" name="formCombo">
  <select name="combo" id="combo" onChange="javascript:document.formCombo.submit();">
		<option value="urutkan">--urutkan--</option>
		<option value="namabarang">nama</option>
		<option value="harga">harga</option>
  </select>
</form>

<form name="form0">
	<input type="hidden" name="productid"/>
	<input type="hidden" name="command" />
</form>

		<h1>Products</h1>
		<?php	//paginasi
			$targetpage = "product.php"; 
			$tbl_name = "barang";
			$limit = 2;//items per page 								
			
			$page = (isset($_GET['page']) ? $_GET['page'] : null);
			if($page){
				$start = ($page - 1) * $limit; 
			}else{
				$start = 0;
			}
			
			$combo = mysql_real_escape_string(isset($_POST['combo']) ? $_POST['combo'] : 'urutkan');
			
			if($combo != 'urutkan'){
				$sql = "select * from $tbl_name where kategori = '$kategori' order by $combo asc limit $start, $limit";
			}else{
				$sql = "select * from $tbl_name where kategori = '$kategori' limit $start, $limit";
			}
				
			$result = mysql_query($sql) or die("select * from barang"."<br/><br/>".mysql_error());
			
			$adjacents = 3;
			if($combo != 'urutkan'){
				$query = "select count(*) as num from $tbl_name where kategori = '$kategori' order by $combo";
			}else{
				$query = "select count(*) as num from $tbl_name where kategori = '$kategori'" ;
			}
			
			$hasil = mysql_query($query) or die("select * from barang"."<br/><br/>".mysql_error());
			$total_pages = mysql_fetch_array($hasil);
			
			$total_pages = $total_pages['num'];
			
			if ($page == 0) $page = 1;					
				$prev = $page - 1;							
			$next = $page + 1;							
			$lastpage = ceil($total_pages/$limit);		
			$lpm1 = $lastpage - 1;
			
			$pagination = "";
			if($lastpage > 1){	
				$pagination .= "<div class=\"pagination\">";
				if ($page > 1) 
					$pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
				else
					$pagination.= "<span class=\"disabled\">previous</span>";	
				
				if ($lastpage < 7 + ($adjacents * 2)){	
					for ($counter = 1; $counter <= $lastpage; $counter++){
						if ($counter == $page)
							$pagination.= "<span class=\"current\">$counter</span>";
						else
							$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
					}
				}
				elseif($lastpage > 5 + ($adjacents * 2)){
					if($page < 1 + ($adjacents * 2)){
						for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
						}
						$pagination.= "...";
						$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
						$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
					}elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)){
						$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
						$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
						$pagination.= "...";
						for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++){
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
						}
						$pagination.= "...";
						$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
						$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
					}else{
						$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
						$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
						$pagination.= "...";
						for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
						{
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
						}
					}
				}
				
				if ($page < $counter - 1) 
					$pagination.= "<a href=\"$targetpage?page=$next\">next</a>";
				else
					$pagination.= "<span class=\"disabled\">next</span>";
				$pagination.= "</div>\n";		
			}	
		?>
		
		<?php
			$url = "detailProduct.php"; //buat ke hal detail barang
			while($row = mysql_fetch_array($result)){
				$nama = $row['namabarang'];
				echo '<img src= "'.$row['path'].'" width="150" height="150" />';
				echo "<br>";
		?>
				<a href="detailProduct.php?id=<?php echo $row['id'] ?>"><?php echo $row['namabarang'] ?></a>
			
		<?php 
				echo "<br>" . convert_to_rupiah($row['harga']);
		?>
				<br>
				<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['id']?>)" />
				<br><br><br><br><br>
		<?php 
			} 
		?>
<?php echo $pagination?>
</body>
</html>