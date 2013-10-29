<?php session_start(); ?>
<!DOCTYPE html>

<html>
	
<head>
	<link rel="stylesheet" type="text/css"  href="CSS/CSSDetail.css">
</head>
	
<body>

<div class="container">

<!-- HEADER -->

<div class="header" >
	
	<div class="tempatlogo">
		<a href="HomeA.php" target=""> 
			<img src ="Images/Logo.jpg" class="logo">
		</a>
	</div>
	
	<div class="judul">
		<h1 >
			Ruko Serba Ada<br>
			Menyediakan kebutuhan Anda secara Online !
		</h1>
		
		<div class="caribarang">
			<form name = 'search' action="HalamanResultA.php" method="post">
				Kata Pencarian : <input type="text" name="kata" id="kata">
			<br>

			Pilih Kategori : 
				<select required name="kategori" id="kategori">
					<option value="all">All</option>
  					<option value="Beras">Beras</option>
  					<option value="Daging">Daging</option>
  					<option value="Ikan">Ikan</option>
  					<option value="Teh">Teh</option>
					<option value="Kopi">Kopi</option>
				</select> <br>

		
			Pilih Harga : 
				<select required name="harga" id=	"harga">
					<option value=99>All</option>
  					<option value=0>Rp. 0 - Rp. 100.000,00</option>
  					<option value=100001>Rp. 100.001,00 - Rp. 200.000,00</option>
  					<option value=200001>Rp. 200.001,00 - Rp. 300.000,00</option>
  					<option value=300001>Rp. 300.001,00 - Rp. 400.000,00</option>
					<option value=400001>Rp. 400.001,00 - Rp. 500.000,00</option>
				</select> <br>

			<input type=submit value=Submit >

			</form>
		</div>
		
		<p id="textlogout">
				Welcome, <a href="HalamanProfil.php" target="">"Username"</a> !
		</p>
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<img src ="Images/Login.png" class="isilogin" onclick="window.open('login.php', 'newwindow', 'width=300, height=250');" >
			</img>
			
			<a href="HalamanRegistrasi.php" target="">
				<img src ="Images/SignUp.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
		<div class="cart"  >
			<a href="HalamanShoppingBagB.php" target="">
				<img src ="Images/Cart.jpg" class="isicart" >
				</img>
			</a>
		</div>
	</div>
	
</div>

<!-- MENU -->

<div class="menu">
	<h2 align="center";> <b> Kategori Barang : </b> <br> <br> </h2>
	
	<div id="barang"> 
		<a href="HalamanBarang1B.php" target="">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2B.php" target="">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3B.php" target="">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4B.php" target="">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5B.php" target="">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	
		<!-- KATEGORI 1 -->
	<?php
		if ($action == "remove") 
		{
			$remove_id = $_GET['id'];
			$action = $_GET['action'];
			$_SESSION['cart'][$remove_id]--;
			if($_SESSION['cart'][$remove_id] == 0) unset($_SESSION['cart'][$remove_id]);
		}
		else if ((isset($_POST['id'])) &&  ($_POST['jumlahpembelian'] != 0)){
			$product_id = $_POST['id']; //the product id from the URL 
			$jumlah = $_POST['jumlahpembelian']; //the action from the URL 
				$_SESSION['cart'][$product_id] =+ $jumlah;
				foreach($_SESSION['cart'] as $product_id => $quantity) {
					echo $product_id;
				}
		}
		
	?>
	<div id="registrasi"> 
		<strong>Your Shopping Bag :</strong>	
	</div >
	<br> <br> <br> <br>
	
	<?php 
		$total = 0;
		if($_SESSION['cart']) { //if the cart isn't empty
		//show the cart
			$con = mysql_connect("localhost","root","");//database connection
			mysql_select_db("progin");
			
			echo "<table border=\"1\" padding=\"3\" width=\"40%\">";
		
			//iterate through the cart, the $product_id is the key and $quantity is the value
			foreach($_SESSION['cart'] as $product_id => $quantity) { 
		
				//get the name, description and price from the database - this will depend on your database implementation.
				//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				$sql = sprintf("SELECT nama, deskripsi, harga FROM produk WHERE id = %d;", 	$product_id); 
		
				$result = mysql_query($sql);
		
				//Only display the row if there is a product (though there should always be as we have already checked)
				if(mysql_num_rows($result) > 0) {
		
					list($name, $description, $price) = mysql_fetch_row($result);
					$line_cost = $price * $quantity; //work out the line cost
					$total = $total + $line_cost; //add to the total cost
					echo "<tr>";
					//show this information in table cells
					echo "<td align=\"center\">$name</td>";
					//along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
					echo "<td align=\"center\">$quantity <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$product_id\">X</a></td>";
					echo "<td align=\"center\">$line_cost</td>";
		
					echo "</tr>";
		
				}
		
			}
			
			//show the total
			echo "<tr>";
			echo "<td colspan=\"2\" align=\"right\">Total</td>";
			 echo "<td align=\"center\">$total</td>";
			echo "</tr>";
		
			//show the empty cart link - which links to this page, but with an action of empty. A simple bit of javascript in the onlick event of the link asks the user for confirmation
			echo "<tr>";
			echo "<td colspan=\"3\" align=\"right\"><a href=\"checkout.php\" onclick=\"return confirm('Are you sure?');window.open('checkout.php', 'newwindow', 'width=300, height=250');\">Checkout</a></td>";
			echo "</tr>"; 
			echo "</table>";
		
		
		
		}else{
		//otherwise tell the user they have no items in their cart
			echo "You have no items in your shopping cart.";
		
		} 
	?>
	
</div>

<!-- MEKANISME -->

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>