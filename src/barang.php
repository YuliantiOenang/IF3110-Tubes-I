<?php
	session_start();
	ob_start();
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
?>
<html>
	<head>
		<title>RuSerBa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
	</head>
	<body>
		<?php
			include 'header.php';
		?>
		
		<div id="content_body">
			<h3 ><a href="makanan.php">Makanan</a> </h3>
			<div class="content_item">
				<ul class="horizontal_list">
				<?php
					$query = "SELECT * FROM barang WHERE kategori=0 ORDER BY jumlah_jual ";
					$result = mysql_query($query, $link);
					if(mysql_num_rows($result)>0) {
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '<div>'.$row['harga'].'</div>';
							echo '</a>';
							echo '</div>';
							echo '</li>';
						}
					}
				?>
				</ul>
			</div>
			<h3 ><a href="minuman.php">Minuman</a> </h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=1 ORDER BY jumlah_jual ";
					$result = mysql_query($query, $link);
					if(mysql_num_rows($result)>0) {
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '<div>'.$row['harga'].'</div>';
							echo '</a>';
							echo '</div>';
							echo '</li>';
						}
					}
				?>
				</ul>
			</div>
			<h3 ><a href="alattulis.php">Alat Tulis</a> </h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=2 ORDER BY jumlah_jual ";
					$result = mysql_query($query, $link);
					if(mysql_num_rows($result)>0) {
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '<div>'.$row['harga'].'</div>';
							echo '</a>';
							echo '</div>';
							echo '</li>';
						}
					}
				?>
				</ul>
			</div>
			<h3 ><a href="kebersihan.php">Kebersihan</a> </h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=3 ORDER BY jumlah_jual ";
					$result = mysql_query($query, $link);
					if(mysql_num_rows($result)>0) {
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '<div>'.$row['harga'].'</div>';
							echo '</a>';
							echo '</div>';
							echo '</li>';
						}
					}
				?>
				</ul>
			</div>
			<h3 ><a href="obat.php">Obat</a> </h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=4 ORDER BY jumlah_jual ";
					$result = mysql_query($query, $link);
					if(mysql_num_rows($result)>0) {
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '<div>'.$row['harga'].'</div>';
							echo '</a>';
							echo '</div>';
							echo '</li>';
						}
					}
				?>
				</ul>
			</div>
			<h3>Mekanisme Belanja</h3>
			<div class="content_item">
			<p>Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.<p>
			</div>
		</div>
	</body>
</html>