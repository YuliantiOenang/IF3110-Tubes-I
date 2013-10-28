//add_task javascript
var chkpassword1 = true;
var chkpassword2 = false;
var chknama = true;
var chkHP = true;
var chkpos = true;
var chkprovinsi = true;
var chkalamat = true;
var chkkabupaten = true;

function hide_create_button() {
	document.getElementById("create").style.display = 'none';
}

function show_create_button() {
	if(chknama==true && chkpassword1==true && chkpassword2==true && chkHP==true && chkpos == true && chkkabupaten == true && chkalamat == true && chkprovinsi == true)
		document.getElementById("create").style.display = 'block';
}

function check_string() {
	var i;
	var str = document.getElementById("taskname").value;
	for (i = 0; i < str.length; i++) {
		if ((str.charAt(i) != ' ' && str.charCodeAt(i) < 48) || (str.charCodeAt(i) > 57 && str.charCodeAt(i) < 65) || (str.charCodeAt(i) > 90 && str.charCodeAt(i) < 97) || str.charCodeAt(i) > 122) {
			return false;
		}
	}
	return true;
}

function is_only_number(str){
	var i;
	for (i = 0; i < str.length; i++) {
		if ((str.charCodeAt(i) < 48) || (str.charCodeAt(i) > 57)) {
			return false;
		}
	}
	return true;
}

function is_only_character(str){
	var i;
	for (i = 0; i < str.length; i++) {
		if ((str.charAt(i) != ' ' && str.charCodeAt(i) < 48) || (str.charCodeAt(i) > 57 && str.charCodeAt(i) < 65) || (str.charCodeAt(i) > 90 && str.charCodeAt(i) < 97) || str.charCodeAt(i) > 122) {
			return false;
		}
	}
	return true;
}


function check_user_name() {
	var str = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(str!=""){
		if(str.length>4){
			if(str!=password){
			chkusername=true;
			document.getElementById("warning-message").innerHTML="";
			}else{
				chkusername=false;
				hide_create_button();
				document.getElementById("warning-message").innerHTML="Username Tidak Boleh Sama Dengan Password";
			}
		}
		else{
			chkusername=false;
			hide_create_button();
			document.getElementById("warning-message").innerHTML="Username minimal 5 karakter";
		}
	}
}

function check_password() {
	var str = document.getElementById("gantipassword").value;
	if(str!=""){
		if(str.length>=8){
			chkpassword1=true;
			show_create_button();
			document.getElementById("warning-password").innerHTML="";
			
		}
		else{
			chkpassword1=false;
			hide_create_button();
			document.getElementById("warning-password").innerHTML="Password minimal 8 karakter";
		}
	}
}

function check_nama() {
	var str = document.getElementById("gantinama").value;
	var str2 = document.getElementById("gantipassword").value; 
	if(str!=""){
		if(str.substring(0,str.lastIndexOf(' ')).length>0 && str.substring(str.lastIndexOf(' ')+1,str.length).length>0){
			chknama=true;
			show_create_button();
			document.getElementById("warning-nama").innerHTML="";
			
		}
		else{
			chknama=false;
			hide_create_button();
			document.getElementById("warning-nama").innerHTML="Format nama masih salah";
		}
	}
}

function check_confirmpassword() {
	var str = document.getElementById("gantipassword").value;
	var str2 = document.getElementById("konfirmasigantipassword").value;
	if(str2!=""){
		if(str==str2){
			chkpassword2=true;
			show_create_button();
			document.getElementById("warning-konfirmasi").innerHTML="";
		}
		else{
			chkpassword2=false;
			hide_create_button();
			document.getElementById("warning-konfirmasi").innerHTML="Password gagal dikonfirmasi";
		}
	}
}

function check_alamat() {
	var str = document.getElementById("alamat").value;
	if(str!=""){
		chkalamat=true;
		show_create_button();
		document.getElementById("warning-alamat").innerHTML="";
	}
	else{
		chkalamat=false;
		hide_create_button();
		document.getElementById("warning-alamat").innerHTML="Isi Alamat!";
	}
}

function check_provinsi() {
	var str = document.getElementById("provinsi").value;
	if(str!=""){
		chkprovinsi=true;
		show_create_button();
		document.getElementById("warning-provinsi").innerHTML="";
	}
	else{
		chkprovinsi=false;
		hide_create_button();
		document.getElementById("warning-provinsi").innerHTML="Isi Provinsi!";
	}
}

function check_kabupaten() {
	var str = document.getElementById("kabupaten").value;
	if(str!=""){
		chkkabupaten=true;
		show_create_button();
		document.getElementById("warning-kabupaten").innerHTML="";
	}
	else{
		chkkabupaten=false;
		hide_create_button();
		document.getElementById("warning-kabupaten").innerHTML="Isi Kabupaten!";
	}
}

function check_alamat() {
	var str = document.getElementById("alamat").value;
	if(str!=""){
		chkalamat=true;
		show_create_button();
		document.getElementById("warning-alamat").innerHTML="";
	}
	else{
		chkalamat=false;
		hide_create_button();
		document.getElementById("warning-konfirmasi").innerHTML="Isi Alamat";
	}
}


function check_HP() {
	var str = document.getElementById("HP").value;
	if(str!=""){
		if(is_only_number(str)){
			chkHP=true;
			show_create_button();
			document.getElementById("warning-HP").innerHTML="";
			
		}
		else{
			chkHP=false;
			hide_create_button();
			document.getElementById("warning-HP").innerHTML="Nomor Telepon Harus Angka";
		}
	}
}

function check_pos() {
	var str = document.getElementById("pos").value;
	if(str!=""){
		if(is_only_number(str)){
			chkpos=true;
			show_create_button();
			document.getElementById("warning-pos").innerHTML="";
			
		}
		else{
			chkpos=false;
			hide_create_button();
			document.getElementById("warning-pos").innerHTML="Kode Pos Harus Angka";
		}
	}
}

function getAjax() //a function to get AJAX from browser
{
	try
	{
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) 
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{
				alert("Can't get AJAX, browser error");
				return false;
			}
		}
	}
}