function checkLogin(username,password){
	if(username.length==0 || password.length==0) {
		alert("username dan password tidak boleh kosong");
		return false;					
	}else{
		return true;
	}
}