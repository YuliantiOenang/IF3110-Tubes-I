<html>

<head>
<script src="ajax.js"></script>

<script type="text/javascript">
function ValidateForm(form)
{

var a=document.forms["form1"]["name"].value;
var c=document.forms["form1"]["address"].value;
var d=document.forms["form1"]["contact"].value;
var e=document.forms["form1"]["email"].value;
var f=document.forms["form1"]["username"].value;
var g=document.forms["form1"]["password"].value;
var h=document.forms["form1"]["cpassword"].value;
if (a==null || a=="")
  {
  alert("Name must be filled out");
  return false;
  }
if (f.length<5)
  {
  alert("Username must be more than 5 characters");
  return false;
  }
if (g.length<8)
  {
  alert("Password must be more than 8 characters");
  return false;
  }
if (c==null || c=="")
  {
  alert("Address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Email address must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("username must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("Confirm password must be filled out");
  return false;
  }
if (h!=g)
  {
  alert("Password is not same with confirmed one!");
  return false;
  }
 
if (e==g)
  {
  alert("Password is same email address!");
  return false;
  }
var reg = /^[a-z][0-9a-z]*([._][0-9a-z])*[@][a-z0-9]+([.][a-z]{2,})+$/;
if (!reg.test(e)){
	alert("Email is not valid");
	return false;
}
reg = /^[A-Z][a-z]+([\ ][A-Za-z]+)+$/;
if (!reg.test(a)){
	alert("Email is not valid");
	return false;
}

	var data = {"name" : a, "address" : c, "contact" : d, "email" : e, "username" : f, "password" : g};
	var callback = function(response){	
		if(response.status == "ok"){
			alert("Anda berhasil sign up");
			window.location = "index.php"
		}else{
			alert(response.message);
		}
	};
	
	sendAjax(data, "handle_registration.php", callback);
}
</script>

</head>

<body>

<form id="form1" name="form1" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">  
  <tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		echo 'Register Here';
		?>	
	    </div></td>
  </tr>
  
  
  <tr>
    <td width="95"><div align="right">Name:</div></td>
    <td width="171"><input type="text" name="name" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Address:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  <tr>
    <td><div align="right">Email:</div></td>
    <td><input type="text" name="email" /></td>
  </tr>
 <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right">Confirm Password:</div></td>
    <td><input type="password" name="cpassword" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="button" onclick="return ValidateForm()" value="Submit" /></td>
  </tr>
</table>
</form>

</body>
</html>