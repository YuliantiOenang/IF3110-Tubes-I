function formValidation()  
{  
var uname = document.registration.uname;  
var pass = document.registration.pass;  
var cpass = document.registration.cpass;  
var nama = document.registration.nama;  
var uemail = document.registration.uemail;  

if(username_validation(uname))  
{  
	if(pass_validation(pass))  
	{
		if(cpass_validation(cpass))  
		{  
			if(allLetter(nama))  
			{  
				if(ValidateEmail(uemail))  
				{  
				return true;
				}   
			}  
		}  
	} 
}
return false;  
}  

function updateValidation()
{
var pass = document.getElementById('pass');
var cpass = document.getElementById('cpass');
var uemail = document.getElementById('uemail');
var nama = document.getElementById('nama');
if(pass_validation2(pass))  
{
	if(cpass_validation(cpass))  
	{  
		if(allLetter(nama))  
		{  
			if(ValidateEmail(uemail))  
			{  
			return true;
			}   
		}  
	}  
} 
return false;
}

function CCValidation()
{
var number = document.getElementById('CCNumber');
var name = document.getElementById('CCName');
var month = document.getElementById('monthExpires');
var year = document.getElementById('yearExpires');

if(CCNumber_validation(CCNumber))
	{
		if (Date_Validation())
		{
		return true;
		}
	}
return false;
}



function CCNumber_validation(CCNumber)
{
	var CC_len = CCNumber.value.length;
	var CCNumber = document.getElementById('CCNumber');
	var isnum = /^\d+$/.test(CCNumber.value);
	if ((CC_len != 16) || (!isnum)) {
		alert("Invalid Number");
		CCNumber.focus();
		return false;
	}
	return true;
}

function Date_Validation()
{
	var monthExpires = document.getElementById('monthExpires');
	var yearExpires = document.getElementById('yearExpires');
	if ((monthExpires.value == "") || (yearExpires.value == "")) {
		alert("Invalid Expiration Date");
		return false;
	}
	return true;
}

function username_validation(uname)  
{  
var uname_len = uname.value.length;  

if (uname_len == 0 || uname_len < 5)  
{  
	alert("User name minimal 5 karakter");  
	uname.focus();  
	return false;  
}  
return true;  
}  

function pass_validation2(pass)
{
var pass = document.getElementById('pass'); 
var pass_len = pass.value.length; 
if (pass_len < 8) {
	alert("Password minimal 8 karakter \n");
	pass.focus();  
	return false; }
return true;
} 

function pass_validation(pass) 
{
var uname = document.getElementById('uname');  
var pass = document.getElementById('pass'); 
var pass_len = pass.value.length; 
if (pass_len < 8) {
	alert("Password minimal 8 karakter \n");
	pass.focus();  
	return false;
	} else if (pass.value==uname.value){
				alert("Password tidak boleh sama dengan username \n");
				pass.focus();  
				return false;
				}
return true;
} 

function cpass_validation(cpass)  
{  
var pass = document.getElementById('pass'); 
var cpass = document.getElementById('cpass'); 
if (cpass.value !== pass.value){
			alert("Konfirmasi password tidak sesuai \n");
			cpass.focus();  
			return false;
			}
return true;
} 

function allLetter(nama)  
{   
var letters = /[\-\w]+\s[\-\w]+/;  
if(nama.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Minimal mengandung satu spasi di antara 2 karakter (ada nama depan dan nama belakang)');  
nama.focus();  
return false;  
}  
} 

function ValidateEmail(uemail)  
{ 
var pass = document.getElementById('pass'); 
var uemail = document.getElementById('uemail'); 
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if (uemail.value == pass.value){
	alert("email tidak boleh sama dengan password \n");
	cpass.focus();  
	return false;
	}
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
}

  
