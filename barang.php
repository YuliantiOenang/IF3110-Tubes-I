<?php
  include 'db.php';
  $query = "SELECT nama, deskripsi, harga, kategori, gambar FROM barang WHERE id = ".$_GET['id'];
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
?>

<html>
  <head>
    <title>Kaskong - <?php echo $row['nama']; ?></title>
  </head>
  <body>
    <h1><?php echo $row['nama']; ?></h1>
    <img src=<?php echo $row['gambar']; ?> >
    <div>
      Kategori : <?php echo $row['kategori']; ?><br>
      Harga : Rp <?php echo $row['harga']; ?><br>
      Deskripsi :<br>
      <?php echo $row['deskripsi']; ?>
    </div>
  </body>
</html>