<?php

include "db.php";

$_SESSION = array();
session_destroy();

header("Location: index.php");

?>