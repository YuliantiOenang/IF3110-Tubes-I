<?php
    //hint harusnya berasal dari kata-kata dalam database
    
    // Fill up array with names
    $a[]="Daging";
    $a[]="Beras";
    $a[]="Minyak";
    $a[]="Sayuran";
    $a[]="Bumbu Masak";
    
    $q = $_GET["key"];
    
    if (strlen($q) > 0){
        $hint = "";
        for ($i = 0; $i < count($a); $i++) {
            if (strtolower($q) == strtolower(substr($a[$i], 0, strlen($q)))) {
                if ($hint == "") {
                    $hint = $a[$i];
                } else {
                    $hint = $hint . ", " . $a[$i];
                }
            }
        }
    }
    
    if ($hint == "") {
        $response = "tidak ada saran";
    } else {
        $response = $hint;
    }

    echo $hint;
?>