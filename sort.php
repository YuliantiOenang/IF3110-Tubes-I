<?php
  $id = 1;
  if (isset($_GET['id']))
    $id = $_GET['id'];
  $sort = 1;
  if (isset($_GET['sort']))
    $sort = $_GET['sort'];
  $nama = "";
  if (isset($_GET['nama']))
    $nama = $_GET['nama'];
  $low = 0;
  if (isset($_GET['low']))
    $low = $_GET['low'];
  $high = 0;
  if (isset($_GET['high']))
    $high = $_GET['high'];
  $sortID = 1;
  if (isset($_GET['sortID']))
    $sortID = $_GET['sortID'];
  if ($sortID == 1)
  {
    if ($sort == 0)
      $sort = 1;
    else
      $sort = 0;
  }
  else if ($sortID == 2)
  {
    if ($sort == 2)
      $sort = 3;
    else
      $sort = 2;
  }
  echo "<script>location.href='kategori.php?id=".$id."&sort=".$sort."&nama=".$nama."&low=".$low."&high=".$high."';</script>";
?>