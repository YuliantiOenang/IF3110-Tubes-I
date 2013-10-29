<?php

# Script 18.5 - index.php
// This is the main page for the site.
// Include the configuration file:
require ('includes/config.inc.php');

// Set the page title and include the HTML header:
$page_title = 'Ruserba Online Shop';
include ('includes/header.html');

// Welcome the user (by name if they are logged in):
echo '<h1>Selamat Datang';
if (isset($_SESSION['first_name'])) {
    echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
?>
<p>Ini adalah halaman utama dari <em>shopping cart</em> untuk toko RuSerBa.</p>
<?php include ('includes/footer.html'); ?>