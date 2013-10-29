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
		<a href="HomeB.php" target=""> 
			<img src ="Images/Logo.jpg" class="logo">
		</a>
	</div>
	
	<div class="judul">
		<h1 >
			Ruko Serba Ada<br>
			Menyediakan kebutuhan Anda secara Online !
		</h1>
		
		<div class="caribarang">

		</div>
		
	
		
	</div>

	<div class="tempattombol"> 	
		
		<div class="login"  >
			<a href="HomeA.php" target="">
			<img src ="Images/Logout.png" class="isilogin">
			</img>
			</a>
			
			<a href="HalamanEditProfil.php" target="">
				<img src ="Images/apdet.png" class="isilogin" >
				</img>
			</a>
		</div>
		
		<div class="logout"  >
			<img src ="Images/Logout.png" class="isilogout" >
			</img>
		</div>
		
		<div class="cart"  >
			<a href="HalamanShoppingBagB.php" target="">
				<img src ="Images/Cart.jpg" class="isicart" >
				</img>
			</a>
		</div>
	</div>
</div>

<!-- MENU -->

<div class="menu">
	<h2 align="center";> <b> Kategori Barang : </b> <br> <br> </h2>
	
	<div id="barang"> 
		<a href="HalamanBarang1B.php" target="">Kategori 1<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang2B.php" target="">Kategori 2<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang3B.php" target="">Kategori 3<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang4B.php" target="">Kategori 4<br><br>
		</a> 
	</div>
	
	<div id="barang"> 
		<a href="HalamanBarang5B.php" target="">Kategori 5
		</a> 
	</div>
</div>

<!-- CONTENT -->

<div class="content">
	
		<!-- KATEGORI 1 -->
		
<script type="text/javascript">
function AjaxFunction(CCNumber)
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
var url="cc-ajax.php";
url=url+"?CCNumber="+CCNumber;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>		
	<script src="sample-registration-form-validation.js"></script>  
	<p id="registrasi"> <strong>Registrate Your Card :</strong></p>
		<br>
		<p>Use tab keys to move from one input field to the next.</p>  

		<form name='registration' onSubmit="return CCValidation();" action="CCSQL.php" method="post">		
		<p id="formregistrasi">
			<li><label for = "CCNumber">Card Number : </label></li>
			<input type=text name="CCNumber" id="CCNumber" onBlur="AjaxFunction(this.value);">
			<div id="msg"></div>
		</p>
		
		
		<p id="formregistrasi">
			<li><label for="CCName">Name on Card : </label></li>
			<input type=text name="CCName" id="CCName"> 
		</p>

		
		<p id="formregistrasi">
			<li><label for="ExpDate">Expiration Date : </label></li>
			<select name="monthExpires" id="monthExpires">
			<option value="" SELECTED>--Expiration Month--
			<option value="01">January (01)
			<option value="02">February (02)
			<option value="03">March (03)
			<option value="04">April (04)
			<option value="05">May (05)
			<option value="06">June (06)
			<option value="07">July (07)
			<option value="08">August (08)
			<option value="09">September (09)
			<option value="10">October (10)
			<option value="11">November (11)
			<option value="12">Desember (12)
			
			</select>
			<select name="yearExpires" id="yearExpires">
			<option value="" SELECTED>--Expiration Year--
			<option value="13">2013
			<option value="14">2014
			<option value="15">2015
			<option value="16">2016
			<option value="17">2017
			<option value="18">2018
			<option value="19">2019
			<option value="20">2020
			<option value="21">2021
			<option value="22">2022
			<option value="23">2023
			<option value="24">2024
			<option value="25">2025
			<option value="26">2026
			<option value="27">2027
			<option value="28">2028
			</select>

		</p>
		
		<br>
		
		<div id="buttonregistrasi">
			<input type=submit value=Submit >
			<a href="HomeB.php">
				<button type="button"> Skip </button>
			</a>
		</div>
		</form>
		
	</p>
	
</div>

<!-- MEKANISME -->

<!-- FOOTER -->

<div class="footer">
	Copyright © TUBES 1 IF3110
</div>

</div>
 
</body>

</html>