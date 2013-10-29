<?php
  $nama = "";
  if (isset($_POST['itemName']))
    $nama = $_POST['itemName'];
  $id = 1;
  if (isset($_POST['kategori']))
    $id = $_POST['kategori'];
  $low = 0;
  if (isset($_POST['rangeMin']))
    $low = $_POST['rangeMin'];
  $high = 0;
  if (isset($_POST['rangeMax']))
    $high = $_POST['rangeMax'];
  echo "<script>location.href='kategori.php?id=".$id."&nama=".$nama."&low=".$low."&high=".$high."';</script>";