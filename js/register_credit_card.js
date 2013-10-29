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
	if (cardNumberFilter.test(str)){
	
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
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText == 0){
				isCardNumber = true;
				document.getElementById("card_number_status").innerHTML = "card number is available";
			} else{
				isCardNumber = false;
				document.getElementById("card_number_status").innerHTML = "card number is not available";
			}
			form_check();;
		}
	}
	xmlhttp.open("GET","../controllers/credit_card_number_checker.php?q="+str,true);
	xmlhttp.send();
}


function checkAllDate()
{
	var dates = document.getElementById("dates").value;
	var months = document.getElementById("month").value;
	var years = document.getElementById("year").value;
	//alert(dates + " " + months + " " + year);
	if(months < 1 || months > 12){
		isDate = false;
	} else{
		if(months == 1 || months == 3 || months == 5 || months == 8 || months == 10 || months == 12){
			if(dates >=1 && dates <=31){
				isDate = true;
			} else{
				isDate = false;
			}
		} else if(months == 2){
			var kabisat = false;
			if(years % 400 == 0){
				kabisat = true;
			} else if(years % 100 != 0 && years % 4 == 0){
				kabisat = true;
			} else{
				kabisat = false;
			}
			
			if(!kabisat){
				if(dates >= 1 && dates <=28){
					isDate = true;
				} else{
					isDate = false;
				}
			} else{
				if(dates >= 1 && dates <=29){
					isDate = true;
				} else{
					isDate = false;
				}
			}
		} else{
			if(dates >=1 && dates <= 30){
				isDate = true;
			} else{
				isDate = false;
			}
		}
	}
	if(isDate){
		document.getElementById("date_status").innerHTML="date is valid";
	} else{
		document.getElementById("date_status").innerHTML="date is not valid";
	}
	form_check();
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