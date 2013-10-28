<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Kartu Kredit </title>
    <link href="../../css/date.css" rel="stylesheet"/>
    <script src="../../js/ajaxCreditCard.js" type="text/javascript"></script>
</head>
<body>
<form id="creditCardForm" action="#" method="POST" onsubmit="onCreditCardCreate('../user/firstcreditcard'); return false;">
	Card Number* : <input type="text" name="card_number" id="card_number"><br>
	Name* : <input type="text" name="name" id="name"><br>
	Expired Date (YYYY-MM-DD)* : <input type="text" name="expired_date" id="expired_date"><br>
	<input type="submit" value="submit" name="submit">
    <input type="button" value="skip" onClick="window.location='../user';"><br>
    * = Wajib diisi
</form>
    <script src="../../js/date.js" type="text/javascript"></script>
</body>
</html>
