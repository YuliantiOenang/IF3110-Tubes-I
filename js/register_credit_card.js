var isCardNumber = false;
var isDate = false;
var isFullName = false;

function form_check()
{
	if(isCardNumber && isDate && isFullName){
		//alert("Yeah");
		document.getElementById("button_register").disabled = false;
	} else{
		//alert("Nope");
		document.getElementById("button_register").disabled = true;
	}
}

function checkCardNumber (str)
{
	var xmlhttp;
	var cardNumberFilter=/[0-9]{16,}$/;
	if (str.length > 16){
		isCardNumber = false;
		document.getElementById("card_number_status").innerHTML="Card Number is invalid";
		form_check();
		return;
	} else if (cardNumberFilter.test(str)){
	
	} else if (str == ""){
		isCardNumber = false;
		document.getElementById("card_number_status").innerHTML="Card Number input is empty";
		form_check();
		return;
	} else{
		isCardNumber = false;
		document.getElementById("card_number_status").innerHTML="Card Number is invalid";
		form_check();
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
			if(xmlhttp.responseText == 0){
				isCardNumber = true;
				document.getElementById("card_number_status").innerHTML = "username is available";
			} else{
				document.getElementById("card_number_status").innerHTML = "username is not available";
			}
			form_check();;
		}
	}
	xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}

function checkFullName(str)
{
	var xmlhttp;
	var nameFilter=/[A-Za-z\s]{1,}\s\s*[A-Za-z\s]{1,}$/;
	if (nameFilter.test(str)){
		isFullName = true;
		document.getElementById("name_status").innerHTML="name is valid";
		form_check();
		return;
	} else if (str == ""){
		isFullName = false;
		document.getElementById("name_status").innerHTML="name is empty";
		form_check();
		return;
	} else{
		isFullName = false;
		document.getElementById("name_status").innerHTML="name is invalid";
		form_check();
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
			document.getElementById("username_status").innerHTML=xmlhttp.responseText;
		}
	}
	//xmlhttp.open("GET","getcustomer.asp?q="+str,true);
	xmlhttp.send();
}