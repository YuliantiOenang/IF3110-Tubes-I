<?php
	// Contoh dari file content.

	// Selalu include ini di awal.
	require_once('ref.php');

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	// Include begin.
	require_once('begin.php');
?>
<?php
databaseConnect();
?>

<?php
// define variables and set to empty values
$cardnumber = $cardname = $cardexpired = "";
$numberErr = $nameErr = $expiredErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["cardnumber"]))
		{$numberErr = "*Harus diisi";}
	else
		{
			$cardnumber = test_input($_POST["cardnumber"]);
			if (!preg_match("/^[0-9]*$/", $cardnumber))
			{
				$numberErr = "*Hanya angka yang diperbolehkan";
			}
		}
	
	if(empty($_POST["cardname"]))
		{$nameErr = "*Harus diisi";}
	else
		{$cardname = test_input($_POST["cardname"]);}
   
	if(empty($_POST["cardexpired"]))
		{$expiredErr = "*Harus diisi";}
	else
		{$cardexpired = test_input($_POST["cardexpired"]);}
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if($referrer_page == 'bag.php')
{
	writeWarningSmall('Anda harus registrasi kartu kredit terlebih dahulu');
}

if(isLoggedIn()){
	echo'	<h2>Registrasi Kartu Kredit</h2>
			<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
			   Nomor Kartu: <input type="text" name="cardnumber">
			   <span class = "error">'.$numberErr.'</span>
			   <br><br>
			   Nama Pada Kartu: <input type="text" name="cardname">
			   <span class = "error">'.$nameErr.'</span>
			   <br><br>
			   Tanggal Ekspirasi: <input type="date" name="cardexpired">
			   <span class = "error">'.$expiredErr.'</span>
			   <br><br>
			   <button type="submit" >Submit</button> 
			</form>
		';
}else{
	writeWarningSmall('Anda harus login terlebih dahulu');
}
	if($referrer_page == 'register.php')
	{
		echo '<a href = "'.$refferer_page.'"> Skip registration </a>';
	}
	require_once('end.php');
?>
