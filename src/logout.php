<?php
session_start();
$expire = time()-2592000;
setcookie('sinarjaya', $_SESSION['username'], $expire);
session_destroy();
header("Location: index.php");
?>