/* function validation (theForm) {
	if (validateNumber(theForm) && validateDate(theForm) && validateNotEmpty(theForm) ) {
	 //ajax
	 return true;
	}
	return false;
}
 */

function validation (theForm) {
 var data = {"cardnumber" : theForm["cardnumber"].value, "expireddate" : theForm["expireddate"].value, "namecard" : theForm["namecard"].value};
	var callback = function(response) {
		if (response.status == "error") 
			alert(response.deskripsi) ;
		else
			alert("berhasil");
	};
	sendAjax(data, "submit.php", callback);
} 