<?php require SITEPATH . '/app/views/head.php' ?>

<body> 
    <div id="container">
        <?php require SITEPATH . '/app/views/header.php' ?>

        <h2>Shopping Cart</h2>
        <?php
	        if (empty($items)) {
	        	echo '<p>Shopping Bag/Cart Kosong, Silahkan Berkunjung Ke Halaman Produk Untuk Membeli</p>';
	        } else {
	        	$i = 0;
	        	foreach ($items as $item) {
	        		echo '</br> Barang ke-' . $i;
	        		echo '</br> ' . $item['product_name'];
	        		echo '</br> ' . $item['description'];
	        	}
	        }
	    ?>

        <form method="post" action="<?php echo SITEURL . "/car/checkout/" ?>">
             <button  class="btn">Checkout</button>
        </form>
        
	</div>
</body>
</html>