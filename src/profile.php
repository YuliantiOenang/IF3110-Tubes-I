<!-- Profile Page of User -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<title>
			Profil Diri
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<h1>Profil Diri</h1>
			<form name="profileform" action="edit_profile.php" method="post">
				<?php				
				function submitedit()
				{
						$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$sql ="UPDATE customer SET NamaLengkap='$_POST[namalengkap]' ,Password='$_POST[changepassword]' 
								,NomorHP='$_POST[nomorhp]' ,Alamat='$_POST[alamat]' ,Kota='$_POST[kota]' ,Provinsi='$_POST[provinsi]' ,KodePos='$_POST[kodepos]' WHERE IdName='" . $usr . "'" ;
						if(!mysqli_query($con,$sql))
						{
							die('Error' . mysqli_error($con));
						}
						mysqli_close($con);
				}
				if(isset($_REQUEST['sub']))
				{
					$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
					$result = mysqli_query($con,"SELECT * FROM customer WHERE IdName='" . $usr . "'");				
					$before = mysqli_fetch_array($result);	
					
					submitedit();
					
					$result = mysqli_query($con,"SELECT * FROM customer WHERE IdName='" . $usr . "'");				
					$after = mysqli_fetch_array($result);

					if( $before['NamaLengkap'] == $after['NamaLengkap'])
					{
						echo "<script> alert('NamaLengkap tidak diubah'); </script>";
					}
					if( $before['Password'] ==   $after['Password'] )
					{
						echo "<script> alert('Password tidak diubah'); </script>";
					}
					if( $before['NomorHP'] ==  $after['NomorHP'] )
					{
						echo "<script> alert('NomorHP tidak diubah'); </script>";
					}
					if(  $before['Alamat'] ==   $after['Alamat'] )
					{
						echo "<script> alert('Alamat tidak diubah'); </script>";
					}
					if(  $before['Kota'] ==   $after['Kota'])
					{
						echo "<script> alert('Kota tidak diubah'); </script>";
					}
					if(  $before['Provinsi'] ==  $after['Provinsi'])
					{
						echo "<script> alert('Provinsi tidak diubah'); </script>";
					}
					if( $before['KodePos'] ==  $after['KodePos'])
					{
						echo "<script> alert('Kode pos tidak diubah'); </script>";
					}
					
					mysqli_close($con);
				}
				
				$con=mysqli_connect("localhost","root","","ruserba");
				// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  } 
				$result = mysqli_query($con,"SELECT * FROM customer WHERE IdName='" . $usr . "'");				
				$row = mysqli_fetch_array($result);
				?>
				
				<div id="form_one_row">
					<p id="label_form" class="label">
						Username
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['IdName']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['NamaLengkap']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['NomorHP']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['Alamat']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['Kota']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['Provinsi']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['KodePos']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Email
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['Email']; ?>
					</p>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Jumlah Transaksi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<p id="label_form" class="label">
						<?php echo $row['Transaksi']; ?>
					</p>
				</div>
				
				<?php mysqli_close($con); ?>
				<div id="form_one_row">
					<input id="submit" type="submit" value="EDIT"></input>
				</div>
				<div id="form_one_row"></div>
			</form>
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>