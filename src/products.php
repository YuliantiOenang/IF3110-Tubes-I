<?php 
session_start();
$cat = $_GET['category'];
$pageTitle = "Produk ".$cat;
$section = "product";
include('header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Daftar Produk</h1>

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