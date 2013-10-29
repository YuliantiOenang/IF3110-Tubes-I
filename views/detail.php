<html>
    <head></head>
    <body>
        <h1>Search Detail Page!</h1>
        <hr/>
        <h2>Hasil pencarian anda..</h2>
        <ul>
	        <li><?=$data['variabelview'][0]['nama'];?></li>
	        <li><?=$data['variabelview'][0]['harga'];?></li>
	        <li><?=$data['variabelview'][0]['stok'];?></li>
	        <li><?=$data['variabelview'][0]['kategori'];?></li>
	        <li><img src="<?=$data['variabelview'][0]['foto'];?>"/></li>
        </ul>
    </body>
</html>