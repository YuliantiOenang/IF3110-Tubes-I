<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
// Load the calendar class
require('calendar/tc_calendar.php');
$pertamax = $_GET['pertamax'];
$username = $_GET['username'];
?>

<script>

var success = "0";
var date_valid = "0";

setInterval(function()
{ 
	var number = document.getElementById("number").value;
	var name = document.getElementById("name").value; 
	var expiry = document.getElementById("date1").value;
	
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			
			success = String(xmlhttp.responseText);
		}
	}
	
	xmlhttp.open("GET","validasi_kartu.php?number="+number+"&name="+name,true);
	xmlhttp.send();
	
	if (success == "0")
	{
		document.getElementById("err").innerHTML = "* Nomor kartu / nama tidak valid";
	}
	else
	{
		document.getElementById("err").innerHTML = "";
	}
	
	if (String(document.getElementById("date1").value) != "0000-00-00")
		date_valid = "1";
	
	if  ((success == "1") && (date_valid == "1"))
		document.getElementById("submit_button").disabled = false;
	else
		document.getElementById("submit_button").disabled = true;
}, 500);

function onSubmit()
{
	var number = document.getElementById("number").value;
	
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			alert(xmlhttp.responseText);
			document.location.href = "home.php";
		}
	}
	
	xmlhttp.open("GET","register_kartu_db.php?number="+number+"&username="+name,true);
	xmlhttp.send();
}

function onSkip()
{
	document.location.href = "home.php";
}

</script>

</head>

<body>

<div id="container">

<div id="header">
<h1><b>Ruko_Serba_Ada</b></h1>
</div>

<div id="menu">
<a href="home.php">Home</a>
</div>

<div id="content"> 
<form>

<br><br>

Nomor kartu kredit: <input class="text_input" type="text" name="number" id="number">
<br>
<span class="error" id="err"></span>
<br><br>
Nama tertera: <input class="text_input" type="text" name="name" id="name">

<br><br>
Expiry date: <br>
<?php
	$myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1945, date("Y"));
	  $myCalendar->dateAllow("2008-05-13", date("Y-m-d"));
	  $myCalendar->setAlignment("left", "bottom");
	  $myCalendar->writeScript();
		  ?>
		  
<br><br>

<?php
if ($pertamax == "1")
{
?>
<button type="button" class="submit_button" type="submit" id="skip_button" onclick=onSkip()>
Skip </button>

<?php
}
?>


		

<button type="button" class="submit_button" type="submit" id="submit_button" onclick=onSubmit()>
Submit </button>

</form>

<br><br>
</div>

<div id="footer"><p><b>Copyright © Krisna Fathurahman, Mochammad Dikra Prasetya, Bima Laksmana</b></p></div>

</div>
 
</body>
</html>
