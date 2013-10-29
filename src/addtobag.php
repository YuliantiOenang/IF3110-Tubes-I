<?php
  include 'db.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $keterangan = $_POST['keterangan'];
  $query = "SELECT stok FROM barang WHERE id = ".$id;
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  if (intval($jumlah) <= intval($row['stok']))
  {
    $arr = array();
    if (isset($_SESSION['bag']))
      $arr = $_SESSION['bag'];
    $arr[] = array(
      'id'=>$id,
      'nama'=>$nama,
      'harga'=>$harga,
      'jumlah'=>$jumlah,
      'keterangan'=>$keterangan,
    );
    $_SESSION['bag'] = $arr;
    echo "true";
  }
  else
    echo "false|".$row['stok'];