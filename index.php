<!DOCTYPE HTML>
<html>
	<?php
		include 'db.php';
		include 'macro/header.php';
	?>
	<body>
		<div id="homeContent">	
		<ul id="itemPic">
			<li>
				<div class="divimg">
					<?php
						$makanan = mysqli_query($link, "SELECT gambar FROM barang WHERE kategori=1 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<div class=\"center-cropped\" style=\"background-image: url('".$row['gambar']."');\"></div>";
						}
					?>
				</div>
				<div class="itemInf">
					<h2>Makanan</h2>
					<p>Nikmati makanan<br>dengan kualitas premium</p>
					<?php
						$makanan = mysqli_query($link, "SELECT id, nama FROM barang WHERE kategori=1 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<a href=\"barang.php?id=".$row['id']."\" title=\"Makanan\">".$row['nama']."</a>";
						}
					?>
				</div>
			</li>
			<li>
				<div class="divimg">
					<?php
						$makanan = mysqli_query($link, "SELECT gambar FROM barang WHERE kategori=2 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<div class=\"center-cropped\" style=\"background-image: url('".$row['gambar']."');\"></div>";
						}
					?>
				</div>
				<div class="itemInf">
					<h2>Minuman</h2>
					<p>Kesegarannya abadi<br>tuk hilangkan dahaga</p>
					<?php
						$makanan = mysqli_query($link, "SELECT id, nama FROM barang WHERE kategori=2 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<a href=\"barang.php?id=".$row['id']."\" title=\"Minuman\">".$row['nama']."</a>";
						}
					?>
				</div>
			</li>
			<li>
				<div class="divimg">
					<?php
						$makanan = mysqli_query($link, "SELECT gambar FROM barang WHERE kategori=3 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<div class=\"center-cropped\" style=\"background-image: url('".$row['gambar']."');\"></div>";
						}
					?>
				</div>
				<div class="itemInf">
					<h2>Pakaian</h2>
					<p>Edisi terbatas berarti<br>anda-lah pusat perhatian</p>
					<?php
						$makanan = mysqli_query($link, "SELECT id, nama FROM barang WHERE kategori=3 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<a href=\"barang.php?id=".$row['id']."\" title=\"Pakaian\">".$row['nama']."</a>";
						}
					?>
				</div>
			</li>
			<li>
				<div class="divimg">
					<?php
						$makanan = mysqli_query($link, "SELECT gambar FROM barang WHERE kategori=4 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<div class=\"center-cropped\" style=\"background-image: url('".$row['gambar']."');\"></div>";
						}
					?>
				</div>
				<div class="itemInf">
					<h2>Rumah</h2>
					<p>Hunian mewah di kawasan elit<br>daratan Cina</p>
					<?php
						$makanan = mysqli_query($link, "SELECT id, nama FROM barang WHERE kategori=4 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<a href=\"barang.php?id=".$row['id']."\" title=\"Rumah\">".$row['nama']."</a>";
						}
					?>
				</div>
			</li>
			<li>
				<div class="divimg">
					<?php
						$makanan = mysqli_query($link, "SELECT gambar FROM barang WHERE kategori=5 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<div class=\"center-cropped\" style=\"background-image: url('".$row['gambar']."');\"></div>";
						}
					?>
				</div>
				<div class="itemInf">
					<h2>Plus-Plus</h2>
					<p>不用问。<br>只需点击它！</p>
					<?php
						$makanan = mysqli_query($link, "SELECT id, nama FROM barang WHERE kategori=5 ORDER BY terjual DESC LIMIT 3");
						while ($row = mysqli_fetch_array($makanan, MYSQLI_ASSOC)) {
							echo "<a href=\"barang.php?id=".$row['id']."\" title=\"Plus-Plus\">".$row['nama']."</a>";
						}
					?>
				</div>
			</li>
		</ul>
	</div>
	</body>
</html>