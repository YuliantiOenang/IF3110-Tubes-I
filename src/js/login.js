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
		alert("Username must be filled out");
		return false;
	}
	var y=document.forms["loginForm"]["pwd"].value;
	if (y==null || y=="")
	{
		alert("Password must be filled out");
		return false;
	}
	alert("Welcome "+x+" !");
}