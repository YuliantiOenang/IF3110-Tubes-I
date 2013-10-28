// global.js
// Deklarasi fungsi-fungsi Javascript yang umum.

// Fungsi untuk membuat XMLHttpRequest.
function createXMLHttpRequest()	{
	var xmlhttp;
	if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlhttp;
}

// Fungsi-fungsi untuk core
// ------------------------------

window.addEventListener("load", function()	{
	document.getElementById("headerloginbutton").onclick = showLogin;
});

function showLogin()	{
	var popuplayer = document.getElementById("popuplayer");
	var loginelmtstr =
		'<div id="cover"></div> \
		<div id="logindialog"> \
			<div id="logindialoginvisible"><img src="images/blank.jpg" alt="Blank" /></div> \
			<div id="logindialogclose"><a href="javascript:;" id="logindialogclosebutton"> \
			<img src="images/close.png" alt="Close button" /></a></div> \
			<h1>Login Form</h1> \
			<p><input type="text" name="username" placeholder="Username" /></p> \
			<p><input type="password" name="password" placeholder="Password" /></p>  \
			<p><input type="submit" name="login" value="Login" /></p>  \
		</div>';
	popuplayer.innerHTML = loginelmtstr;
	document.getElementById("logindialogclosebutton").onclick = hideLogin;
}
function hideLogin()	{
	var popuplayer = document.getElementById("popuplayer");
	popuplayer.innerHTML = "";
}
