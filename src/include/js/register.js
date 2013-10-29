function checkUsername() {
	var xmlhttp = new XMLHttpRequest(); //IE7+, FF, Chrome, Safari, Opera

	var x = document.getElementById("username").value;
	xmlhttp.onreadystatechange=function() {
  		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  			//document.getElementById("username-info").innerHTML = xmlhttp.responseText;
  			//document.getElementById("username-info").innerHTML = x.length;

  			if (x.length < 5 || x.length > 16) {
  				document.getElementById("username-info").innerHTML = " Panjang harus antara 5 sampai 16";
  			} else if (x === document.getElementById("password").value) {
  				document.getElementById("username-info").innerHTML = " Tidak boleh sama dengan password";
			} else if (xmlhttp.responseText === "valid") {
				document.getElementById("username-info").innerHTML = " Username Bisa Dipakai";
			} else {
				document.getElementById("username-info").innerHTML = " Username Sudah Digunakan";
			}
		}
  	}  	

  	xmlhttp.open("GET","../register/check_username/" + x, true);
	//xmlhttp.open("POST","../register/check_username/",true);
	//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send();
}

function checkEmail() {
	var xmlhttp = new XMLHttpRequest(); //IE7+, FF, Chrome, Safari, Opera

	var x = document.getElementById("email").value;
	xmlhttp.onreadystatechange=function() {
  		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  			//document.getElementById("email-info").innerHTML = xmlhttp.responseText;
  			//document.getElementById("email-info").innerHTML = x.length;

  			if (x.length > 16) {
  				document.getElementById("email-info").innerHTML = " Panjang harus kurang dari 32";
  			} else if (!isEmailValid(x)) {
  				document.getElementById("email-info").innerHTML = " Bukan sebuah email yang valid";
  			} else if (x === document.getElementById("password").value) {
  				document.getElementById("email-info").innerHTML = " Tidak boleh sama dengan password";
			} else if (xmlhttp.responseText === "valid") {
				document.getElementById("email-info").innerHTML = " Email Bisa Dipakai";
			} else {
				document.getElementById("email-info").innerHTML = " Email Sudah Digunakan";
			}
		}
  	}
  	
  	xmlhttp.open("GET","../register/check_email/" + x, true);
	xmlhttp.send();
}

function isEmailValid (email) {
	//var regex = /[A-Za-z._-0-9]+@[A-Za-z]+[A-Za-z][A-Za-z]+/; //minimal 2 kata degan spasi ditengah
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function checkFullname() {
	var x = document.getElementById("fullname").value;
	if (x.length > 64) {
			document.getElementById("fullname-info").innerHTML = " Panjang harus kurang dari 64 karakter";
	} else if (isFullnameValid (x)) {
		document.getElementById("fullname-info").innerHTML = " Fullname Bisa Dipakai";
	} else {
		document.getElementById("fullname-info").innerHTML = " Fullname Tidak Valid, Minimal 2 kata";
	}
}

function isFullnameValid (fullname) {
	var regex = /[A-Za-z]+ [A-Za-z ]+/; //minimal 2 kata degan spasi ditengah
	return regex.test(fullname);
}

function checkPassword() {
	var x = document.getElementById("password").value;
	if (x.length < 8 || x.length > 32) {
			document.getElementById("password-info").innerHTML = " Panjang harus antara 8 sampai 32";
	} else if (x === document.getElementById("username").value) {
			document.getElementById("password-info").innerHTML = " Tidak boleh sama dengan username";
	} else if (x === document.getElementById("email").value) {
		document.getElementById("password-info").innerHTML = " Tidak boleh sama dengan email";
	} else {
		document.getElementById("password-info").innerHTML = " Password bisa digunakan";
	}
}


function checkConfirmPassword() {
	var x = document.getElementById("confirm-password").value;
	if (x === document.getElementById("password").value) {
		document.getElementById("confirm-password-info").innerHTML = " Sudah benar";
	} else {
		document.getElementById("confirm-password-info").innerHTML = " Harus sama dengan password";
	}

	//document.getElementById("confirm-password-info").innerHTML = x;
}