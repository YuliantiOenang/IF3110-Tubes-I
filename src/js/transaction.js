function validateForm1() /* for category.php */
{
	var x=document.forms["forminput"]["jumlah"].value;
	if (x==null || x=="" || !isFinite(x))
	{
		alert("Jumlah pembelian tidak sesuai..");
		return false;
	}
	alert("Pembelian sukses! (not implemented yet.. )");
}

function validateForm2() /* for merchandise.php */
{
	var x=document.forms["input"]["jumlah"].value;
	if (x==null || x=="" || !isFinite(x))
	{
		alert("Jumlah pembelian tidak sesuai..");
		return false;
	}
	alert("Pembelian sukses! (not implemented yet.. )");
}

function validate(){
	// validation on server side
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if (xmlhttp.responseText == 0) { // failed
				alert("Stok tidak tersedia..");
			} else { // success
				alert("Pembelian berhasil!");
				newwindow2 = window.open('index.php', '_HOME');
				close();
			}
		}
	}

	xmlhttp.open("GET", "svr/validate_stok.php", true);
	xmlhttp.send();
}
