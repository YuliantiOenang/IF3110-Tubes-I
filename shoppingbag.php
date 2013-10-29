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
    <?php
      $x = 1;
      $total = 0;
    ?>
    <?php foreach($arr as $data): ?>
      <div>
        <?php
          echo $x." | ".$data["nama"]." | <input type='number' min='1' id='barang".$x."' value='".$data["jumlah"]."' onchange=validateCart(".$x.",".$data["id"].") onkeyup=validateCart(".$x.",".$data["id"].")> | ".$data["keterangan"]." | Rp ".$data["harga"]." | Rp <span id='hargabarang".$x."'>".intval($data["harga"])*intval($data["jumlah"])."</span>";
          $x++;
          $total += intval($data["harga"])*intval($data["jumlah"]);
        ?>
      </div>
    <?php endforeach; ?>
    <div>
      Rp <span id="totalharga"><?php echo $total; ?></span>
      <button onclick=location.href='<?php echo (($_SESSION['card'] == 1)?"buy.php":"regcard.php?return=buy.php"); ?>'>Buy</button>
    </div>
    <script src="validateStock.js"></script>
  </body>
</html>