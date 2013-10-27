<form name="loginForm" action="#" method="POST" onsubmit="onLoginClick('#', 'loginForm', 'loginResult'); return false;">
	Username : <input type="text" name="username"><br>
	Password : <input type="password" name="password"><br>
	<input type="submit" value="submit" name="submit">
    <input type="button" value="back" onClick="history.go(-1);return true;">
</form>
<div id="loginResult"></div>

