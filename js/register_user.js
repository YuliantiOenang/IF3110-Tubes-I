var isUsername = false;
var isPassword = false;
var isEmail = false;
var isFullName = false;
var isNomorHP = false;
var isAddress = false;
var isKodePos = false;
var isKotaKabupaten = false;

function form_check()
{
	if(isUsername && isPassword && isEmail && isFullName){
		//alert("Yeah");
		document.getElementById("button_register").disabled = false;
	} else{
		//alert("Nope");
		document.getElementById("button_register").disabled = true;
	}
}

function checkKodePos(str)
{
	var xmlhttp;
	var kodeposFilter=/[0-9]{1,}$/;
	if (kodeposFilter.test(str)){
		isKodePos = true;
		document.getElementById("kodepos_status").innerHTML="kodepos is acc";
		form_check();
		return;
	} else{
		isKodePos = false;
		document.getElementById("kodepos_status").innerHTML="input is incorrect";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("nomor_hp").innerHTML=xmlhttp.responseText;
		}
	}

	xmlhttp.send();
}

function checkKotaKabupaten(str)
{
	var xmlhttp;
	var kotaFilter=/[A-Za-z]{1,}$/;
	if (kotaFilter.test(str)){
		isKotaKabupaten = true;
		document.getElementById("kota_kabupaten_status").innerHTML="input is acc";
		form_check();
		return;
	} else if(str == ""){
		isKotaKabupaten = true;
		document.getElementById("kota_kabupaten_status").innerHTML="input is empty";
		form_check();
		return;
	} else{
		isKotaKabupaten = false;
		document.getElementById("kota_kabupaten_status").innerHTML="input is empty";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("nomor_hp").innerHTML=xmlhttp.responseText;
		}
	}

	xmlhttp.send();
}

function checkAddress(str)
{
	var xmlhttp;
	if (str.length > 0){
		isAddress = true;
		document.getElementById("alamat_status").innerHTML="";
		form_check();
		return;
	} else{
		isAddress = false;
		document.getElementById("alamat_status").innerHTML="input is empty";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("nomor_hp").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkNomorHP(str)
{
	var xmlhttp;
	var numberFilter=/[0-9]{8,}$/;
	if (numberFilter.test(str)){
		isUsername = true;
		document.getElementById("nomor_hp").innerHTML="number is ok";
		form_check();
		return;
	} else if (str == ""){
		isUsername = false;
		document.getElementById("nomor_hp").innerHTML="input is empty";
		form_check();
		return;
	} else{
		isUsername = false;
		document.getElementById("nomor_hp").innerHTML="handphone number is incorrect";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("nomor_hp").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkUsername(str)
{
	var xmlhttp;
	var nameFilter=/[A-Za-z0-9]{5,}$/;
	if (nameFilter.test(str)){
		isUsername = true;
		document.getElementById("username_status").innerHTML="username is available";
		form_check();
		return;
	} else if (str == ""){
		isUsername = false;
		document.getElementById("username_status").innerHTML="input is empty";
		form_check();
		return;
	} else{
		isUsername = false;
		document.getElementById("username_status").innerHTML="username is not available";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("username_status").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkFullName(str)
{
	var xmlhttp;
	var nameFilter=/[A-Za-z\s]{1,}\s\s*[A-Za-z\s]{1,}$/;
	if (nameFilter.test(str)){
		isFullName = true;
		document.getElementById("fullname_status").innerHTML="name is valid";
		form_check();
		return;
	} else if (str == ""){
		isFullName = false;
		document.getElementById("fullname_status").innerHTML="name is empty";
		form_check();
		return;
	} else{
		isFullName = false;
		document.getElementById("fullname_status").innerHTML="name is invalid";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("username_status").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkPassword(str)
{
	var xmlhttp;
	if (str!=document.getElementById("password").value || str==document.getElementById("username").value){
		isPassword = false;
		document.getElementById("password_status").innerHTML="unmatched password or password is same as username";
		form_check();
		return;
	} else{
		isPassword = true;
		document.getElementById("password_status").innerHTML="matched";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("username_status").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkEmailValid(str)
{
	var xmlhttp;
	var emailFilter=/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/;
	if (emailFilter.test(str)){
		isEmail = true;
		document.getElementById("email_status").innerHTML="email is valid";
		form_check();
		//alert("email is valid");
		return;
	} else{
		isEmail = false;
		document.getElementById("email_status").innerHTML="email is not valid";
		form_check();
		return;
	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("username_status").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}