function loadPage(href)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("POST", href, false);
	xmlhttp.onload = function(){
		
	}
	return xmlhttp.responseText;
}

function doPopUp(){
	document.getElementById("mask").style.display = "block";
}