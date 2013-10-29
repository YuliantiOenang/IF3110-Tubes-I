<html>
	<head>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
        <script type="text/javascript" src="js/main.js"></script>
	</head>
	<body onload="loadRegex();">
	
		<form action="php/ccreg.php" method="post" enctype="multipart/form-data">
			<div>
                <input id="card_number" name="cardnumber" class="input_field" type="text" placeholder="Nomor Kartu" onkeydown="validate_creditcard();">
                &nbsp;
                <strong id="error_credit_card" class="error_warning"></strong>
            </div>
			<div>
                <input id="name_on_card" name="nameoncard" class="input_field" type="text" placeholder="Nama Pada Kartu" onkeydown="validate_nameoncard();">
                &nbsp;
                <strong id="error_name_on_card" class="error_warning"></strong>
            </div>
			<div>
                <input id="expired" name="exp_date" class="input_field" type="text" placeholder="Tanggal Tidak Berlaku" onchange="validate_exp_date()">
                &nbsp;
                <strong id="error_exp_date" class="error_warning"></strong>
            </div>
			<input id="confirm_button" class="input_button" type="submit" value="Confirm">
        </form>