function checkLogin(){
	var u = document.getElementById("usernamelogin").value;
	var p = document.getElementById("passwordlogin").value;
	
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}
	else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if(xmlhttp.responseText == u){
				var object = {username: u, timestamp: new Date().getTime()}
				localStorage.setItem("key", JSON.stringify(object));
				window.location = "dashboard.php";
			}
			else{
				alert('Username/password error!');
			}
		}
	}

	xmlhttp.open("GET", "login.php?u=" + u + "&p=" + p, true);
	xmlhttp.send();
}