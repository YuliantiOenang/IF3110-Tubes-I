function editProfile(){
	var address = document.getElementById("atributaddress");
	var fullname = document.getElementById("atributfullname");
	var provinsi = document.getElementById("atributprovinsi");
	var kota = document.getElementById("atributkota");
	var kodepos = document.getElementById("atributkodepos");
	var noHP = document.getElementById("atributHP");
	var button = document.getElementById("editProfilebutton");
	
	var ava = document.getElementById("atributavatar");
	var password = document.getElementById("atributpassword");
	var confirmpassword = document.getElementById("atributconfirmpassword");

	fullname.innerHTML="<input type='text'>";
	address.innerHTML="<input type='text'>";
	provinsi.innerHTML="<input type='text'>";
	kota.innerHTML="<input type='text'>";
	noHP.innerHTML="<input type='text'>";
	
	button.value="Save Changes";
	
	ava.innerHTML="<input type='text'>";
	password.innerHTML="<input type='tag'>";
	confirmpassword.innerHTML="<input type='tag'>";
}