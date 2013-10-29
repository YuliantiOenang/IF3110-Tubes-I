<?php
  include 'db.php';
  $query = "SELECT * FROM barang";
  $result = mysqli_query($link,$query);
  $row = array();
  while($row[] = mysqli_fetch_array($result));
  $row2 = $row;
  $ada = true;
  $barangs = array();
  foreach($_SESSION['bag'] as $dataSession)
  {
    $cukup = false;
    $x = 0;
    foreach($row as $data)
    {
      if ($data['id'] == $dataSession['id'])
      {
        $row[$x]['stok'] -= $dataSession['jumlah'];
        if ($row[$x]['stok'] < 0)
        {
          $barangs[] = $data['nama'];
          break;
        }
        $cukup = true;
        break;
      }
      $x++;
    }
    if (!$cukup)
    {
      $ada = false;
    }
  }
  if ($ada)
  {
    $x = 0;
    $query = "SELECT transaksi FROM user WHERE id='".$_SESSION['user_id']."'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_array($result);
    $query = "UPDATE user SET transaksi='".($user['transaksi']+1)."' WHERE id='".$_SESSION['user_id']."'";
    $result = mysqli_query($link,$query);
    foreach($row2 as $data)
    {
      if ($data['stok'] != $row[$x]['stok'])
      {
        $query = "UPDATE barang SET stok='".$row[$x]['stok']."', terjual='".($data["terjual"]+$data['stok']-$row[$x]['stok'])."' WHERE id='".$data['id']."'";
        $result = mysqli_query($link,$query);
      }
      $x++;
    }
    $_SESSION['bag'] = array();
  }
?>

<html>
  <head>
    <title>Kaskong - Shopping Bag</title>
  </head>
  <body>
    <?php include 'macro/header.php'; ?>
    <div>
      <?php if ($ada): ?>
        Terima kasih telah berbelanja di Kaskong. Pembelian anda sudah tersimpan di database kami.
      <?php else: ?>
        Maaf, barang-barang yang anda pesan tidak cukup stoknya. Berikut list barang-barang tersebut:
        <ul>
          <?php foreach($barangs as $barang): ?>
            <li><?php echo $barang; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </body>
</html>