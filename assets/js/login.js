function Login(callback,username,password){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			if (ajaxRequest.status === 200) {// successfully
                callback(ajaxRequest.responseText);// we're calling our method
            }
		}
	}
	ajaxRequest.open("POST","ajax/login.php",true);
	ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ajaxRequest.send("username="+username+"&password="+password); 
}

function pausecomp(millis)
 {
  var date = new Date();
  var curDate = null;
  do { curDate = new Date(); }
  while(curDate-date < millis);
}

function StatusLogin(ajaxresult){
	var obj=JSON.parse(ajaxresult);
	if (obj.status=="failed") {
		//jika failed statusnya
		document.getElementById("login_warning").innerHTML="coba cek lagi deh kayaknya salah username sama password deh";
	}else if (obj.status=="success"){
		localStorage.setItem('user',obj.username);
		document.getElementById("login_warning").innerHTML="selamat anda berhasil login";
		setTimeout(function(){},2000);
		document.getElementById("isi_popup").style.display="none";
		document.getElementById("login_form").style.display="none";
		document.getElementById("link_login").innerHTML="logout";
		document.getElementById("link_login").setAttribute("href","http://localhost/tubes/index.php?logout");
	};
}

function Do_Login(){
	var username = document.getElementsByName('username')[0].value;
	var password = document.getElementsByName('password')[0].value;
	Login(StatusLogin,username,password);
}


function LoadMenu(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			if (ajaxRequest.status === 200) {// successfully
                document.getElementById("menus").innerHTML=ajaxRequest.responseText;// we're calling our method
            }
		}
	}
	ajaxRequest.open("POST","ajax/menu.php",true);
	ajaxRequest.send(); 
}



