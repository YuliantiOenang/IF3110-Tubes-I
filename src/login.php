<!DOCTYPE html>
<html>
<body>

<h1>Login</h1><br/>
<?php

?>
<form name="loginForm" action="index.php" onsubmit="return validateForm()" method="post">
Username: <input type="text" name="username"><br/>
Password: <input type="password" name="pwd"><br/>
<input type="submit" value="Login">
</form>

<script>
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
</script>

</body>
</html> 
