<html>

<head>
<title>Home</title>

<style type="text/css">
  #popup_login{
  margin: 0; 
  margin-left: 40%; 
  margin-right: 40%;
  margin-top: 50px; 
  padding-top: 10px; 
  width: 20%; 
  height: 150px; 
  position: absolute; 
  background: #FBFBF0; 
  border: solid #000000 2px; 
  z-index: 9; 
  font-family: arial; 
  <!-- visibility: hidden; -->
  }
</style>

<script type = "text/javascript">
	function PopupLogin(showhide)
	{
		if(showhide == "show")
		{
			document.getElementById('popup_login').style.visibility="visible";
		}
		else if(showhide == "hide")
		{
			document.getElementById('popup_login').style.visibility="hidden"; 
		}
	}
	
	function CheckLogin()
	{
		var val_username  = document.forms ["form_login"] ["username"].value;
		var val_password = document.forms ["form_login"] ["password"].value;
		var err_login = document.getElementById("err_login");
		
		//pengecekan username dan password ke db
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				err_login.innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","validasi_login.php?username="+val_username+"&pass="+val_password,true);
		xmlhttp.send();
	}
</script>
</head>

<body>
<h1> Home </h1>

<div id = "popup_login">
	<form name="form_login" action="javascript:CheckLogin();" method="post">
	<center>Username:</center>
	<center><input name="username" size="14" /></center>
	<center>Password:</center>
	<center><input name="password" type="password" size="14" /></center>
	<center> <div id = "err_login" style="font-size:12px;color:red"><!-- --></div> </center>
	<center><input type="submit" name="submit" value="login"/></center>
	</form>
	<br />
	<center><a href="javascript:PopupLogin('hide');">close</a></center>
</div>
<a href = "javascript:PopupLogin('show');">Login</a>
<a href = "form_registrasi.html"> Register </a>
</body>
</html>