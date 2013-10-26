<?php
session_start();
session_destroy();
setcookie("user1", $idmember, time()-3600*24*30);
setcookie("user2", $getID, time()-3600*24*30);
header("location: index.php");

?>