// DEPENDENCY: ajax.js

function addCart(id_barang){
	var jumlah = parseInt(prompt("Jumlah barang"));
	
	if (isNaN(jumlah)){
		return;
	}else if (jumlah <= 0){
		alert("Jumlah salah!");
		return;
	}
	
	var data = {"action" : "add", "id_barang" : id_barang, "jumlah" : jumlah};
	
	var callback = function(response){	
		if(response.status == "ok"){
			var bag;
			if (localStorage.getItem("shoppingbag") === null){
				bag = {};
			}else{
				bag = JSON.parse(localStorage.shoppingbag);
			}
			
			if (bag[id_barang] === undefined){
				bag[id_barang] = jumlah;
			}else{
				bag[id_barang] += jumlah;
			}
			
			localStorage.shoppingbag = JSON.stringify(bag);
		
			alert("Barang sudah ditambahkan ke keranja belanja");
		}else{
			alert("Jumlah barang tidak mencukupi! Barang yang tersisa tinggal " + response.sisa);
		}
	};
	
	sendAjax(data, "lib/transaksi_lib.php", callback);
}