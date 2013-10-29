<?php
	$con=mysqli_connect("localhost","root", "", $CONFIG['mysql']['database'] );
	if(mysqli_connect_errno()){
			echo "Gagal Buka DB" . msqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo SITEURL . '/include/css/style.css'?>">	
		<link rel="stylesheet" type="text/css" href="<?php echo SITEURL . '/include/css/test.css' ?>">	
	</head>
	
	<body>

		<?php require SITEPATH . '/app/views/header.php'?>
		
		
		<!-- CONTENT -->
		<div class="searchResult">
			<?php 
				error_reporting(0);
				if(!empty($keyword)){										
					$query ="SELECT * FROM product WHERE category='";
					if(strcasecmp($keyword,"Elektronik")==0){
							$query=$query . "Elektronik";
						}else if(strcasecmp($keyword,"Sandang")==0){
							$query=$query . "Sandang";
						}else if(strcasecmp($keyword,"Otomotif")==0){
							$query=$query . "Otomotif";
						}		
					
					$query=$query . "' OR product_name LIKE '%" . $keyword . "%';";
					
					if ($stmt=mysqli_prepare($con,$query)){

						/* execute query */
						mysqli_stmt_execute($stmt);

						/* store result */
						mysqli_stmt_store_result($stmt);
						
						$count=mysqli_stmt_num_rows($stmt);
						echo "Ditemukan <b>". $count . "</b> hasil pencarian untuk &quot;<b>" . $keyword . "</b>&quot;<br>";
						
						/* close statement */
						mysqli_stmt_close($stmt);
					}																							
				}else if(!empty($category)){
					$arrCat=array("Elektronik", "Otomotif", "Sandang");					
					$query ="SELECT * FROM product WHERE category=";
					$query=$query . "'". $category . "'". ";";																	
					echo "Berikut barang yang tersedia pada kategori <b>" . $category . "</b>";
				} else {
					//echo 'AAAAAAAAA';
				}					
				
				//echo $query;
				$result=mysqli_query($con,$query);;

				if (!$result) {
					printf("Error: %s\n", mysqli_errno($con));
					//exit();
				}
				
				echo "<ul>";										
				while($row=mysqli_fetch_array($result)){					
					echo "	<ul>
								<li> 
									<img src=" . SITEURL . '/include/' . $row['image_link']  . ">
								</li>
								
								<li>
									Nama Barang<br>
									Harga<br>
									Jumlah Stock<br>
								</li>
																	
								<li>							
									: " . $row['product_name'] . "<br>
									: " . $row['price'] . "<br>
									: " . $row['stock_count'] . "<br>								
								</li>
								
								<li>							
									Quantity <input type=&quot;number&quot; name=&quot;quantity&quot;><br><br>
									<center><button type=button class=buttonBeli> BELI </button></center>
								</li>

							</ul>";		
				}									
				echo "</ul>";
			?>
		</div>
	</body>
</html>