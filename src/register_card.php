<!-- Credit Card Registration Form -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<script src="js/reg.js"></script>
		<title>
			Pendaftaran Kartu Kredit
		</title>
	</head>
	<body>
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
		<?php
				function submitregistry()
				{
						$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$sql ="INSERT INTO Customer(IdName, Password, NamaLengkap, NomorHP, Alamat, Kota, Provinsi, KodePos, Transaksi, Email) VALUES
								('$_POST[username]','$_POST[password]', '$_POST[namalengkap]','$_POST[nomorhp]', '$_POST[alamat]','$_POST[kota]','$_POST[provinsi]', '$_POST[kodepos]',0 ,'$_POST[email]')" ;
						if(!mysqli_query($con,$sql))
						{
							die('Error' . mysqli_error($con));
						}
						mysqli_close($con);
				}
				if(isset($_REQUEST['daftar']))
				{
					submitregistry();
				}
				
				$_SESSION['userregistrasi']= $_POST['username'];
		?>
			<h1>Lembar Pemakaian Kartu Kredit</h1>
			<form name="creditform" action="index.php" onsubmit="return validatecreditForm()" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						CardNumber
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="cardnumber">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Name on Card
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nameoncard">
					</input>
				</div>
					<div id="form_one_row">
					<p id="label_form" class="label">
						Expired Date
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" type="date" name="expireddate">
					</input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" value="Submit" name="submitted"></input>
				</div>
			</form>
			<form action="index.php" method="post">
				<div id="form_one_row">
					<input id="submit" type="submit" value="Skip" ></input>
				</div>
				<div id="form_one_row"></div>
			</form>
		</div>	
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>