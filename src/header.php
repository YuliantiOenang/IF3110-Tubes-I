<?php
	$isLogin = false;
	if (isset($_SESSION['userid'])) {
		$isLogin = true;
	}
?>
<script>
	
	function checkCache() {
		if(localStorage.ruserba_key) {
			var xmlhttp;
			console.log(localStorage.ruserba_key);
			if(window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("POST","login_again.php",false);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("key="+localStorage.ruserba_key);
			console.log("Result : " + xmlhttp.responseText);
			data = JSON.parse(xmlhttp.responseText);
			console.log("Result : " + data.result);
			if(data.result == "true") {
				removeById('LoginButton');
				removeById("RegisterButton");
				addLogoutButton('navMember');
				addElement('navMember','welcome','Welcome, '+data.name+' !');
			}
		}
	}
	
	function loginBox() {
		if(document.getElementById("login").style.visibility!="hidden")
			document.getElementById("login").style.visibility="hidden";
		else if(document.getElementById("login").style.visibility=="hidden")
			document.getElementById("login").style.visibility="visible";
	}
	
	function login() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var xmlhttp;
		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("POST","login.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username="+username+"&pass="+password);
		console.log("Result : " + xmlhttp.responseText);
		data = JSON.parse(xmlhttp.responseText);
		console.log("Result : " + data.result);
		if(data.result == "true") {
			removeById('LoginButton');
			removeById("RegisterButton");
			document.getElementById("login").style.visibility="hidden";
			addLogoutButton('navMember');
			addElement('navMember','welcome','Welcome, '+data.name+' !');
			document.getElementById("alert_login").innerHTML = "";
			if(typeof(Storage)!=="undefined")
			{
				localStorage.ruserba_key = data.key;
			}
		} else {
			document.getElementById("alert_login").innerHTML = "username/password incorrect";
		}
	}
	
	function logout() 
	{
		var xmlhttp;
		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("POST","logout.php",false);
		xmlhttp.send();
		console.log("Result : " + xmlhttp.responseText);
		data = JSON.parse(xmlhttp.responseText);
		console.log("Result : " + data.result);
		if(data.result == "true") {
			removeById('LogoutButton');
			removeById('welcome');
			addRegisterButton();
			addLoginButton();
		}
	}
	
	function removeById(id) {
		var elem = document.getElementById(id);
		if(elem) {
			elem.parentNode.removeChild(elem);
		}
	}
	
	function addElement(parentID,id,text) {
		var parentNode = document.getElementById(parentID);
		var newDiv = document.createElement('label');
		newDiv.setAttribute('id',id);
		console.log(text);
		newDiv.innerHTML = text;
		if(parentNode)
			parentNode.insertBefore(newDiv, parentNode.firstChild);
	}
	
	function addElementAtEnd(parentID,id,text) {
		var parentNode = document.getElementById(parentID);
		var newDiv = document.createElement('label');
		newDiv.setAttribute('id',id);
		console.log(text);
		newDiv.innerHTML = text;
		parentNode.appendChild(newDiv, parentNode.firstChild);
	}
	
	function addLogoutButton() {
		var parentNode = document.getElementById('navMember');
		var newDiv = document.createElement('a');
		newDiv.setAttribute('id','LogoutButton');
		newDiv.setAttribute('class','button');
		newDiv.setAttribute('href','#');
		newDiv.setAttribute('onclick','logout()');
		newDiv.innerHTML = "Logout";
		if(parentNode)
			parentNode.insertBefore(newDiv, parentNode.firstChild);
	}
	
	function addRegisterButton() {
		var parentNode = document.getElementById('navMember');
		var newDiv = document.createElement('a');
		newDiv.setAttribute('id','RegisterButton');
		newDiv.setAttribute('class','button');
		newDiv.setAttribute('href','register.php');
		newDiv.setAttribute('onclick','');
		newDiv.innerHTML = "Register";
		parentNode.insertBefore(newDiv, parentNode.firstChild);
	}
	
	function addLoginButton() {
		var parentNode = document.getElementById('navMember');
		var newDiv = document.createElement('a');
		newDiv.setAttribute('id','LoginButton');
		newDiv.setAttribute('class','button');
		newDiv.setAttribute('href','#');
		newDiv.setAttribute('onclick','loginBox()');
		newDiv.innerHTML = "Login";
		parentNode.insertBefore(newDiv, parentNode.firstChild);
	}
	
	if(typeof(Storage)!=="undefined")
	  {
	  // Yes! localStorage and sessionStorage support!
	  // Some code.....
	  checkCache();
	  }
	else
	  {
	  // Sorry! No web storage support..
	  }
	
</script>
<div id="header">
<div id="navigation">
<div id="logo">
	<a href="index.php"> <img   src="img/logo.png" width="150px"/> </a>
</div>
<div id="navCategory">
	<a href="#" class="header_item">Makanan</a>
	<a href="#" class="header_item">Minuman</a>
	<a href="#" class="header_item">Alat Tulis</a>
	<a href="#" class="header_item">Kebersihan</a>
	<a href="#" class="header_item">Obat-obatan</a>
</div>

<div id="navMember">
<?php
	if(!$isLogin) {
		echo '<a href="#" id="LoginButton" class="button" onclick="loginBox()">Login</a>';
		echo '<a href="register.php" id="RegisterButton" class="button">Register</a>';
	} else {
		$username = $_SESSION['username'];
		echo '<label class id="welcome">Welcome,'.$username .'</label>';
		echo '<a href="#" id="LogoutButton" class="button" onclick="logout()">Logout</a>';
	}
?>
	<a href="#" >Shopping Bag <?php 
		$query = "SELECT COUNT(*) AS count_cart FROM cart WHERE username='".$_SESSION['username']."'";
		$result = mysql_query($query, $link);
		if(mysql_num_rows($result)>0) {
			$row = mysql_fetch_array($result);
			echo '('.$row['count_cart'].')';
		}
	?></a> 
</div>
<form id="search" action="search.php">
	<input name="name" type="text" class="text_input" />
	<input type="submit" class="button" value="search"></input>
</form>
</div>

</div>
<br/>
<div id="login">
<form action="index.php">
	<input id="username" type="text" class="text_input" placeholder="username/email" required /> <br/>
	<input id="password" type="password" class="text_input" placeholder="password"  required /> <br/>
	<label id="alert_login"></label>
</form>
<a href="#" class="button" onclick="login()">Login</a>
Member ? <a href="registrasi.php">Daftar</a>
</div>