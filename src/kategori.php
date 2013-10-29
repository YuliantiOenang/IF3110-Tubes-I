<?php
  include 'db.php';
  // GET value sort
  $sort = "nama ASC";
  $sortVal = 0;
  if (isset($_GET['sort']))
  {
    $sortVal = $_GET['sort'];
    if ($_GET['sort'] == 1)
      $sort = "nama DESC";
    else if ($_GET['sort'] == 2)
      $sort = "harga ASC";
    else if ($_GET['sort'] == 3)
      $sort = "harga DESC";
  }
  // GET value low and high
  $low = 0;
  $high = 0;
  if (isset($_GET['low']))
    $low = intval($_GET['low']);
  if (isset($_GET['high']))
    $high = intval($_GET['high']);
  $harga = "harga >= ".$low;
  if ($high > 0)
    $harga .= " AND harga <= ".$high;
  // GET value nama;
  $nama = "";
  if (isset($_GET['nama']))
    $nama = $_GET['nama'];
  $query = "SELECT id, nama, harga, gambar FROM barang WHERE kategori = ".$_GET['id']." AND ".$harga." AND nama LIKE '%".$nama."%' ORDER BY ".$sort;
  $result = mysqli_query($link,$query);
  $row = array();
  $count = 0;
  while ($row[] = mysqli_fetch_array($result))
    $count++;
  $pageValue = 10; // item per page
  $pageVal = 0;
  if (isset($_GET['page']))
    $pageVal = $_GET['page'];
  $kat[] = array();
  $kat[] = "Makanan";
  $kat[] = "Minuman";
  $kat[] = "Pakaian";
  $kat[] = "Rumah";
  $kat[] = "Plus-Plus";
?>

<html>
  <head>
    <title>Kaskong - <?php echo $kat[intval($_GET['id'])]; ?></title>
  </head>
  <body>
    <?php include 'macro/header.php'; ?>
    <?php
      if ($sortVal == 0)
        echo "Nama terurut menaik";
      else if ($sortVal == 1)
        echo "Nama terurut menurun";
      else if ($sortVal == 2)
        echo "Harga terurut menaik";
      else if ($sortVal == 3)
        echo "Harga terurut menurun";
    ?>
    <br>
    <button onclick="location.href='sort.php?<?php echo "id=".$_GET['id']."&sort=".$sortVal."&nama=".$nama."&low=".$low."&high=".$high."&sortID=1"; ?>'">Toggle Sort Nama</button>
    <button onclick="location.href='sort.php?<?php echo "id=".$_GET['id']."&sort=".$sortVal."&nama=".$nama."&low=".$low."&high=".$high."&sortID=2"; ?>'">Toggle Sort Harga</button><br>
    <?php
      for($i = 0; $i < ceil($count/$pageValue); $i++)
        if ($i == $pageVal)
          echo ($i+1)." ";
        else
          echo "<a href='kategori.php?id=".$_GET['id']."&sort=".$sortVal."&page=".$i."&nama=".$nama."&low=".$low."&high=".$high."'>".($i+1)."</a> ";
    ?>
    <?php for ($i = $pageVal*$pageValue; $i < min($pageVal*$pageValue+$pageValue,$count); $i++): ?>
      <?php if ($row[$i] != NULL): ?>
        <div>
          <img src=<?php echo $row[$i]['gambar']; ?> ><br>
          <b><?php echo "<a href='barang.php?id=".$row[$i]['id']."'>".$row[$i]['nama']."</a> "; ?></b><br>
          Rp <?php echo $row[$i]['harga']; ?><br>
          <?php if (isset($_SESSION['user_id'])): ?>
            Jumlah : <input type="number" id="jumlahField<?php echo $i; ?>" name="jumlah" min=1><br>
            Keterangan :<br>
            <input type="textarea" id="keteranganField<?php echo $i; ?>" name="keterangan"><br>
            <input type="hidden" id="idField<?php echo $i; ?>" name="id" value="<?php echo $row[$i]['id']; ?>">
            <input type="hidden" id="namaField<?php echo $i; ?>" name="nama" value="<?php echo $row[$i]['nama']; ?>">
            <input type="hidden" id="hargaField<?php echo $i; ?>" name="harga" value="<?php echo $row[$i]['harga']; ?>">
            <button onclick="validateStock(<?php echo $i; ?>)">Add to Bag</button>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    <?php endfor; ?>
    <?php
      if ($sortVal == 0)
        echo "Nama terurut menaik";
      else if ($sortVal == 1)
        echo "Nama terurut menurun";
      else if ($sortVal == 2)
        echo "Harga terurut menaik";
      else if ($sortVal == 3)
        echo "Harga terurut menurun";
    ?>
    <br>
    <button onclick="location.href='sort.php?<?php echo "id=".$_GET['id']."&sort=".$sortVal."&nama=".$nama."&low=".$low."&high=".$high."&sortID=1"; ?>'">Toggle Sort Nama</button>
    <button onclick="location.href='sort.php?<?php echo "id=".$_GET['id']."&sort=".$sortVal."&nama=".$nama."&low=".$low."&high=".$high."&sortID=2"; ?>'">Toggle Sort Harga</button><br>
    <?php
      for($i = 0; $i < ceil($count/$pageValue); $i++)
        if ($i == $pageVal)
          echo ($i+1)." ";
        else
          echo "<a href='kategori.php?id=".$_GET['id']."&sort=".$sortVal."&page=".$i."&nama=".$nama."&low=".$low."&high=".$high."'>".($i+1)."</a> ";
    ?>
    <script src="validateStock.js"></script>
  </body>
</html>