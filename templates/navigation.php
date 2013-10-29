<div class = "navigation">
	
	<?php 		
		if($_SESSION['state'] == 1){?>
			<div class = "text_navigation"><a href="../pages/list.php?cat=baking">Roti</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=beverages">Minuman</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=cansoups">Makanan Kalengan</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=fresh">Makanan Segar</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=household">Peralatan Rumah</a></div> 
			<?php
		}
		else{
			?>
			<div class = "text_navigation"><a href="pages/list.php?cat=baking">Roti</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=beverages">Minuman</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=cansoups">Makanan Kalengan</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=fresh">Makanan Segar</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=household">Peralatan Rumah</a></div> 
		<?php } ?>
</div>