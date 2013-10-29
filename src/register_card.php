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
					<input id="submit" type="submit" value="Submit"></input>
				</div>
			</form>
			<form action="index.php" method="post">
				<div id="form_one_row">
					<input id="submit" type="submit" value="Skip"></input>
				</div>
				<div id="form_one_row"></div>
			</form>
		</div>	
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>