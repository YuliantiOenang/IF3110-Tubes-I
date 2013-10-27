function login() {
	var x = window.innerWidth/2 - 250;
	var y = window.innerHeight/2 - 63;
	newwindow = window.open('login.php', 'name', 'height=125, width=500');
	newwindow.moveTo(x,y)
	if (window.focus) {
		newwindow.focus();
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