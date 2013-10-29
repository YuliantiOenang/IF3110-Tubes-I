function addstaffchk()
{
	var username = document.getElementById("userid");	
	var fullname = document.getElementById("fullname");	
	var password = document.getElementById("password");	
	var password2 = document.getElementById("confirmpassword");
	var email = document.getElementById("email");
	var alamat = document.getElementById("alamat");
	var nohp = document.getElementById("nohp");	
	var provinsi = document.getElementById("provinsi");
	var kabupaten = document.getElementById("kabupaten");	
	
	if (username.value == "")
	{
		alert ("You did not enter a username\n" + "Please enter one now!");	
		return false;
	}
	else if (ic.value == "")
	{
		alert ("You did not enter your IC Number\n" + "Please enter it correctly!");	
		return false;
	}
	else if (name.value == "")
	{
		alert ("You did not enter your name\n" + "Please enter now!");
		return false;
	}
	else if (password.value == "")
	{
		alert ("You did not enter a password\n" + "Please enter one now!");	
		return false;
	}
	else if (password2.value == "")
	{
		alert ("You did not enter a validated password\n" + "Please enter it correctly!");	
		return false;
	}
	
	
	else if (address.value == "")
	{
		alert ("You did not enter your address\n" + "Please enter it correctly!");	
		return false;
	}
	else if (phone.value == "")
	{
		alert ("You did not enter your phone\n" + "Please enter it correctly!");	
		return false;
	}
	else if (password2.value != password.value)
	{
		alert("The two password you entered are not same\n" + "Please re-enter both now!");
		return false;
	}
	else
	return true;
	
}