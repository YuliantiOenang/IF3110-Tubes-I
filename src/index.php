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
					$query = "SELECT * FROM barang WHERE kategori=0 ORDER BY stok DESC LIMIT 0,3";
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
					<li>
					<div class="barang">
						<img src="img/items/aqua.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src="img/items/sirup.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src= "img/items/bir.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
				</ul>
			</div>
			<h3>Alat Tulis</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li>
					<div class="barang">
						<img src="img/items/pen.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src="img/items/paper.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src= "img/items/ruler.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
				</ul>
			</div>
			<h3>Kebersihan</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li>
					<div class="barang">
						<img src="img/items/sapu.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src="img/items/serokan.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src= "img/items/kemoceng.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
				</ul>
			</div>
			<h3>Obat</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li>
					<div class="barang">
						<img src="img/items/obatflu.jpg"  />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src="img/items/kondom.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
					<li>
					<div class="barang">
						<img src= "img/items/baygon.jpg" />
						<h4>Beras</h4>
						<div>Rp. 9.000,00</div>
					</div>
					</li>
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