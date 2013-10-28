<?php
// Create connection
$con=mysqli_connect("127.0.0.1","root","","ruserba");
function connectsql(){
    
    global $con;
    // Check connection
    if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}

function closesql() {
    global $con;
    mysqli_close($con);
    
}
  
function insertsql () {
    global $con;
    $sql="INSERT INTO card (username ,field_card_num ,card_name , exdate , security)
            VALUES
            ('$_POST[namauser]','$_POST[cardnumber]','$_POST[namakartu]','$_POST[kadaluarsa]','$_POST[security]')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
}
  
  
function checkdate123(){
    $tanggal = $_POST[kadaluarsa];
    $tanggal2 = explode("-", $tanggal);
    echo $tanggal2[0];
    echo $tanggal2[1];
    echo $tanggal2[2];
   /* if (checkdate($tanggal2[1], $tanggal2[0], $tanggal2[2])) {
        echo "date valid";
    } else {
        echo "date invalid";
        die('Date invalid');
    } */   
}

function comparedate (){
    $tanggal = $_POST[kadaluarsa];
    if((time()-(60*60*24)) < strtotime($var)) {
        echo "card expired";
    }
    else {
        echo "card can be used";
    }
}

connectsql();
checkdate123();
comparedate();
insertsql();
closesql();
echo "hai";
?>
