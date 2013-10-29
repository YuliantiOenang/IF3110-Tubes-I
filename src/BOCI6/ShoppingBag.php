<?php	
	include 'LibUser.php';
	session_start();
	if (isset($_SESSION['username'])){
		echo "<html>";
		echo "<head>";
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"TabelCSS.css\">";
		echo "</head>";
		echo "<body>";
		echo "<div class=\"ShoppingBag\">";
		if (isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $Barang){
				echo "<div class=\"ShoppingBagRow\">";
				$Nama=$Barang[0]->GetNamaBarang();
				$Jumlah=$Barang[1];
				echo "<div class=\"ShoppingBagCellNama\">";echo "$Nama </div>";
				echo "<div class=\"ShoppingBagCellJumlah\">";echo "$Jumlah</div></div>";
			}
			echo "<button type=\"button\" onClick=\"location.href='Transaction.php?TransAct=1'\">Checkout Cart</button>";
		}
		else{
			echo "Cart Kosong";}
		echo "<br>";
		echo "<a href=\"/BOCI2/index.php\">BACK</a><br>";
		echo "</body>";
		echo "</html>";
	}
	else{
		echo "login dulu mas";}
?>