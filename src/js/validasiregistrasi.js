function enableRegister(){
	if(checkUserName(document.register_form.username.value) &&
	checkPass(document.register_form.password.value, document.register_form.username.value, document.register_form.email.value) &&
	checkCPass(document.register_form.confirm_password.value, document.register_form.password.value) &&
	validateFullName(document.register_form.nama_lengkap.value) &&
	checkEmail(document.register_form.email.value))
	{
		document.register_form.submit.disabled =false;
	}
	else
	{
		document.register_form.submit.disabled =true;
	}
}

function checkEmail(email){	
	var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	if(pattern.test(email)){
		var xmlhttp;
		if (email.length==0) { 
			  document.getElementById("v_email").innerHTML="";
			  return;
		}
		if (window.XMLHttpRequest) {
		  // code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		}
		else {
		  // code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("v_email").innerHTML=xmlhttp.responseText;
		  }
		}
		xmlhttp.open("GET","validasiemail.php?q="+email,true);
		xmlhttp.send();
		return true;
	} else {   
		document.getElementById('v_email').innerHTML='<font color="red">Salah</font>';
		return false;
	}
}	

function checkUserName(uname){	
	var pattern=/^([a-zA-Z0-9_.-])+([a-zA-Z0-9_.-])+([a-zA-Z0-9_.-])+([a-zA-Z0-9_.-])+([a-zA-Z0-9_.-])+/;
	if(pattern.test(uname)){         
		var xmlhttp;
		if (uname.length==0) { 
			  document.getElementById("v_uname").innerHTML="";
			  return;
		}
		if (window.XMLHttpRequest) {
		  // code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		}
		else {
		  // code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("v_uname").innerHTML=xmlhttp.responseText;
		  }
		}
		xmlhttp.open("GET","validasiusername.php?q="+uname,true);
		xmlhttp.send();
		return true;
	}else{   
		document.getElementById('v_uname').innerHTML='<font color="red">Salah</font>';
		return false;
	}
}

function checkCPass(cpass, pass){
	if(cpass == pass){
		document.getElementById('v_cpass').innerHTML='<font color="green">Benar</font>';
		return true;					
	}else{
		document.getElementById('v_cpass').innerHTML='<font color="red">Salah</font>'; 
		return false;
	}
}			

function checkPass(pass, uname, email){
	if((pass != uname) && (pass != email)){
		document.getElementById('v_pass').innerHTML='<font color="green">Benar</font>';
		return true;					
	}else if(pass == uname){
		document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan username</font>'; 
		return false;
	}
	else if(pass == email){
		document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan email</font>'; 
		return false;
	}
	else{
		document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan username/email</font>'; 
		return false;
	}
}

function validateFullName(nama) {
		var str = nama;
		var idx = str.indexOf(' ');
		if (idx > 0 && idx < str.length - 1) {
			var chr1 = str.charAt(idx - 1);
			var chr2 = str.charAt(idx + 1);
			if (chr1 != ' ' && chr2 != ' ') {
				document.getElementById('v_nama').innerHTML='<font color="green">Benar</font>';
				return true;	
			} else {
				document.getElementById('v_nama').innerHTML='<font color="red">Nama lengkap minimal 2 kata dipisahkan 1 spasi</font>'; 
			return false;
			}
		} else {
			document.getElementById('v_nama').innerHTML='<font color="red">Nama lengkap minimal 2 kata dipisahkan 1 spasi</font>'; 
			return false;
		}
}

function enableRegisterKartuKredit(){
	if(checkCardNumber(document.register_form.card_number.value) && 
	checkNameOnCard(document.register_form.name_on_card.value,document.register_form.card_number.value)
	)
	{
		document.register_form.submit.disabled =false;
	}
	else
	{
		document.register_form.submit.disabled =true;
	}
}

function checkCardNumber(cardnumber){	        
	var xmlhttp;
	if (cardnumber.length==0) { 
		  document.getElementById("v_card_number").innerHTML="";
		  return;
	}
	if (window.XMLHttpRequest) {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {
	  // code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("v_card_number").innerHTML=xmlhttp.responseText;
	  }
	}
	xmlhttp.open("GET","validasicardnumber.php?q="+cardnumber,true);
	xmlhttp.send();
	return true;
}
function checkNameOnCard(name,number){	  
	var xmlhttp;
	if (name.length==0) { 
		  document.getElementById("v_name_on_card").innerHTML="";
		  return;
	}
	if (window.XMLHttpRequest) {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {
	  // code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("v_name_on_card").innerHTML=xmlhttp.responseText;
	  }
	}
	xmlhttp.open("GET","validasinameoncard.php?q="+name+"&r="+number,true);
	xmlhttp.send();
	return true;
}