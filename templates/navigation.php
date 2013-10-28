<div class = "navigation">
	
	<?php 
		$_SESSION['state'] = 1;
		
		if($_SESSION['state'] == 1){?>
			<div class = "bar_navigation"><a href="../pages/list.php?cat=baking">Baking</a></div>
			<div class = "bar_navigation"><a href="../pages/list.php?cat=beverages">Beverages</a></div>
			<div class = "bar_navigation"><a href="../pages/list.php?cat=cansoups">Canned Goods & Soups</a></div>
			<div class = "bar_navigation"><a href="../pages/list.php?cat=fresh">Fresh Food</a></div>
			<div class = "bar_navigation"><a href="../pages/list.php?cat=household">Household Essentials</a></div> 
			<?php
		}
		else{
			?>
			<div class = "bar_navigation"><a href="pages/list.php?cat=baking">Baking</a></div>
			<div class = "bar_navigation"><a href="pages/list.php?cat=beverages">Beverages</a></div>
			<div class = "bar_navigation"><a href="pages/list.php?cat=cansoups">Canned Goods & Soups</a></div>
			<div class = "bar_navigation"><a href="pages/list.php?cat=fresh">Fresh Food</a></div>
			<div class = "bar_navigation"><a href="pages/list.php?cat=household">Household Essentials</a></div> 
		<?php } ?>
</div>