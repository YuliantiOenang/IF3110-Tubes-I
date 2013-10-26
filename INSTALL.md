Berikut ini adalah langkah-langkah untuk menginstall secara lokal di platform Windows. Untuk platform yang berbeda tidak dibahas di sini, namun secara umum sama.


1. Install XAMPP dan buka XAMPP Control Panel. Jalankan service Apache dan MySQL.
2. Buka folder C:\xampp\htdocs\ dan copy keseluruhan folder project.
3. Buka di browser localhost/phpmyadmin, pilih menu database, dan buat database baru dengan nama tertentu.
4. Pilih menu impor dan cari file dump.sql di dalam folder db.
5. Buka folder src\app\config.php
6. Isi ENVIRONMENT sesuai petunjuk dan kebutuhan, misal PRODUCTION
7. Isi SITEURL dengan alamat situs, misal //localhost/project/src
8. Isi $CONFIG['mysql']['database'] dengan nama database, begitu pula dengan host, user, dan password
9. Jalankan aplikasi dengan membuka browser, misal localhost/project/src