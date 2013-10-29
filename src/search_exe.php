<?php
include "connect.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from barang where nama_barang like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Nama Barang</td>
<td>Harga Barang</td>
<td>Stok Barang</td>
<td>Gambar Barang</td>
<td>Kategori</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['nama_barang']."</td>
<td>".$data['harga_barang']."</td>
<td>".$data['stok_barang']."</td>
<td>".$data['gambar_barang']."</td>
<td>".$data['kategori']."</td>
</tr>";
}
echo "</table>";
?>