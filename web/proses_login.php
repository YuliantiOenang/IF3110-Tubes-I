
<?php
	session_start();
	
	include "config/connect.php";
	
	$email = $_GET["user"];
	$password = $_GET["pass"];

	$hasil = mysql_query("SELECT email FROM customer where username='$email'");
	if(mysql_num_rows($hasil)!=0)
	{
			$hasil = mysql_query("SELECT password FROM customer WHERE username = '$email' and password= '$password'");
			if(mysql_num_rows($hasil)!=0)
			{
				 $hasil = mysql_query("SELECT * FROM customer where username='$email'");
				while($baris=mysql_fetch_row($hasil))
				{
				$idmember=$baris[1];
				$getID=$baris[0];
				$kota=$baris[2];
				$kodepos=$baris[3];
				$email=$baris[4];
				$hp=$baris[5];
				$username=$baris[7];
				$provinsi=$baris[8];
				$alamat=$baris[9];
				
				
				}

								setcookie("user1", $idmember, time()+3600*24*30);
								setcookie("IdCustomer", $getID, time()+3600*24*30);
								setcookie("kobupaten", $kota, time()+3600*24*30);
								setcookie("kodepos", $kodepos, time()+3600*24*30);
								setcookie("email", $email, time()+3600*24*30);
								setcookie("handphone", $hp, time()+3600*24*30);
								setcookie("username", $username, time()+3600*24*30);
								setcookie("provinsi", $provinsi, time()+3600*24*30);
								setcookie("alamat", $alamat, time()+3600*24*30);
								
								$return = array();
								$return['nama'] = $idmember;
								$return['id'] = $getID;

								echo json_encode($return);
	
		}
		else
		{		
				echo "Login Gagal, Password salah";
		}
		
	}
	else
		{
				echo "Login Gagal, Email tidak valid";

		}
?>
