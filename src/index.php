<?php 
session_start();
$pageTitle = "Ruserba Sinar Jaya";
$section = "home";
include('header.php'); 
?>
		<div class="section products latest">

			<div class="wrapper">

				<h2>Top Snack</h2>
				<?php include("function.php"); ?>
				<ul class="products">
					<?php 
						$list_view_html = "";
						$cat = "snack";
								$list_view_html = get_list_product($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>

				<h2>Top Minuman</h2>
				<ul class="products">
					<?php 
						$list_view_html = "";
						$cat = "minuman";
								$list_view_html = get_list_product($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>

				<h2>Top Makanan</h2>
				<ul class="products">
					<?php 
						$list_view_html = "";
						$cat = "makanan";
								$list_view_html = get_list_product($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>
				<h2>Top Properti</h2>
				<ul class="products">
					<?php 
						$list_view_html = "";
						$cat = "properti";
								$list_view_html = get_list_product($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>
				<h2>Top Buah</h2>
				<ul class="products">
					<?php 
						$list_view_html = "";
						$cat = "buah";
								$list_view_html = get_list_product($cat) . $list_view_html;
	
	
						echo $list_view_html;
					?>								
				</ul>
			

			</div>

		</div>

<?php include('footer.php') ?>