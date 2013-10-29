<div class = "navigation">
	
	<?php 		
		if($_SESSION['state'] == 1){?>
			<div class = "text_navigation"><a href="../pages/list.php?cat=baking">Baking</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=beverages">Beverages</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=cansoups">Canned Goods & Soups</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=fresh">Fresh Food</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=household">Household Essentials</a></div> 
			<?php
		}
		else{
			?>
			<div class = "text_navigation"><a href="pages/list.php?cat=baking">Baking</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=beverages">Beverages</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=cansoups">Canned Goods & Soups</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=fresh">Fresh Food</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=household">Household Essentials</a></div> 
		<?php } ?>
</div>