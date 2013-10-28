<!-- Edit Profile Form -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<title>
			Edit Profile
		</title>
	</head>
	<script>
	function validatepass()
		{
			var x=document.forms["editform"]["changepassword"].value;
			var y=document.forms["editform"]["confirmchangepassword"].value;
			if (x==null || x=="" || x!=y )
			  {
			  alert("Password Salah");
			  return false;
			  }
		}
	</script>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<h1>Edit Profile</h1>
			<form name="editform" action="profile.php" onsubmit="return validatepass()" method="post">
				<?php
				$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  } 
				$result = mysqli_query($con,"SELECT * FROM customer WHERE IdName='karakuri'");				
				$row = mysqli_fetch_array($result);
				?>
				
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="namalengkap" value="<?php echo $row['NamaLengkap']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Ganti Password	
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="changepassword" value="<?php echo $row['Password']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Konfirmasi Password
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="confirmchangepassword" value="<?php echo $row['Password']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nomorhp" value="<?php echo $row['NomorHP']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="alamat" value="<?php echo $row['Alamat']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kota" value="<?php echo $row['Kota']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="provinsi" value="<?php echo $row['Provinsi']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kodepos" value="<?php echo $row['KodePos']; ?>">
					</input>
				</div>
				<div id="form_one_row">
					<input id="submit" name="sub" type="submit" value="SUBMIT"></input>
				</div>
				<div id="form_one_row"></div>
				<?php mysqli_close($con); ?>
			</form>
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>