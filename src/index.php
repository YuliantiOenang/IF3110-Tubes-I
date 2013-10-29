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
			<h3>Makanan</h3>
			<div class="content_item">
				<ul class="horizontal_list">
				<?php
					$query = "SELECT * FROM barang WHERE kategori=0 ORDER BY jumlah_jual DESC LIMIT 0,3";
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
			<h3>Minuman</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=1 ORDER BY jumlah_jual DESC LIMIT 0,3";
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
			<h3>Alat Tulis</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=2 ORDER BY jumlah_jual DESC LIMIT 0,3";
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
			<h3>Kebersihan</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=3 ORDER BY jumlah_jual DESC LIMIT 0,3";
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
			<h3>Obat</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<?php
					$query = "SELECT * FROM barang WHERE kategori=4 ORDER BY jumlah_jual DESC LIMIT 0,3";
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
			<p>Mekanisme pembelian di RuSerBa :
			<ol>
				<li> Login sebagai pengguna. Jika belum punya akun silahkan <a href="register.php">register</a>. </li>
				<li> Pilih barang-barang yang akan dibeli. Barang akan masuk ke shopping bag.</li>
				<li> Masuk ke shopping bag, klik tombol beli.</li>
				<li> Masukan data kartu kredit anda.</li>
				<li> Barang anda akan dikirim ke alamat anda.</li>
			</ol><p>
			</div>
		</div>
	</body>
</html>