<?php
session_start();
include_once('inc/dbConnect.inc.php');
$message=array();
if(isset($_POST['NoKartu']) && !empty($_POST['NoKartu'])){
     $NoKartu=mysql_real_escape_string($_POST['NoKartu']);
}else{ 
     $message[]='Silahkan isi nomor kartu Anda';
}

if(isset($_POST['NameOnCard']) && !empty($_POST['NameOnCard'])){
     $password=mysql_real_escape_string($_POST['NameOnCard']);
}else{
     $message[]='Silahkan isi nama sesuai yang tertera pada kartu kredit Anda.';
}

if(isset($_POST['dd']) && !empty($_POST['dd'])){
     $password=mysql_real_escape_string($_POST['dd']);
}else{
     $message[]='Silahkan isi tanggal expire kartu kredit anda.';
}
if(isset($_POST['mm']) && !empty($_POST['mm'])){
     $password=mysql_real_escape_string($_POST['mm']);
}else{
     $message[]='Silahkan isi tanggal expire kartu kredit anda.';
}
if(isset($_POST['yyyy']) && !empty($_POST['yyyy'])){
     $password=mysql_real_escape_string($_POST['yyyy']);
}else{
     $message[]='Silahkan isi tanggal expire kartu kredit anda.';
}


$countError=count($message);
if($countError > 0){
     for($i=0;$i<$countError;$i++){
         echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
     $query="select * from user where NoKartu='$NoKartu' and dd='$dd' and mm='$mm' and yyyy='$yyyy' and
             password='$password'";
     $res=mysql_query($query);
     $checkUser=mysql_num_rows($res);
     if($checkUser > 0){
         $_SESSION['LOGIN_STATUS']=true;
         $_SESSION['NOKARTU']=$NoKartu;
         $_SESSION['NAMEONCARD']=$NameOnCard;
         $_SESSION['DD']=$dd;
         $_SESSION['MM']=$mm;
         $_SESSION['YYYY']=$yyyy;
         echo 'correct';
    }else{
         echo ucwords('Entri kartu kredit salah. Silahkan isi ulang form secara benar.');
    }
}
?>