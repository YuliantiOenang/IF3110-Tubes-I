<?php
function get_list_product($cat) {
        mysql_connect("localhost", "root", "") or die("problem with connection...");
        mysql_select_db("ruserba");
        $query = mysql_query('SELECT * FROM `produk` WHERE kategori="'.$cat.'" ORDER BY `sold` DESC');
        $num = 0;
        $output = "";
        while($row = mysql_fetch_assoc($query)) {
        
            $id = $row['id'];
            $name = $row['nama'];
            $img = $row['image'];
            $harga = $row['harga'];

            if ($num < 4) {

            $output = $output . "<li>";
            $output = $output . '<a href="product.php?id=' . $id . '">';
            $output = $output . '<img src="' . $img . '" alt="' . $name . '">';
            $output = $output . "<p>".$name." <br />".$harga." </p>";
            $output = $output . "</a>";
            $output = $output . "</li>";
            $num++;
        }
        
        }
        return $output;
}

function getAllProducts($cat) {
     mysql_connect("localhost", "root", "") or die("problem with connection...");
        mysql_select_db("ruserba");
        $query = mysql_query('SELECT * FROM `produk` WHERE kategori="'.$cat.'"');
        $output = "";
        while($row = mysql_fetch_assoc($query)) {
        
            $id = $row['id'];
            $name = $row['nama'];
            $img = $row['image'];
            $harga = $row['harga'];

            $output = $output . "<li>";
            $output = $output . '<a href="product.php?id=' . $id . '">';
            $output = $output . '<img src="' . $img . '" alt="' . $name . '">';
            $output = $output . "<p>".$name." <br />".$harga." </p>";
            $output = $output . "</a>";
            $output = $output . "</li>";
         
        }
        return $output;
}

?>