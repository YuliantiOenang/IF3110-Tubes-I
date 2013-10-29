function setProductOrder()	{
	var jumlah = document.getElementById("jumlahproduk");
	var keterangan = document.getElementById("keteranganproduk");
	var parts = window.location.search.substr(1).split("&");
	var $_GET = {};
	for (var i = 0; i < parts.length; i++) {
		var temp = parts[i].split("=");
		$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
	}
	
	setProductQuantity($_GET['product_id'], jumlah.value);
	setProductNote($_GET['product_id'], keterangan.value);
	//alert('Hellow!');
	alert(getProductQuantity($_GET['product_id']));
}

window.addEventListener("load", function(){
	document.getElementById("buybutton").onclick = setProductOrder;
	var parts = window.location.search.substr(1).split("&");
	var $_GET = {};
	for (var i = 0; i < parts.length; i++) {
		var temp = parts[i].split("=");
		$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
	}
	var jumlahdibag = getProductQuantity($_GET['product_id']);
	var keterangandibag = getProductNote($_GET['product_id']);
	
	var jumlah = document.getElementById("jumlahproduk");
	var keterangan = document.getElementById("keteranganproduk");
	
	jumlah.value = jumlahdibag;
	keterangan.value = keterangandibag;
});