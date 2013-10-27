Notes untuk folder "src"
------------------------------
0. Untuk tampilan, ekstensi filenya pakai .htm aja ya (bukan .html), biar seragam. Sama aja kok hasilnya.
1. Header dan footer ada di folder "templates" dan otomatis di-load di setiap halaman.
    Kalau mau edit tampilannya bisa langsung edit di situ.
2. Untuk hyperlink/redirect ke file htm :
	Misalkan nama file yang dituju adalah "foobar.htm". maka URL nya menjadi "index.php?page=foobar" (tanpa .htm)
	
	Contoh:
	<a href = "index.php?page=foobar"> Menuju Foobar </a>
	header( 'Location: index.php?page=foobar' );
	
	Kalau redirect-nya ke file .js atau .php nggak usah pakai format di atas.
	
	Contoh:
	<form name = "regform" action="registrasi.php" method="post">