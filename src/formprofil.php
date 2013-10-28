<?php
    $con=mysqli_connect("127.0.0.1","root","","ruserba");
    echo $_POST["username"];
    sha1($str);//////
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
    $sql="INSERT INTO card (username ,password ,nama_lengkap , email , alamat, provinsi,kota,kodepos,nohp)
            VALUES
            ('$_POST[username]','$_POST[password]','$_POST[nama]','$_POST[email]','$_POST[alamat]','$_POST[provinsi]','$_POST[kota]','$_POST[kodepos]','$_POST[handphone]')";

if (!mysqli_query($con,$sql))
  {
    die('Error: sql fail ' . mysqli_error($con));
  }
echo "1 record added";
}

function checkpass(){
    if (($_POST[password] == $_POST[confirmpassword])&&(strlen($_POST[confirmpassword])>=8)&&(strlen($_POST[password])>=8)&&($_POST[password] != $_POST[username])&&($_POST[password] != $_POST[email])){
        //return true;
        echo "pass true";
    }
    else {
        //return false;
        echo "pass false";
    }
}

function checkuname(){
    if ((strlen($_POST[username]) >= 5) && ($_POST[username] != $_POST[password])) {
        //return true;
        echo "uname true";
    }
    else {
        //return false;
        echo "uname false";
    }
}

function checkfname(){
    $fname = explode(" ", $_POST[nama]); //memecah string full name dengan parameter spasi, fname[1] adalah kata kedua setelah spasi, kalau kosong berarti fullname hanya 1 kata
    if(isset($fname[1])) {
        //return true;
        echo "fname true";
    }
    else {
        //return false;
        echo "fname false";
    }
}

function checkemail(){
    $mail = str_split($_POST[email]);
    $j=0; //lokasi "."
    $k=0;// lokasi "@"
    for ($i=0;$i<strlen($_POST_[email]);++$i) {
         if ($mail[$i] == "@"){
             $k = $i;
         }
         else if ($mail[$i] == ".") {
             $j= $i;
         }
    }
    
    if ((($j-$k) >= 1) && ((strlen($_POST_[email])-$j)>=2)&&($k >= 1)&&($_POST_[email]!=$_POST_[password])){
       // return true;
       echo "mail true";
    }
    else {
        //return false;
        echo "mail false";
    }
}

connectsql();
checkemail();
checkfname();
checkpass();
checkuname();
insertsql();
/*if (checkemail()&&checkfname()&&checkpass()&&checkuname()){
    insertsql();
}
else {
	die('Error');
}*/
closesql()

?>

