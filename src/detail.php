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
			
			$id = $_GET['id'];
			$query = "SELECT * FROM barang WHERE id_barang='$id'";
			
			$result = mysql_query($query, $link);
			$barang = mysql_fetch_array($result);
		?>
		
		<script>
			function updateTotal() {
				var jumlah = document.getElementById("jumlah").value;
				var hargaSatuan = document.getElementById("hargaSatuan").innerHTML;
				var totalHarga = jumlah * hargaSatuan;
				console.log(totalHarga);
				document.getElementById("totalHarga").innerHTML = totalHarga;
				if(jumlah > <?php echo $barang['stok'];?>) {
					var alert = document.getElementById("alert");
					if(!alert) {
						addElementAtEnd("detail_barang","alert","Stok Tidak Mencukupi");
					}
					document.getElementById("buttonBeli").disabled = true;
				} else {
					var alert = document.getElementById("alert");
					if(alert) {
						removeById("alert");
					}
					document.getElementById("buttonBeli").disabled = false;
				}
			}
		</script>
		
		<div id="content_body">
			<?php
			 echo '<h3>'.$barang['nama_barang'].'</h3>';
			?>
			<form action ="#" id="detail_barang">
				<div class="content_item">
					<ul class="horizontal_list">
						<?php
							$array_pic = explode(",",$barang['url_gambar']);
							$i = 0;
							while($i < count($array_pic)) {
								echo "<li>";
								echo '<img src="'.$array_pic[$i].'" width="25%"/>';
								echo "</li>";
								$i++;
							}
						?>
					</ul>
				</div>
				<div class="desc">
				<?php
					echo $barang['detail'];
				?>
				</div>
				<br/>
				
				
				<label>Tambahan Permintaan</label>
				<br/>
				<textarea name="text1" class="textbox" ></textarea>
				<br/>
				<br/>
				
				<label>Jumlah</label>
				<input id="jumlah" type="number" value="0" class="quantity" onchange="updateTotal()"/>
				<br/>
				<label>Harga Satuan : </label><label id="hargaSatuan"><?php echo $barang['harga']; ?></label>
				<br/>
				<label>Total :</label> <label id="totalHarga">0</label>
				<br/>
				<input id="buttonBeli" type="submit" value="Beli" class="button" />
				<br/>
			</form>
		</div>
	</body>
</html>