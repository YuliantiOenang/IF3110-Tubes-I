<?php 
session_start();
if (!$_GET['category']) {
	header("Location:index.php");
	exit();
}
$cat = $_GET['category'];
$pageTitle = "Produk ".$cat;
$section = "product";
include('header.php'); ?>

		<div class="section products page">

			<div class="wrapper">

				<h1>Daftar Produk <?php echo $cat; ?></h1>

				<?php include("function.php"); ?>
				<ul class="products">
					<?php 
						$list_view_html = "";
								$list_view_html = getAllProducts($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>

			</div>

		</div>

<?php include('footer.php') ?>