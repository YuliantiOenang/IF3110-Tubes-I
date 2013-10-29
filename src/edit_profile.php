<!DOCTYPE html>

<?php
$username = $_GET['username'];

// Create connection
$con=mysqli_connect("localhost","root","","ruserba");
$name="";
$alamat="";
$provinsi="";
$kecamatan="";
$kodepos="";
$handphone="";

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	$result = mysqli_query($con,"SELECT * FROM user_table");
	
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['username'] == $username)
		{
			$name=$row['nama_lengkap'];
			$alamat=$row['alamat'];
			$provinsi=$row['provinsi'];
			$kecamatan=$row['kecamatan'];
			$kodepos=$row['kodepos'];
			$handphone=$row['handphone'];
			$email=$row['email'];
		}
	}	
}

 
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script>


setInterval(function()
{ 
	var emailErr = '';
	var nameErr = '';
	var passwordErr = '';
	var pass_checkErr = '';
	var kodeposErr = '';
	var handphoneErr = '';
	
	var username = "<?php echo $username; ?>";
	var email = document.getElementById("email").value; 
	var password = document.getElementById("password").value;
	var pass_check = document.getElementById("pass_check").value;
	var name = document.getElementById("name").value.toLowerCase();
	var kodepos = document.getElementById("kodepos").value;
	var handphone = document.getElementById("handphone").value; 
		
	// password check 
	if (password.length == 0);
	else
	if (password.length < 8 || password.length > 28)
		passwordErr = "* Password harus terdiri dari 8-28 karakter"; 
	else
	if (password == username || password == email)
		passwordErr = "* Password tidak boleh sama dengan username atau email";
	else
	if (pass_check != password)
		pass_checkErr = "* Password tidak match!"; 
	
	// name check 
	var cur = 0; 
	if (name.length == 0)
		nameErr = "* Nama harus diisi";
	else
	{
	var  cnt_alpha = new Array();
	cnt_alpha[0] = cnt_alpha[1] = 0; 
	var cnt_space = 0;
	
	for (var i = 0; i < name.length; ++i)
	{
		if (name.charAt(i) == ' '){ cur = 1; cnt_space++; }
		if ((name.charAt(i) >= 'a') && (name.charAt(i) <= 'z')) cnt_alpha[cur]++;
	}
	
	if ((cnt_space < 1) || (cnt_alpha[0] < 1) || (cnt_alpha[1] < 1))
		nameErr = "* Nama harus minimal mengandung satu spasi antara 2 karakter";
	}
	
	// email check 
	if (email.length == 0)
		emailErr = "* Email harus diisi";
	else
	{
	cur = 0;
	var must = "_@_.__"
	for (var i = 0; i < email.length; ++i)
	{
		if (cur >= must.length);
		else
		if (must.charAt(cur) == '@')
		{
			if (email.charAt(i) == '@')
				cur++;
		}
		else
		if (must.charAt(cur) == '.')
		{
			if (email.charAt(i) == '.')
				cur++;
		}
		else
			cur++;
	}
	if (cur < must.length) emailErr = "* Email yang anda masukkan tidak valid"; 
	}
	
	// kodepos check
	if (kodepos.length == 0);
	else
	if (kodepos.length != 5)
		kodeposErr = "* Kodepos yang anda masukkan tidak valid";
	else
	for (var i = 0; i < kodepos.length; ++i)
		if (kodepos.charAt(i) < '0' || kodepos.charAt(i) > '9')
			kodeposErr = "* Kodepos yang anda masukkan tidak valid";
	
	// handphone check 
	if (handphone.length == 0);
	else
	if (handphone.length < 10)
		handphoneErr = "* Nomor yang anda masukkan tidak valid";
	else
	for (var i = 0; i < handphone.length; ++i)
		if (handphone.charAt(i) < '0' || handphone.charAt(i) > '9')
			handphoneErr = "* Nomor yang anda masukkan tidak valid";
	
	document.getElementById("passwordErr").innerHTML = passwordErr;
	document.getElementById("pass_checkErr").innerHTML = pass_checkErr;
	document.getElementById("nameErr").innerHTML = nameErr;
	document.getElementById("emailErr").innerHTML = emailErr;
	document.getElementById("kodeposErr").innerHTML = kodeposErr;
	document.getElementById("handphoneErr").innerHTML = handphoneErr; 
	
	if ((passwordErr.length == 0) &&
		(pass_checkErr.length == 0) && (nameErr.length == 0) &&
		(emailErr.length == 0) && (kodeposErr.length == 0) &&
		(handphoneErr.length == 0))
	{
		document.getElementById("submit_button").disabled = false;
	}
	else
		document.getElementById("submit_button").disabled = true; 
	
}, 1000);

function onSubmit()
{
	var username = "<?php echo $username; ?>";
	var email = document.getElementById("email").value; 
	var password = document.getElementById("password").value;
	var pass_check = document.getElementById("pass_check").value;
	var name = document.getElementById("name").value;
	var alamat = document.getElementById("alamat").value;
	var provinsi = document.getElementById("provinsi").value;
	var kecamatan = document.getElementById("kecamatan").value;
	var kodepos = document.getElementById("kodepos").value;
	var handphone = document.getElementById("handphone").value; 
	
	var xmlhttp;
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
			alert(xmlhttp.responseText);
			document.location.href = "edit_profile.php?username="+username;
		}
	}
	
	xmlhttp.open("GET","edit_user_db.php?username="+username+"&email="+email+"&password="+password+
					"&name="+name+"&alamat="+alamat+"&provinsi="+provinsi+"&kecamatan="+kecamatan+
					"&kodepos="+kodepos+"&handphone="+handphone,true);
	xmlhttp.send();
}

</script>

</head>

<body>

<div id="container">

<div id="header">
<h1><b>Ruko_Serba_Ada</b></h1>
</div>

<div id="menu">
<a href="home.php">Home</a>
</div>

<div id="content"> 
<form>

<br><br>

Username: <?php echo  $username; ?>

<br><br>

Change Password: <input class="text_input" type="password" name="password" id="password">
<br>
<span class="error" id="passwordErr"></span>

<br><br>

Re-enter Password: <input class="text_input" type="password" name="pass_check" id="pass_check">
<br>
<span class="error" id="pass_checkErr"></span>

<br><br>

Full Name: <input class="text_input" type="text" name="name" id="name" value="<?php echo $name; ?>">
<br>
<span class="error" id="nameErr"></span>

<br><br>

E-mail: <input class="text_input" type="text" name="email" id="email" value="<?php echo $email; ?>">
<br>
<span class="error" id="emailErr"></span>

<br><br>
Alamat: <textarea class="text_input" cols="50" rows="4" name="alamat" id="alamat">
<?php echo $alamat; ?>
</textarea>

<br><br><br><br>

Provinsi: <input class="text_input" type="text" name="provinsi" id="provinsi" value="<?php echo $provinsi; ?>">

<br><br>

Kecamatan: <input class="text_input" type="text" name="kecamatan" id="kecamatan" value="<?php echo $kecamatan; ?>">

<br><br>

Kodepos: <input class="text_input" type="text" name="kodepos" id="kodepos" value="<?php echo $kodepos; ?>">
<br>
<span class="error" id="kodeposErr"></span>
<br><br>

Nomor handphone: <input class="text_input" type="text" name="handphone" id="handphone" value="<?php echo $handphone; ?>">
<br>
<span class="error" id="handphoneErr"></span>
<br><br>
<button type="button" class="submit_button" type="submit" id="submit_button" onclick=onSubmit()>
Ubah </button>
</form>

<br><br>
</div>

<div id="footer"><p><b>Copyright © Krisna Fathurahman, Mochammad Dikra Prasetya, Bima Laksmana</b></p></div>

</div>
 
</body>
</html>

<?php

mysqli_close($con);

?>