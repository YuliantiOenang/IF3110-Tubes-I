/**
 * @author Dimas
 */
 

function validusername(username)
{
	console.log(username);
	var xmlhttp;
	if (username.length==0)
	  { 
		  document.getElementById("validHint").innerHTML="";
		  return true;
	  } else if (username.length<5){
		document.getElementById("validHint").innerHTML="username must be 5 char in minimum";
		  return true;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.open("GET","validate.php?username="+username,false);
	xmlhttp.send();
	console.log(xmlhttp.responseText);
	var data = JSON.parse(xmlhttp.responseText);
	document.getElementById("validHint").innerHTML=data.response;
	if(data.result == "true") {
		return true;
	} else {
		return false;
	}
}

function valid_password(password)
{
	var xmlhttp;
	if (password.length==0)
	  { 
		  document.getElementById("validPaswordHint").innerHTML="";
		  return true;
	  } else if (password.length < 8 ) {
			document.getElementById("validPaswordHint").innerHTML="Password must be 8 chars minimum";
		  return false;
	  } else {
		document.getElementById("validPaswordHint").innerHTML="Password OK";
		  return true;
	  }
}

function valid_email(email)
{
	var xmlhttp;
	var password = document.forms["register"]["password"].value;
	if (email.length==0)
	  { 
	  document.getElementById("validEmailHint").innerHTML="";
	  return true;
	  } else if(password == email) {
		document.getElementById("validEmailHint").innerHTML="tidak boleh sama dengan password";
	  return false;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	
	xmlhttp.open("GET","validate.php?email="+email,false);
	xmlhttp.send();
	console.log(xmlhttp.responseText);
	var data = JSON.parse(xmlhttp.responseText);
	document.getElementById("validEmailHint").innerHTML=data.response;
	if(data.result == "true") {
		return true;
	} else {
		return false;
	}
}

function valid_confirmpassword(confirmpassword)
{
	var xmlhttp;
	var password = document.forms["register"]["password"].value;
	if (confirmpassword.length==0)
	  { 
	  document.getElementById("validConfirmPasswordHint").innerHTML="";
	  return true;
	  }
	else if(confirmpassword == password) {
		document.getElementById("validConfirmPasswordHint").innerHTML="Password's confirmed";
	  return true;
	} else {
		document.getElementById("validConfirmPasswordHint").innerHTML="Password not same";
		return false;
	}
}

function valid_fullname(fullname) 
{
	var regex =  /^[a-z]+\s[a-z ]+$/i;
	
	if(fullname.length == 0) {
		document.getElementById("validNameHint").innerHTML= "";
        return true;
	} else if (regex.test(fullname)) {
		document.getElementById("validNameHint").innerHTML= "Full name valid";
        return true;
    }
    else {
		document.getElementById("validNameHint").innerHTML= "Full name invalid";
		return false;
    }
}

function validation() {
	var _validusername =  validusername(document.forms["register"]["username"].value);
	
	var _valid_fullname = valid_fullname(document.forms["register"]["nama"].value);
	
	var _valid_confirmpassword = valid_confirmpassword(document.forms["register"]["confimrpassword"].value);
	
	var _valid_email = valid_email(document.forms["register"]["email"].value);
	
	var _valid_password = valid_password(document.forms["register"]["password"].value);
	console.log(_validusername && _valid_fullname && _valid_confirmpassword && _valid_email && _valid_password);
	document.forms["register"]["button"].disabled = !(_validusername && _valid_fullname && _valid_confirmpassword && _valid_email && _valid_password);
	
	console.log(document.forms["register"]["button"].disabled);
}