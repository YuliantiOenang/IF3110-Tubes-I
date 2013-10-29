var xmlhttp;
function login() {
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			var str = xmlhttp.responseText;
			if(str == "OK") {
				document.getElementById("hasil").innerHTML = "redirecting...";
				redirect();
			} else {
				document.getElementById("hasil").innerHTML = str;
			}
		}
	}
	xmlhttp.open("GET","proses_login.php?u="+user+"&p="+pass,true);
	xmlhttp.send();
}

function signout() {
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			var str = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","proses_logout.php?u=out&p=out",true);
	xmlhttp.send();
	redirect();
}

function redirect() {
	timer = setTimeout(window.location='home.php',1500);
}

function buy() {
	var sum = document.getElementById("number").value;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			var str = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","proses_buy.php?u="+sum,true);
	xmlhttp.send();
}