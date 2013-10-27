// DEPENDENCY: ajax.js

function editCart(id_barang, defValue, edit_callback){
	var jumlah = parseInt(prompt("Jumlah barang", defValue));
	
	if (isNaN(jumlah)){
		return;
	}else if (jumlah <= 0){
		alert("Jumlah salah!");
		return;
	}
	
	if (jumlah == defValue){
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
			
			bag[id_barang] = jumlah;
			
			localStorage.shoppingbag = JSON.stringify(bag);
		
			alert("Jumlah barang sudah diatur");
			if (edit_callback!=null) edit_callback();
		}else{
			alert("Jumlah barang tidak mencukupi! Barang yang tersisa tinggal " + response.sisa);
		}
	};
	
	sendAjax(data, "barang.php", callback);
}

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
	
	sendAjax(data, "barang.php", callback);
}