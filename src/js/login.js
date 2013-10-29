function searchBoxFocus(sbox){
	if (sbox.value == "Search"){
		sbox.classList.remove("search-grey");
		sbox.value = "";
	}	
}

function searchBoxBlur(sbox){
	if(sbox.value == ""){
		sbox.classList.add("search-grey");
		sbox.value = "Search";
	}
}

function searchHandle(e){
	if (e.keyCode == 13){
		alert(this.value);
	}
	
	return false;
}