<html>
    <head></head>
    <body>
        <h1>Search Result Page!</h1>
        <hr/>
        <h2>Hasil pencarian anda..</h2>
        <?php for ($i=0; $i < count($data['hasil']) ; $i++) { ?>
        <ul>
	        <li><?=$data['hasil'][$i]['nama'];?></li>
	        <li><?=$data['hasil'][$i]['harga'];?></li>
	        <li><?=$data['hasil'][$i]['stok'];?></li>
	        <li><?=$data['hasil'][$i]['kategori'];?></li>
	        <li><img src="<?=$data['hasil'][$i]['foto'];?>"/></li>
            <li ><a href="http://localhost/waserda/index.php?detail&id_barang=<?=$data['hasil'][$i]['id_barang'];?>">lihat detail</a></li>
        </ul>
        <?php } ?>

        <?php 
            for ($i=0; $i < $data['jum_hal_diview']; $i++) { 
                echo '<a href="http://localhost/waserda/index.php?result&page_num='.$i.'">'.$i.'</a>';
            }

        ?>
    </body>
</html>