function addToCart(amount, id)
{
	var xmlhttp;
	if (amount != 0){
		return;
	}
	
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
			document.getElementById("nomor_hp").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../controllers/add_cart.php?amount="+amount+"&id="+id,true);
	xmlhttp.send();
}