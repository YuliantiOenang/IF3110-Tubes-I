define('INCLUDE_CHECK',1);
require "../connect.php"

if(!$_POST['img']) die("There is no such product!");

$img=mysql_fetch_assoc(mysql_query("SELECT * FROM internet_shop WHERE img='".$img"'"));

if(!$row) die("There is no such product!");

echo '<strong>'.$row['nama'].'</strong>
<p class="descr">'.$row['deskripsi'].'</p>
<strong>price: $'.$row['price'].'</strong>
<small>Geser ke shopping cart untuk membeli</small>;