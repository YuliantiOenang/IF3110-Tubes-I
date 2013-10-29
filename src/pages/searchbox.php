<?php
<form action="search.php" method="get">
	<div class='sbox'>
	<div class='sb_name'>Nama:</div><div class='sb_value'><input type="text" name="query_name" size="30" onkeyup="showResult(this.value)"></div>
	<div id="livesearch"></div>
	<div class='sb_name'>Harga:</div><div class='sb_value'><input type="text" name="query_price" size="30"></div>
	<div class='sb_name'>Kategori:</div><div class='sb_value'><select name="query_category">
	  <option value="baking">Baking</option>
	  <option value="beverages">Beverages</option>
	  <option value="cansoups">Canned Goods & Soups</option>
	  <option value="household">Household Essentials</option>
	</select></div>
	<input type="submit" value="Submit">
	</div>
</form>
?>