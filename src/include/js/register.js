function checkUsername() {
	var xmlhttp = new XMLHttpRequest(); //IE7+, FF, Chrome, Safari, Opera

	var x = document.getElementById("username").value;
	xmlhttp.onreadystatechange=function() {
  		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  			document.getElementById("username-info").innerHTML = xmlhttp.responseText;
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