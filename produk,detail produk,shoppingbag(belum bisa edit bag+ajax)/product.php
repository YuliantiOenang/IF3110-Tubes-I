<!DOCTYPE html>
<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" name="formCombo">
  <select name="combo" id="combo" onChange="javascript:document.formCombo.submit();">
		<option value="urutkan">--urutkan--</option>
		<option value="namabarang">nama</option>
		<option value="harga">harga</option>
  </select>
</form>

	<?php
		include ("functions.php");
		session_start();
		$con=mysqli_connect("localhost","root","","tubesweb");
		
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	?>
		
	<?php
		if (isset($_GET['nama']))
			$kategori=$_GET['nama'];
		
		/* Setup vars for query. */
		$targetpage = "product.php"; 	
		$limit = 2; 								//how many items to show per page
		//$page = $_GET['page'];
		$page = (isset($_GET['page']) ? $_GET['page'] : null);
		if($page) 
			$start = ($page - 1) * $limit; 			//first item to display on this page
		else
			$start = 0;								//if no page var is given, set start to 0
		
		/* Get data */
		$tbl_name="barang";		//table's name
		$combo = mysql_real_escape_string(isset($_POST['combo']) ? $_POST['combo'] : 'urutkan');
		
		if($combo != 'urutkan'):
			$sql = "SELECT * FROM $tbl_name WHERE kategori = '$kategori' ORDER BY $combo ASC LIMIT $start, $limit";
		else:
			$sql = "SELECT * FROM $tbl_name WHERE kategori = '$kategori' LIMIT $start, $limit";
		endif;
		
		$result = mysqli_query($con,$sql);
		
		// How many adjacent pages should be shown on each side?
		$adjacents = 3;
		if($combo != 'urutkan'):
			$query = "SELECT COUNT(*) as num FROM $tbl_name WHERE kategori = '$kategori' ORDER BY $combo";
		else:
			$query = "SELECT COUNT(*) as num FROM $tbl_name WHERE kategori = '$kategori'" ;
		endif;
		
		$total_pages = mysqli_fetch_array(mysqli_query($con,$query));
		$total_pages = $total_pages['num'];
		
		/* Setup page vars for display. */
		if ($page == 0) $page = 1;					//if no page var is given, default to 1.
		$prev = $page - 1;							//previous page is page - 1
		$next = $page + 1;							//next page is page + 1
		$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
		$lpm1 = $lastpage - 1;						//last page minus 1
		
		/* 
			Now we apply our rules and draw the pagination object. 
			We're actually saving the code to a variable in case we want to draw it more than once.
		*/
		$pagination = "";
		if($lastpage > 1)
		{	
			$pagination .= "<div class=\"pagination\">";
			//previous button
			if ($page > 1) 
				$pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
			else
				$pagination.= "<span class=\"disabled\">previous</span>";	
			
			//pages	
			if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
			{	
				for ($counter = 1; $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
			elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
			{
				//close to beginning; only hide later pages
				if($page < 1 + ($adjacents * 2))		
				{
					for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
					{
						if ($counter == $page)
							$pagination.= "<span class=\"current\">$counter</span>";
						else
							$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
					}
					$pagination.= "...";
					$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
					$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
				}
				//in middle; hide some front and some back
				elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
				{
					$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
					$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
					$pagination.= "...";
					for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
					{
						if ($counter == $page)
							$pagination.= "<span class=\"current\">$counter</span>";
						else
							$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
					}
					$pagination.= "...";
					$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
					$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
				}
				//close to end; only hide early pages
				else
				{
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
			
			//next button
			if ($page < $counter - 1) 
				$pagination.= "<a href=\"$targetpage?page=$next\">next</a>";
			else
				$pagination.= "<span class=\"disabled\">next</span>";
			$pagination.= "</div>\n";		
		}
	?>

	<?php
		$url = "detailProduct.php";
		echo "<br><br>";
		while($row = mysqli_fetch_array($result)){
			$nama = $row['namabarang'];
			echo '<img src= "'.$row['path'].'" width="150" height="150" />';
			echo "<br>";
	?>
			<a href="detailProduct.php?nama=<?php echo $row['namabarang'] ?>"><?php echo $row['namabarang'] ?></a>
	<?php
			echo "<br>" . convert_to_rupiah($row['harga']);
			echo "<br>";
	?>
			<form action="shoppingcart.php" method="post">
				<input type="number" style="width:45px;height:20px;" name="sum" min="1">
				<button type="submit" style="width:45px;height:30px;">beli</button>
				<?php
					$_SESSION['id']=$row['id'];
				?>
				<br />
			</form
	<?php
			echo "<br><br><br><br>";
		}
	?>

<?=$pagination?>
</body>
</html>