function numberHint(str) {
	if (str.length==0) { 
		document.getElementById("numberHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("numberHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","gethintkartu.php?q="+str+"&jenis=number",true);
	xmlhttp.send();
}

function nameHint(str) {
	if (str.length==0) { 
		document.getElementById("nameHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("nameHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","gethintkartu.php?q="+str+"&jenis=name",true);
	xmlhttp.send();
}