function checkItem(str, id)
{
	var xmlhttp;
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(str == "" || isNaN(str) || parseInt(str) < 0){
				document.getElementById("item_status" + id).innerHTML = "Tidak valid";
			} else if(parseInt(xmlhttp.responseText) >= parseInt(str)){
				document.getElementById("item_status" + id).innerHTML = "Cukup";
			} else{
				document.getElementById("item_status" + id).innerHTML = "Kurang";
			} 
		}
	}
	xmlhttp.open("GET","../controllers/check_item_available.php?q="+id,true);
	xmlhttp.send();
}