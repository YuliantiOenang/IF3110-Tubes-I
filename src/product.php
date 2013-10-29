<?php 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
}
if (!isset($_GET["id"])) {
	header("Location: index.php");
	exit();
}

$section = "product";
$pageTitle = "Produk Ruserba";

mysql_connect("localhost", "root", "") or die("problem with connection...");
mysql_select_db("ruserba");
$query = mysql_query("SELECT * FROM `produk` WHERE id='".$product_id."'");
		$numrows = mysql_num_rows($query);

		if($numrows != 0){
			while($row = mysql_fetch_assoc($query)){
				$id = $row['id'];
	            $name = $row['nama'];
	            $img = $row['image'];
	            $harga = $row['harga'];
	            $kategori = $row['kategori'];
	            $stok = $row['stok'];
	            $keterangan = $row['keterangan'];
			}
			} 


include("header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="<?php echo "products.php?category=".$kategori; ?>" ><?php echo $kategori; ?></a> &gt; <?php echo $name; ?></div>

				<div class="product-picture">
					<span>
						<img src="<?php echo $img; ?>" alt="<?php echo $name; ?>">
					</span>
				</div>

				<div class="product-details">

					<h1> <?php echo $name; ?></h1>
					<h2><span class="price">Harga : Rp <?php echo $harga; ?></span></h2>
					<h2>Stok : <?php echo $stok; ?></h2>
					<h2>Keterangan : </h2><p><?php echo $keterangan; ?></p>


				</div>

			</div>

		</div>

<?php include("footer.php"); ?>