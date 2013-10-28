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
  $query = "SELECT nama, harga, gambar FROM barang WHERE kategori = ".$_GET['id']." AND ".$harga." AND nama LIKE '%".$nama."%' ORDER BY ".$sort;
  $result = mysqli_query($link,$query);
  $row = array();
  $count = 0;
  while ($row[] = mysqli_fetch_array($result))
    $count++;
  $pageValue = 10; // item per page
  $pageVal = 0;
  if (isset($_GET['page']))
    $pageVal = $_GET['page'];
?>

<html>
  <head>
    <title>Kaskong - <?php echo $_GET['id']; ?></title>
  </head>
  <body>
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
          <b><?php echo $row[$i]['nama']; ?></b><br>
          Rp <?php echo $row[$i]['harga']; ?><br>
        </div>
      <?php endif; ?>
    <?php endfor; ?>
  </body>
</html>