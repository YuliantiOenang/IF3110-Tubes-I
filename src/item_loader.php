		<?php
			$category = $_GET["c"];
			$con = mysqli_connect("localhost","root","","ruserba");
			if(mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$result = mysqli_query($con, "SELECT * FROM barang WHERE kategori = '" . $category ."'");
			
			for($i = 0; $i < 10 && $nama = mysqli_fetch_array($result); $i++) {
				
				echo '<div style="padding-top:200px">
						<div style="text-align:center">
							<img src="'. $nama['image'] . '" width="300" height="300">
							<div>
								<a href="detail.php?name=' . $nama['nama_barang'] . '">' . $nama['nama_barang'] . '</a><br>Rp ' . $nama['harga'] . ',-
								<form>
									Jumlah :
									<input type="number" size="4" name="sum">
									<input type="submit" value="Buy">
								</form>
							</div>
						</div>
					</div>';
			}
			mysqli_close($con);
		?>