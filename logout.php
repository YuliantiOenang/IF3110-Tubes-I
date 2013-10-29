<?php

include "db.php";

$_SESSION = array();
setcookie("user_id", "", time()-3600);
session_destroy();

header("Location: index.php");

?>