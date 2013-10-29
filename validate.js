var usernamevalid = false;
var emailvalid = false;
var numbervalid = false;
var namevalid = false;

function validate(method, value, id) {
	var param = "method="+method+"&value="+value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("POST", "validate.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(id).innerHTML = xmlhttp.responseText;
			if (xmlhttp.responseText.search("available") >= 0) {
				if (method == "username") {
					usernamevalid = true;
				} else {
					emailvalid = true;
				}
				if (method == "number") {
					numbervalid = true;
				} else if (method == "name") {
					namevalid = true;
				}
			} else {
				if (method == "username") {
					usernamevalid = false;
				} else {
					emailvalid = false;
				}
				if (method == "number") {
					numbervalid = false;
				} else if (method == "name") {
					namevalid = false;
				}
			}
		}
	}
	xmlhttp.send(param);
}

function validateCard(number, name) {
	validate("number", number, "num");
	validate("name", name, "name");
	return (numbervalid && namevalid);
}

function validateEmail(method, value, id) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(value)) {
		validate(method, value, id);
	} else {
		document.getElementById(id).innerHTML = "not a valid email address";
		emailvalid = false;
	}
} 

function validateUsername(method, value, id) {
	if (value.length > 4) {
		validate(method, value, id);
	} else {
		document.getElementById(id).innerHTML = "username must be at least 5 characters";
		usernamevalid = false;
	}
}

function validatePassword(pass, rpass, username, email, id) {
	if (pass.length > 7) {
		if (pass === username) {
			document.getElementById(id).innerHTML = "password must be different from username";
		} else if (pass === email) {
			document.getElementById(id).innerHTML = "password must be different from email";
		} else if (pass === rpass) {
			document.getElementById(id).innerHTML = "password matches";
			return true;
		} else if (pass !== rpass) {
			document.getElementById(id).innerHTML = "password does not match";
		}
	} else {
		document.getElementById(id).innerHTML = "too short";
	}
	return false;
}

function validateName(name, id) {
	var re = /^([A-Z][a-z]*(\s)[A-Z][a-z]*)*$/;
	if (re.test(name)) {
		document.getElementById(id).innerHTML = "name valid";
		return true;
	} else {
		document.getElementById(id).innerHTML = "must contains at least 1 space, first letter of word must be capital";
		return false;
	}
}

function validateEmpty(value, id) {
	if (value == '') {
		document.getElementById(id).innerHTML = "must be filled";
		return false;
	} else {
		document.getElementById(id).innerHTML = "";
		return true;
	}
	
}

function validateOther() {
	var a = validateEmpty(document.getElementById("telephone").value, "valtelephone");
	var b = validateEmpty(document.getElementById("address").value, "valaddress");
	var c = validateEmpty(document.getElementById("city").value, "valcity");
	var d = validateEmpty(document.getElementById("province").value, "valprovince");
	var e = validateEmpty(document.getElementById("postal").value, "valpostal");
	var v = a && b && c && d && e;
	return v;
}

function validateAll() {
	var satu = validateOther();
	var dua = validateName(document.getElementById("name").value, "fullname");
	var tiga = validatePassword(document.getElementById("password1").value, document.getElementById("password2").value, document.getElementById("username").value, document.getElementById("email").value, "valpasswords");
	if (satu && dua && tiga && usernamevalid && emailvalid) {
		return true;
	}
	return false;
}

function validateEdit() {
	var satu = validateOther();
	var dua = validateName(document.getElementById("name").value, "fullname");
	if (satu && dua) {
		return true;
	}
	return false;
}

function validateChange(method, value, id) {
	var param = "method="+method+"&value="+value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("POST", "validatee.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", param.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(id).innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.send(param);
}

function validateLogin(username, password) {
	return (username.length() > 0 && password.length() > 0);
}