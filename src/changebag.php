<?php
  include 'db.php';
  $id = $_POST['id'];
  $jumlah = $_POST['jumlah'];
  $barangID = $_POST['barangID'];
  $query = "SELECT stok FROM barang WHERE id = ".$barangID;
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  if (intval($jumlah) <= intval($row['stok']))
  {
    echo "true";
    $x = 0;
    $total = 0;
    $arr = $_SESSION['bag'];
    foreach($arr as $data)
    {
      $x++;
      if ($x == $id)
      {
        $data['jumlah'] = $jumlah;
        echo "|".$jumlah*$data['harga'];
        $arr[$x-1] = $data;
      }
      $total += $data['jumlah']*$data['harga'];
    }
    $_SESSION['bag'] = $arr;
    echo "|".$total;
  }
  else
  {
    echo "false";
    $x = 0;
    foreach($_SESSION['bag'] as $data)
    {
      $x++;
      if ($x == $id)
      {
        echo "|".$row['stok'];
        break;
      }
    }
  }