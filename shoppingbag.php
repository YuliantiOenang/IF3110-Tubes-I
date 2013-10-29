<?php
  include 'db.php';
  $arr = array();
  if (isset($_SESSION['bag']))
    $arr = $_SESSION['bag'];
?>

<html>
  <head>
    <title>Kaskong - Shopping Bag</title>
  </head>
  <body>
    <?php include 'macro/header.php'; ?>
    <h1>Shopping Bag</h1>
    <?php $x = 1; ?>
    <?php foreach($arr as $data): ?>
      <div>
        <?php echo $x++." | ".$data["nama"]." | ".$data["jumlah"]." | ".$data["keterangan"]." | ".$data["harga"]." | ".intval($data["harga"])*intval($data["jumlah"]); ?>
      </div>
    <?php endforeach; ?>
  </body>
</html>