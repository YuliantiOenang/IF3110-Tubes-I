function choose_top() {
	choose_top_food();
	choose_top_dress();
	choose_top_furniture();
	choose_top_tool();
	choose_top_other();
	choose_2_food();
	choose_2_dress();
	choose_2_furniture();
	choose_2_tool();
	choose_2_other();
	choose_3_food();
	choose_3_dress();
	choose_3_furniture();
	choose_3_tool();
	choose_3_other();
}

function choose_top_food() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("first_box_1").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_top.php?catt=Makanan", true);
	xmlhttp.send();
}

function choose_top_dress() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("first_box_2").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_top.php?catt=Pakaian", true);
	xmlhttp.send();
}

function choose_top_furniture() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("first_box_3").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_top.php?catt=Furnitur", true);
	xmlhttp.send();
}

function choose_top_tool() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("first_box_4").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_top.php?catt=Peralatan Dapur", true);
	xmlhttp.send();
}

function choose_top_other() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("first_box_5").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_top.php?catt=Alat Sehari - hari", true);
	xmlhttp.send();
}

function choose_2_food() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("second_box_1").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_2.php?catt=Makanan", true);
	xmlhttp.send();
}

function choose_2_dress() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("second_box_2").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_2.php?catt=Pakaian", true);
	xmlhttp.send();
}

function choose_2_furniture() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("second_box_3").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_2.php?catt=Furnitur", true);
	xmlhttp.send();
}

function choose_2_tool() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("second_box_4").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_2.php?catt=Peralatan Dapur", true);
	xmlhttp.send();
}

function choose_2_other() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("second_box_5").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_2.php?catt=Alat Sehari - hari", true);
	xmlhttp.send();
}

function choose_3_food() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("third_box_1").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_3.php?catt=Makanan", true);
	xmlhttp.send();
}

function choose_3_dress() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("third_box_2").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_3.php?catt=Pakaian", true);
	xmlhttp.send();
}

function choose_3_furniture() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("third_box_3").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_3.php?catt=Furnitur", true);
	xmlhttp.send();
}

function choose_3_tool() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("third_box_4").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_3.php?catt=Peralatan Dapur", true);
	xmlhttp.send();
}

function choose_3_other() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("third_box_5").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "svr/choose_3.php?catt=Alat Sehari - hari", true);
	xmlhttp.send();
}