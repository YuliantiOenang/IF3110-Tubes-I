<?php
    $q=$_GET["q"];
    $r=$_GET["r"];
    $response;
    function checkuname(){
    if ((strlen($q) >= 5) && ($q != $q)) {
        $response ="name valid";
    }
    else {
        $response="name invalid";
    }
}
    echo $response;
?>