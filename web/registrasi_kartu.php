<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/latihan.css"> <!--pemanggilan file css-->

</head>
<script src="js/AjaxCreateObject.js" language="javascript"></script>
<script type="text/javascript">

function checkSubmit(){

}

function popClik()
{
	
	var lightbox = document.getElementById("lightbox");
       var dimmer = document.createElement("div");
    
    dimmer.style.width =  document.documentElement.scrollWidth + 'px';
    dimmer.style.height = document.documentElement.scrollHeight + 'px';
    dimmer.className = 'dimmer';
    dimmer.id='dim';
    test.onclick=function(){
        document.body.removeChild(this);   
        lightbox.style.visibility = 'hidden';
    }
    
    dimmer.onclick = function(){
        document.body.removeChild(this);   
		document.getElementById('user').value="";
		document.getElementById('pass').value="";
        lightbox.style.visibility = 'hidden';
    }
        
    document.body.appendChild(dimmer);
    
    lightbox.style.visibility = 'visible';
    lightbox.style.top = window.innerHeight/2 - 200 + 'px';
    lightbox.style.left = window.innerWidth/2 - 100 + 'px';
	document.getElementById("user").focus();
}
function login()
{
	
	//mengambil semua variable dalam form login
	var username = encodeURI(document.getElementById('user').value);	
	var password = encodeURI(document.getElementById('pass').value);
	
	//request ke file php
	http.open('get', 'proses_login.php?user='+username+'&pass='+password,true);
	//cek hasil request 4 jika berhasil
	http.onreadystatechange = function()
	  {
		
		if (http.readyState==4 && http.status==200)
		{
			try
			{
			var decodeJSON = JSON.parse(http.responseText);
			
			document.getElementById("welcome").innerHTML="WELCOME,"+decodeJSON.nama;
			var lightbox = document.getElementById("lightbox");
			var dimmer = document.getElementById("dim");
			var signup = document.getElementById("signup");
			
			var loginButton = document.getElementById("loginButton");
			lightbox.style.visibility = 'hidden';
			signup.style.visibility = 'hidden';
			loginButton.src="images/logout.png";
			loginButton.onclick=function()
			{
				window.location="logout.php";
			}
			document.body.removeChild(dimmer); 
			remove("signup"); 
			
			}
			catch(e)
			{
			document.getElementById("Error").innerHTML="Welcome,"+http.responseText;
			var user=document.getElementById("user");
			
			
			}
		}
	  }
	http.send(); 
	
}
function logout()
{
window.location="logout.php";
}
function cancel()
{
	var lightbox = document.getElementById("lightbox");
	var dimmer = document.getElementById("dim");
	lightbox.style.visibility = 'hidden';
	document.getElementById('user').value="";
	document.getElementById('pass').value="";
	document.body.removeChild(dimmer); 
}
function remove(id)
{
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
}
</script>
<body>
<div id="lightbox">	
		<div class="loginpoptop"><!--pop up-->
		<h4 id="loginHeader">LOGIN</h4>
		</div>
		<form id="test">
			<div class="forms">
			Username : <input type="text" id="user" required placeholder = "Username" /></br>
			</div>
			<div class="forms">
			Password : <input type="password" id="pass" required placeholder = "Password"></br>
			</div>
			<div class="forms">
			<input type="button" value="LogIn" onclick="login()"></input>
			<input type="button" value="Cancel" onclick="cancel()"></input>
			</div>
			<div class="error">
			<p id="Error"></p>
			</div>
			</form>

		</div>
<div class = "main">
	<div class = "header">
		
		<div class = "logohead">
			<div >
				<img src = "images/logo.png" class = "logo">
				</img>
				</div>
			<div class = "loginplace">
				<div>
				<?php
				if(!isset($_COOKIE['user1']))
				{
				?>
					<img src = "images/login.png" class = "login" onclick="popClik()" id="loginButton"></img>
				<?php
				}
				else
				{
				?>
					<img src = "images/logout.png" class = "login" onclick="logout()" id="loginButton"></img>
				<?php
				}
				?>
				</div>
				<div >
					<img src = "images/cart.png" class = "cart" ></img>
				</div>
			</div>
			<div class = "signupplace">
				
				<div>
				<?php
				if(!isset($_COOKIE['user1']))
				{
				?>
				<img src = "images/signup.png" class = "signup" id="signup"></img>
				<?php
				}
				?>
					
				</div> 
				
			<p class="welctext" id="welcome"><?php if(isset($_COOKIE['user1'])) echo "WELCOME,".$_COOKIE['user1']; ?></p>
			</div>
		</div>
		<div class = "menu">
				<div>
					<img src = "images/jacket.png" class = "jacket"></img>
				</div>
				<div>
					<img src = "images/jacket.png" class = "tshirt"></img>
				</div>
				<div >
					<img src = "images/jacket.png" class = "wristband"></img>
				</div>
				<div>
					<img src = "images/jacket.png"  class = "emblem"></img>
				</div>
				<div>
					<img src = "images/jacket.png"  class = "pokemon"></img>
				</div>
		</div>
		<div class = "main">
		</div>
	
</div>


<div class = "bodymain">
	<div class = "sidebar">
		
			<p class = "searchtitle"> Search it! </p>
			
		<div class = "kategori">
			<select>
				<option value="all">All</option>
				<option value="jacket">Jacket</option>
				<option value="tshirt">T-shirt</option>
				<option value="sweater">Sweater</option>
				<option value="misc">Misc.</option>
				<option value="pokemon">Pokemon</option>
			</select>
			<input type="text" id="user" required placeholder = "e.g. Mylo Xyloto" /></br>
	</div>
	
	<div class = "kategori">
	<label> Price Range: </label>
	<select>
				<option value="all">< Rp50.000 </option>
				<option value="jacket">Rp50.000 - Rp100.000</option>
				<option value="tshirt">Rp100.001 - Rp150.000</option>
				<option value="sweater">> Rp150.000</option>
				
			</select>
	</div>
	<div class = "kategori">
	<input type="button" value="Search!"></input>
	</div>
	</div>
	<div class = "boddy">
		<div class = "topfivetitle">
		<label> BECOME A COLDPLAYER!<label></br></br>
		</div>
			<div class = "registerspace">
			<label>Card Number </label> <input type="text" id="card_number" onkeyup="checkSubmit()" required placeholder = "0123456789101213" /></br>
			</div>
			
			<div class = "registerspace">
			<label>Name On Card</label> <input type="text" id="name_on_card" onkeyup="checkSubmit()" required placeholder = "Chris Martin" /><label id="nama_label"></label></br>
			</div>
			
			<div class = "registerspace">
			<label>expired date</label> <input type="text" id="expired_date" onkeyup="checkSubmit()" required placeholder = "08/12/2003" /></br>
			</div>
			
			<div class = "registerspace">
			<input type="button" id="submit" value = "Register credit card!"></br>
			</div>
			  
			</div>
			</div>
			
			
			
	
	<div class = "footer">
		<div class = "info">

		</div>
		
				<p class = "copyrightext">COPYRIGHT KeyboardHero</p>
		
	</div>
</div>
</body>
</html>