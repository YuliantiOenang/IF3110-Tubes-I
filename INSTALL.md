Berikut ini adalah langkah-langkah untuk menginstall secara lokal di platform Windows. Untuk platform yang berbeda tidak dibahas di sini, namun secara umum sama.


1. Install XAMPP dan buka XAMPP Control Panel. Jalankan service Apache dan MySQL.
2. Buka folder C:\xampp\htdocs\ dan copy keseluruhan folder project.
3. Buka di browser localhost/phpmyadmin, pilih menu database, dan buat database baru dengan nama tertentu.
4. Pilih menu impor dan cari file dump.sql di dalam folder db.
5. Buka folder src\app\config.php dan isikan dengan . . .
6. Jalankan aplikasi dengan membuka browser localhost/project/src