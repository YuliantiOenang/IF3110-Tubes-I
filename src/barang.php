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
      <?php echo $row['deskripsi']; ?><br>
      <?php if (isset($_SESSION['user_id'])): ?>
        Jumlah : <input type="number" id="jumlahField" name="jumlah" min=1><br>
        Keterangan :<br>
        <input type="textarea" id="keteranganField" name="keterangan"><br>
        <input type="hidden" id="idField" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" id="namaField" name="nama" value="<?php echo $row['nama']; ?>">
        <input type="hidden" id="hargaField" name="harga" value="<?php echo $row['harga']; ?>">
        <button onclick="validateStock('')">Add to Bag</button>
      <?php endif; ?>
    </div>
    <script src="validateStock.js"></script>
  </body>
</html>