<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="stylesearch.css" rel="stylesheet" type="text/css" media="screen" />
	<div id="divsearch" >
		<form id="formuser" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<span id="tabuser">
				<a href="registrasi.php" style="text-decoration:none;" > <span id="menuuser1" > <b>REGISTER &nbsp; &nbsp;  </b> </span> </a> &nbsp; &nbsp; 
				<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menuuser2" > <b>LOGIN  &nbsp; &nbsp;   </b> </span> </a>  &nbsp; &nbsp;
				<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menuuser3" > <b>PROFIL  &nbsp; &nbsp;  </b> </span> </a>  &nbsp; &nbsp; 
			</span>
			<span> <img id="logotroli" src="images/cartlogo.png" height="22" width="22" > </span> &nbsp;
			<span id="cartmenu" > <b>Produk :    </b> </span> 
			<span id="cartmenu" > <b>Rp ,-  </b> </span> 
		</form> 
		<form id="formsearch" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<span> <a href="index.php"> <img id="logo" src="images/logo10.gif" height="60" width=auto > <br/>  <br/> </span>
			<span id="tabkategori">
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;" > <span id="menukategori1" > <b>BERAS &nbsp; &nbsp;  |</b> </span> </a> &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori2" > <b>ROTI  &nbsp; &nbsp;  | </b> </span> </a>  &nbsp; &nbsp;
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori3" > <b>DAGING SEGAR   &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori4" > <b>DAGING OLAHAN  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori5" > <b>SAYUR  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori6" > <b>BUAH </b> </span> </a>  &nbsp; &nbsp;
			</span> </br><br/>
			<input id="namasearch" name="namabarang" placeholder="Nama Barang" type="text"  /> 
			<select  id="kat" value="Kategori" name="kategori">
				<option value="" >Kategori</option>
				<option value="beras">Beras</option>
				<option value="roti">Roti</option>
				<option value="daging segar">Daging Segar</option>
				<option value="daging olahan">Daging Olahan</option>
				<option value="buah">Buah</option>
				<option value="sayur">Sayur</option>
			</select>
			<select id="harga" value="harga" name="harga">
				<option value="0" >Harga</option>
				<option value="1">< Rp 10.000</option>
				<option value="2">Rp 10.000 <= harga < Rp 25.000 </option>
				<option value="3">Rp 25.000 <= harga <  Rp 50.000 </option>
				<option value="4">Rp 50.000 <= harga <  Rp 75.000 </option>
				<option value="5">>= Rp 75.000</option>
			</select>
			<input id="tombol2"" name="search" type="submit" value="search" /> 
		</form>
	</div>
</head>

<body>
<form align="center" method="post" name="formCombo">
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
		
		if (isset($_GET['kategori'])) {
		$kategori='$_GET['kategori']';
		}
		
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
		$i=0;
		while($row = mysqli_fetch_array($result)){
		
			$path = $row['path']; 
			
			if ($i%2) {
			echo '<div id="divproduct">
				<form id="formproduct1" name="formregistrasi" >  <br/>
				<img src=', $path, ' height="100" width="100" > <br/>
				<span id="resultkategori"> Kategori : ' ,$row['kategori'], ' </span> <br/>
				<a href="detailProduct.php?nama=',$row['namabarang'],'">',$row['namabarang'],'</a> <br/>
				<span id=resultharga> Harga : '  ,$row['harga'], ' IDR </span> 
				</form>
				<form align="center" action="shoppingcart.php" method="post">
				<input type="number" style="width:45px;height:20px;" name="sum" min="1">
				<button type="submit" style="width:45px;height:30px;">beli</button>
				<br />
				</form
				</div>';
			} else {
				echo '<div id="divproduct">
				<form id="formproduct2" name="formregistrasi" > <br/>
				<img src=', $path, ' height="100" width="100" > <br/>
				<span id="resultkategori"> Kategori : ' ,$row['kategori'], ' </span> <br/>
				<a href="detailProduct.php?nama=',$row['namabarang'],'">',$row['namabarang'],'</a> <br/>
				<span id=resultharga> Harga : ' ,$row['harga'], ' IDR </span>
				</form>
				<form  align="center" action="shoppingcart.php" method="post">
				<input type="number" style="width:45px;height:20px;" name="sum" min="1">
				<button type="submit" style="width:45px;height:30px;">beli</button>
				<br />
				</form
				</div>';
			}
			$i=$i+1;
		}
	?>

<?=$pagination?>
</body>
</html>