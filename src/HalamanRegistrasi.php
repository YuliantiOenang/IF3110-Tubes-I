<!DOCTYPE html>

<html>
	
<head>
	<link rel="stylesheet" type="text/css"  href="CSS/CSSDetail.css">
</head>
	
<body>

<div class="container">

<!-- HEADER -->

<div class="header" >
	
	<div class="tempatlogo">
		<a href="HomeA.php" target=""> 
			<img src ="Images/Logo.jpg" class="logo">
		</a>
	</div>
	
	<div class="judul">
		<h1 >
			Ruko Serba Ada<br>
			Menyediakan kebutuhan Anda secara Online !
		</h1>
		
		<div class="caribarang">
			<form name = 'search' action="HalamanResultA.php" method="post">
				Kata Pencarian : <input type="text" name="kata" id="kata">
			<br>

			Pilih Kategori : 
				<select required name="kategori" id="kategori">
					<option value="all">All</option>
  					<option value="Beras">Beras</option>
  					<option value="Daging">Daging</option>
  					<option value="Ikan">Ikan</option>
  					<option value="Teh">Teh</option>
					<option value="Kopi">Kopi</option>
				</select> <br>

		
			Pilih Harga : 
				<select required name="harga" id=	"harga">
					<option value=99>All</option>
  					<option value=0>Rp. 0 - Rp. 100.000,00</option>
  					<option value=100001>Rp. 100.001,00 - Rp. 200.000,00</option>
  					<option value=200001>Rp. 200.001,00 - Rp. 300.000,00</option>
  					<option value=300001>Rp. 300.001,00 - Rp. 400.000,00</option>
					<option value=400001>Rp. 400.001,00 - Rp. 500.000,00</option>
				</select> <br>

			<input type=submit value=Submit >

			</form>
		</div>
		
	
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<img src ="Images/Login.png" class="isilogin" onclick="window.open('login.php', 'newwindow', 'width=300, height=250');" >
			</img>
			
			<a href="HalamanRegistrasi.php" target="">
				<img src ="Images/SignUp.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
	</div>
</div>

<!-- MENU -->

<div class="menu">
	<h2 align="center";> <b> Kategori Barang : </b> <br> <br> </h2>
	
	<div id="barang"> 
		<a href="HalamanBarang1A.php" target="">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2A.php" target="">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3A.php" target="">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4A.php" target="">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5A.php" target="">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	
		<!-- KATEGORI 1 -->
<script type="text/javascript">
function AjaxFunctionUser(username)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
try
 		{
httpxml=new ActiveXObject("Msxml2.XMLHTTP");
		}
catch (e)
	{
try
		{
	httpxml=new ActiveXObject("Microsoft.XMLHTTP");
		 }
		catch (e)
	{
alert("Your browser does not support AJAX!");
return false;
  		}
		}
}
function stateck() 
   {
   if(httpxml.readyState==4)
   {
document.getElementById("msg").innerHTML=httpxml.responseText;
     }
   }
var url="username-ajax.php";
url=url+"?username="+username;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>

<script type="text/javascript">
function AjaxFunctionEmail(email)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
try
 		{
httpxml=new ActiveXObject("Msxml2.XMLHTTP");
		}
catch (e)
	{
try
		{
	httpxml=new ActiveXObject("Microsoft.XMLHTTP");
		 }
		catch (e)
	{
alert("Your browser does not support AJAX!");
return false;
  		}
		}
}
function stateck() 
   {
   if(httpxml.readyState==4)
   {
	document.getElementById("msg2").innerHTML=httpxml.responseText;
     }
   }
var url="email-ajax.php";
url=url+"?email="+email;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>

		<script src="sample-registration-form-validation.js"></script>
		<p id="registrasi"><strong>Registration Form<strong></p>  
		<p>Use tab keys to move from one input field to the next.</p>  
		<form name='registration' onSubmit="return formValidation();" action="registrasi.php" method="post">   
		<li><label for="username">Username:</label></li>
		<input type="text" name="uname" onBlur="AjaxFunctionUser(this.value);" size="12" id="uname" />
		<div id="msg"></div>
		<li><label for="pass">Password:</label></li>  
		<input type="password" name="pass" size="12" id="pass" />
		<li><label for="cpass">Confirm Password:</label></li>  
		<input type="password" name="cpass" size="12" id="cpass" />
		<li><label for="nama">Nama Lengkap:</label></li>  
		<input type="text" name="nama" size="50" id="nama" />
		<li><label for="email">Email:</label></li>  
		<input type="text" name="uemail" onBlur="AjaxFunctionEmail(this.value);" size="50" id="uemail" />
		<div id="msg2"></div>
		<input type=submit name="submit" value=Submit /> 
		</form>
		
	
</div>

<!-- MEKANISME -->

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>