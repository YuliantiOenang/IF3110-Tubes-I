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
			} 


include("header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="products.php?=".<?php echo $kategori; ?> ><?php echo $kategori; ?></a> &gt; <?php echo $name; ?></div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>

				<div class="shirt-details">

					<h1> <?php echo $nama; ?></h1>
					<h2><span class="price">Harga : Rp <?php echo $harga; ?></span></h2>

					

					<p class="note-designer">* All shirts are designed by Mike the Frog.</p>

				</div>

			</div>

		</div>

<?php include("footer.php"); ?>