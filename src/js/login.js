function login() {
	newwindow = window.open('login.php', 'name', 'height=125, width=500');
	if (window.focus) {
		newwindow.focus()
	}
	return false;
}

function validateForm()
{
	var x=document.forms["loginForm"]["username"].value;
	if (x==null || x=="")
	{
		alert("Username harus diisi.");
		return false;
	}
	var y=document.forms["loginForm"]["pwd"].value;
	if (y==null || y=="")
	{
		alert("Password hsrus diisi.");
		return false;
	}
	alert("Welcome "+x+" !");
	close();
	return true;
}