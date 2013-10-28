function login() {
	var x = window.innerWidth/2 - 250;
	var y = window.innerHeight/2 - 65;
	newwindow = window.open('login.php', 'name', 'height=130, width=500');
	newwindow.moveTo(x,y);
	if (window.focus) {
		newwindow.focus();
	}
	return false;
}

function validateForm()
{
	// validation on client side
	var x=document.forms["loginForm"]["username"].value;
	if (x==null || x=="")
	{
		alert("Username harus diisi.");
		return false;
	}
	var y=document.forms["loginForm"]["pwd"].value;
	if (y==null || y=="")
	{
		alert("Password harus diisi.");
		return false;
	}
	
	// validation on server side
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "validate_customer.php?usr="+Henry+"&pass="+Ford, true);
	xmlhttp.send();
	
	alert("Welcome "+x+" !");
	close();
	return true;
}