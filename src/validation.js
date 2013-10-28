function validation (theForm) {
	if (validateNumber(theForm) && validateDate(theForm) && validateNotEmpty(theForm) ) {
	 //ajax
	 return true;
	}
	return false;
}

function validateNumber(theForm) {
	var isi = (theForm["cardnumber"].value);
	if (isi.length != 16) {
		alert ("Kartu tidak valid 0");
		return false;
	}
	return true;
};

function validateDate (theForm) {
	var expired = theForm["expireddate"].value;
	var slash = expired.indexOf("/");
	var bulan = parseInt(expired.substring(0,slash));
	var tahun = parseInt(expired.substring(slash+1,expired.length));
	if (bulan < 0 || bulan >12) {
		alert ("Bulan Salah");
		return false;
	}
	if (tahun < 0 || tahun >99) {
		alert ("Tahun Salah");
		return false;
	}
	if ((tahun == 13) && (bulan<11)) {
		alert ("Kartu Expired");
		return false;
	}
	if (tahun < 13) {
		alert ("Kartu Expired");
		return false;
	}
	return true;
};
	
function validateNotEmpty(theForm) {
//melihat input kosong atau tidak
if (theForm["cardnumber"].value && theForm["namecard"].value && theForm["expireddate"].value) {
	
	return true;
	}
	alert ("Please enter a value.");
return false;
};