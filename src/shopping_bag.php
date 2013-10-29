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
		
		<script>
			function updateTotal(idx,max_id_belanja) {
				var jumlah = document.getElementById("jumlah"+idx).value;
				var hargaSatuan = document.getElementById("harga"+idx).innerHTML;
				var totalHarga = jumlah * hargaSatuan;

				document.getElementById("total"+idx).innerHTML = totalHarga;				

				var totalHargaSemua = 0;
				for(var i=0;i<max_id_belanja;i++){
					var total = document.getElementById("total"+i).innerHTML;
					totalHargaSemua = totalHargaSemua + parseInt(total);
					console.log(total);
				}
				document.getElementById("totalHarga").innerHTML = totalHargaSemua;				
			}
		</script>
		
		<div class="body">
            <h3>Shopping Bag</h3>
			<div class="content_item">
			<ul class="horizontal_list">
			<?php
				if(isset($_SESSION['userid'])){
					$query = "SELECT * FROM cart JOIN barang WHERE '".$_SESSION['userid']."'=cart.username AND cart.id_barang=barang.id_barang AND cart.paid=0 ORDER BY cart.jumlah DESC";
					$result = mysql_query($query, $link);
					$total = 0;
					if(mysql_num_rows($result)>0) {
						$counter = 0;
						while($row = mysql_fetch_array($result)) {
							echo '<li>';
							echo '<div class="barang">';
							echo '<a href="detail.php?id='.$row['id_barang'].'">';
							$array = explode(',',$row['url_gambar']);
							echo '<img src="'.$array[0].'" />';
							echo '<h4>'.$row['nama_barang'].'</h4>';
							echo '</a>';
							echo '<label id="harga'.$counter.'"> '.$row['harga'].' </label> * ';
							echo '<input name="jumlah'.$counter.'" id="jumlah'.$counter.'" value="'.$row['jumlah'].'" onchange="updateTotal('.$counter.','.mysql_num_rows($result).')"/>';
							$total += $row['harga'] * $row['jumlah'];
							echo ' = <label id="total'.$counter.'">'.$row['harga'] * $row['jumlah'].'</label>';
							echo '</div>';
							echo '</li>';
							$counter++;
						}
						echo '<li>';
						echo '<div class="barang">';
						echo 'TOTAL = <label id="totalHarga">'.$total.'</label>';
						echo '<br> 
                        <input name="beli" id="button" type="submit" value="beli" class="button" />  
						<br>';
						if (isset($_POST['beli'])) {
							for($i=0;$i<mysql_num_rows($result);$i++){
								mysqli_query($link,"UPDATE cart SET jumlah=".$i." WHERE FirstName='Peter' AND LastName='Griffin'");
							}
						}						
						echo '</div>';
						echo '<li>';
						echo '</form>';
					} else {
						echo '</li>';
						echo '<div class="barang">';
						echo 'TIDAK ADA SHOPPING BAG YANG BELUM DIBAYAR';
						echo '</div>';
						echo '</li>';
					}
				} else {
					echo '</li>';
					echo '<div class="barang">';
					echo 'TIDAK ADA SHOPPING BAG';
					echo '</div>';
					echo '</li>';
				}
			?>
			</ul>
			</div>
        </div>
	</body>
</html>