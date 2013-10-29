<?php
	session_start();
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
?>
<html>
	<head>
		<title>Search for : <?php echo $_GET['name']; ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<?php
			include 'header.php';
			
			$res = null;
			
			if(isset($_GET['name'])) {
				$name = $_GET['name'];
				$kategori = $_GET['kategori'] or -1;
				$min_harga = $_GET['harga_min'] or 0;
				$max_harga = $_GET['harga_max'] or 0;
				if(isset($_GET['idx'])) {
					$start_idx = $_GET['idx'];
				} else {
					$start_idx = -1;
				}
				
				if($kategori == '') {
					if($min_harga <= 0 && $max_harga <= 0) {
						$query = "SELECT * FROM barang WHERE nama_barang LIKE '%$name%'";
					} else {
						$query = "SELECT * FROM barang WHERE nama_barang LIKE '%$name%' AND harga>$min_harga AND harga<$max_harga";
					}
				} else {
					if($min_harga <= 0 && $max_harga <= 0) {
						$query = "SELECT * FROM barang WHERE nama_barang LIKE '%$name%' AND kategori='$kategori'";
					} else {
						$query = "SELECT * FROM barang WHERE nama_barang LIKE '%$name%' AND kategori='$kategori' AND harga>$min_harga AND harga<$max_harga";
					}
				}
				if($start_idx >= 0) {
					$query = $query."  LIMIT $start_idx,10";
				}
				
				$res = mysql_query($query, $link);
			}
		?>
		
		<div id="content_body">
			<h3>SEARCH</h3>
			<div id="searchBox">
				<form action = "search.php">
					<ul class="horizontal_list" >
						<li>
							<input name="name" type="text" placeholder="Nama barang"/>
						</li>
						<li>
							<select name="kategori">
								<option value="0">Makanan</option>
								<option value="1">Minuman</option>
								<option value="2">Alat Tulis</option>
								<option value="3">Kebersihan</option>
								<option value="4">Obat-obatan</option>
							</select>
						</li>
						<li>
							<input class="input_harga" name="harga_min" type="number" value="0" step="1000" />-<input name="harga_max" type="number" value="0" class="input_harga" step="1000" />
						</li>
						<li>
							<input name="button_search" type="submit" value="search" class="button"/>
						</li>
					</ul>
				</form>
			</div>
			<div id="paginasi">
				<ul class="horizontal_list" >
					
					<?php
							if(mysql_num_rows($res)>0) {
								if(isset($_GET['idx'])) {
									$start_idx = $_GET['idx'];
								} else {
									$start_idx = -1;
								}
				
								
								
								$name = "";
								if(isset($_GET['name'])){
									$name = $_GET['name'];
								}
								if(isset($_GET['count'])) {
									$count = $_GET['count'];
								} else {
									$count = mysql_num_rows($res);
									$count = ($count - $count%10) / 10;
								}
								
								echo '<li>';
								echo '<a href="?name='.$name.'&idx='.(0).'&count='.$count.'"><<</a>';
								echo '</li>';
								echo '<li>';
								$idx = $start_idx - 10;
								if($idx <= 0) $idx = 0;
								echo '<a href="?name='.$name.'&idx='.($idx).'&count='.$count.'"><</a>';
								echo '</li>';
								for($iter = 0; $iter <= $count; $iter++) {
									echo '<li> <a href="?name='.$name.'&idx='.($iter * 10).'&count='.$count.'">'.$iter.'</a></li>';
								}
								echo '<li>';
								$idx = $start_idx + 10;
								if($idx >= $count*10) $idx = $count*10;
								echo '<a href="?name='.$name.'&idx='.($idx).'&count='.$count.'">></a>';
								echo '</li>';
								echo '<li>';
								echo '<a href="?name='.$name.'&idx='.($count*10).'&count='.$count.'">>></a>';
								echo '</li>';
								
							}
					?>
				</ul>
			</div>
			<div id="search_result">
				<?php
					if(mysql_num_rows($res)>0) {
						$count = 0;
						while($row = mysql_fetch_array($res)) {
							if($count >= 10) break;
							echo '<div class="search_item_result">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							if(strlen($row['detail']) > 200) {
								echo '<p>'.substr($row['detail'],0,200).'...</p>';
							} else {
								echo '<p>'.$row['detail'].'</p>';
							}
							echo '</a></div><hr/>';
							$count++;
						}
					} else {
						echo '<div class="search_item_result">';
						echo 'There\'s No Result';
						echo '</div>';
					}
				?>
			</div>
		</div>
	</body>
</html>