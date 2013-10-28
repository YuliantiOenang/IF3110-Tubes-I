<?php
    $con=mysqli_connect("127.0.0.1","root","","ruserba");
    echo $_POST["username"];
   
   $uname= $_POST["username"];
   $pass= sha1($_POST["password"]);
   $pass1= $_POST["password"];
   $nama= $_POST["nama"];
   $email= $_POST["email"];
   $alamat= $_POST["alamat"];
   $provinsi= $_POST["provinsi"];
   $kota= $_POST["kota"];
   $kodepos= $_POST["kodepos"];
   $hp= $_POST["handphone"];
   //$conf1=sha1($_POST["confirmpassword"]) ;
   $conf=$_POST["confirmpassword"] ;
   
   echo $pass1;
   echo $nama;
   echo $email;
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
	global $uname;
	global $pass;
	global $nama;
	global $email;
	global $alamat;
	global $provinsi;
	global $kota;
	global $kodepos;
	global $hp;
	
	
    $sql="INSERT INTO card (username ,password ,nama_lengkap , email , alamat, provinsi,kota,kodepos,nohp)
            VALUES
            ('$uname','$pass1','$nama','$email','$alamat','$provinsi','$kota','$kodepos','$hp')";

if (!mysqli_query($con,$sql))
  {
    die('Error: sql fail ' . mysqli_error($con));
  }
echo "1 record added";
}

function checkpass(){
		global $uname;
	global $pass1;
	global $nama;
	global $email;
	global $alamat;
	global $provinsi;
	global $kota;
	global $kodepos;
	global $hp;
	global $conf;
    if (($pass1 == $conf)&&(strlen($pass1)>=8)&&($pass1 != $uname)&&($pass1 != $email)){
        return true;
        
    }
    else {
        return false;
        
    }
	
	
}

function checkuname(){
	global $uname;
	global $pass1;
	global $nama;
	global $email;
	global $alamat;
	global $provinsi;
	global $kota;
	global $kodepos;
	global $hp;
	global $conf;
    if ((strlen($uname) >= 5) && ($uname != $pass1)) {
        return true;
        
    }
    else {
        return false;
        
    }
}

function checkfname(){
	global $uname;
	global $pass1;
	global $nama;
	global $email;
	global $alamat;
	global $provinsi;
	global $kota;
	global $kodepos;
	global $hp;
	global $conf;
    $fname = explode(" ", $nama); //memecah string full name dengan parameter spasi, fname[1] adalah kata kedua setelah spasi, kalau kosong berarti fullname hanya 1 kata
    if(isset($fname[1])) {
        return true;
        
    }
    else {
        return false;
        
    }
}

function checkemail(){
	global $uname;
	global $pass1;
	global $nama;
	global $email;
	global $alamat;
	global $provinsi;
	global $kota;
	global $kodepos;
	global $hp;
	global $conf;
    $mail = str_split($email);
    $j=0; //lokasi "."
    $k=0;// lokasi "@"
    for ($i=0;$i<strlen($email);++$i) {
         if ($mail[$i] == "@"){
             $k = $i;
         }
         else if ($mail[$i] == ".") {
             $j= $i;
         }
    }
    
    if ((($j-$k) >= 1) && (($i-$j)>=2)&&($k >= 1)&&($email!=$pass1)){
        return true;
       
    }
    else {
        return false;
        
		    }	
}

connectsql();

if (checkemail()&&checkfname()&&checkpass()&&checkuname()){
    insertsql();
}
else {
	die('Error');
}
closesql()

?>

