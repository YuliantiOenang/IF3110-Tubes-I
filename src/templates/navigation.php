<div class = "navigation">
	
	<?php 		
		if($_SESSION['state'] == 1){?>
			<div class = "text_navigation"><a href="../pages/list.php?cat=roti">Roti</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=minuman">Minuman</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=kalengan">Makanan Kalengan</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=segar">Makanan Segar</a></div>
			<div class = "text_navigation"><a href="../pages/list.php?cat=peralatan">Peralatan Rumah</a></div> 
			<?php
		}
		else{
			?>
			<div class = "text_navigation"><a href="pages/list.php?cat=roti">Roti</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=minuman">Minuman</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=kalengan">Makanan Kalengan</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=segar">Makanan Segar</a></div>
			<div class = "text_navigation"><a href="pages/list.php?cat=peralatan">Peralatan Rumah</a></div> 
		<?php } ?>
</div>