<?php
  include 'db.php';
  $query = "SELECT nama, deskripsi, harga, kategori, gambar FROM barang WHERE id = ".$_GET['id'];
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $kat[] = array();
  $kat[] = "Makanan";
  $kat[] = "Minuman";
  $kat[] = "Pakaian";
  $kat[] = "Rumah";
  $kat[] = "Plus-Plus";
?>

<html>
  <head>
    <title>Kaskong - <?php echo $row['nama']; ?></title>
  </head>
  <body>
    <?php include 'macro/header.php'; ?>
    <h1><?php echo $row['nama']; ?></h1>
    <img src=<?php echo $row['gambar']; ?> >
    <div>
      Kategori : <?php echo $kat[intval($row['kategori'])]; ?><br>
      Harga : Rp <?php echo $row['harga']; ?><br>
      Deskripsi :<br>
      <?php echo $row['deskripsi']; ?>
      <?php if (isset($_SESSION['user_id'])): ?>
        <form method="post" action="buy.php">
          <!-- id,nama,jumlah,harga,keterangan -->
          Jumlah : <input type="number" name="jumlah" min=0><br>
          Keterangan :<br>
          <input type="textarea" name="keterangan"><br>
          <input type="hidden" id="idField" name="id">
          <input type="hidden" id="namaField" name="nama">
          <input type="hidden" id="hargaField" name="harga">
          <input type="submit" value="Add to Bag">
        </form>
      <?php endif; ?>
    </div>
  </body>
</html>