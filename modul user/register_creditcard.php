<script src="AjaxRegister.js"></script>
<script>
function ceknumber(){
	if (AJAXRegister("cardnumber")){
		document.getElementById("validasicardnumber").value="valid";
	}else{
		document.getElementById("validasicardnumber").value="tidak valid";
	}
}
</script>

<script>
function ceknamecard(){
	if (AJAXRegister("namecard")){
		document.getElementById("validasinamecard").value="valid";	
	}else{
		document.getElementById("validasinamecard").value="tidak valid";
	}
}
</script>
<script>
function cekexpiredate(){

	if (AJAXRegister("expiredate")){
		document.getElementById("validasiexpiredate").value="valid";
		
	}else{
		document.getElementById("validasiexpiredate").value="tidak valid";
	}

}
</script>
<script>
function cekvalid(){

if (cekfilledAll() && ceknumber() && ceknamecard() && cekexpiredate()){
	return true;
}else{
	alert("pastikan data valid");
	return false;
}

}
</script>

<script type="text/javascript" language="javascript">
    function cekfilledAll()
    {
		var elem = document.getElementById("registercreditcard").elements;
		var cansubmit = true;
		
		for (var i = 0; i < elem.length; i++) {
            if (elem[i].value.length == 0) cansubmit = false;
        }
		if (cansubmit){
            return true;
		}else{
				return false;
		}
        
    }
</script> 





<form id='registercreditcard' action='insertcreditcard.php' method='post' 
    accept-charset='UTF-8' onsubmit = "return cekvalid()">

<legend>Register Credit Card</legend>

<label for='cardnumber' >Card Number:</label>
<input name="cardnumber" id="cardnumber" required="required" onkeyup="!!(ceknumber() & ceknamecard() & cekexpiredate())" >
<input type='text' name='validasicardnumber' id='validasicardnumber' maxlength="10" value ="tidak valid" readonly/>
<br/>
<label for='namecard' >Name On Card:</label>
<input type = "text" name="namecard" id="namecard" required="required" onkeyup="ceknamecard()">
<input type='text' name='validasinamecard' id='validasinamecard' maxlength="10" value ="tidak valid" readonly/>
<br/>

<label for='expiredate' >Expire Date:</label>
<input type="date" name='expiredate' id='expiredate' maxlength="50" required="required" oninput="cekexpiredate()"/>
<input type='text' name='validasiexpiredate' id='validasiexpiredate' maxlength="10" value ="tidak valid" readonly/>
<br/>

<input type='submit' id="submitbutton" name='submitbutton' value='Register'/>
<input type='button' id="skipbutton" name='skipbutton' value='Skip' onclick="location.href='home.php'" />

</form>

