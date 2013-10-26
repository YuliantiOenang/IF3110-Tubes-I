<?php


$email_a = $_GET["email"];
$email_b = explode('.',$email_a);

$username= $_GET["username"];

$pass= $_GET["password"];

$confPass= $_GET["confirm_password"];
$temp="       Andrian Octavianus                         ";
$LeftTrim= ltrim($temp);

$namaLengkap=rtrim(ltrim($_GET["nama_lengkap"]));

$boolUser=false;
$boolPass=false;
$bool = true;
$boolNama=false;
$retval=array();

if(strlen($username)>5 && $username!=$pass)
{
	$bool=true;
}

if($pass=$confPass)
{
	$boolPass=true;
}

if(count($email_b) > 2)
{
	$bool=false;
}
else
{
	if(count($email_b)>1)
	{
		if(strlen($email_b[1])<2)
		{
			
			$bool=false;
		}
	}

}

if (filter_var($email_a, FILTER_VALIDATE_EMAIL) && $bool) {
    echo "true";
}
?>