function cekUsername(){
	var username = getElementById("username").value;
	var text = "";
	if (username.length > 5){
		if (){
			text = "";
		}
	}
	getElementById("responseUsername").innerHTML = text;
}

function cekEmail(){
	var email = getElementById("email").value.split('@');
	var text = "";
	if (email.length == 2 && email[0].length > 0){
		var email1 = email.split('.');
		if (email1.length > 1 && email1[0].length > 0
				&& email1[email1.length-1].length > 1){
			text = "";
		}
	}
	getElementById("responseEmail").innerHTML = text;
}

function cekPasswordMatch(pass, passC){
	var text = "";
	if (pass.localeCompare(passC) != 0){
		text = "";
	}
	getElementById("responsePassword").innerHTML = text;
}

function cekFullname(){
	var username = getElementById("fullname").value;

	if (x != null)
}

function cekAngka(angka){
	if (!isNaN(parseFloat(angka)) && isFinite(angka)){
		
	} else {
		
	}
}
