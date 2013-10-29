function searchBoxFocus(sbox){
	sbox.classList.remove("search-grey");
	
	if (sbox.value == "Search"){
		sbox.value = "";
	}
}

function searchBoxBlur(sbox){
	if(sbox.value == ""){
		sbox.classList.add("search-grey");
		sbox.value = "Search";
	}
}
