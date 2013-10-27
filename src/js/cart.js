//DEPENDENCIES: ajax.js, login.js

function refreshCart(){
	var cart = document.getElementById("cart");
	cart.innerHTML = "refreshing...";
	
	// klo ga ada di local storage, berarti blom belanja
	if (localStorage.getItem("shoppingbag") === null){
		cart.innerHTML = "Keranjang belanja kosong";
		return;
	}
	var bag = JSON.parse(localStorage.shoppingbag);
	var list = [];
	
	for (barang in bag){
		list.push(parseInt(barang));
	}
	
	// kalo list empty, berarti belom belanja
	if (list.length == 0){
		cart.innerHTML = "Keranjang belanja kosong";
		return;
	}
	
	var callback = function(response){
		if (response.status == "ok"){
			cart.innerHTML = "";
			var total = 0;
			
			var hrow = createRow();
			hrow.appendChild(createCell(50, "<b>Nama Barang</b>"));
			hrow.appendChild(createCell(25, "<b>Jumlah Beli</b>"));
			hrow.appendChild(createCell(25, "<b>Total Harga</b>"));
			
			cart.appendChild(hrow);
			
			for (i = 0; i < response.barang.length; i++){
				var barang = response.barang[i];
				
				var harga = bag[barang.id] * barang.harga;
				total += harga;
				
				var row = createRow();
				row.appendChild(createCell(50, barang.nama));
				row.appendChild(createCell(25, "<a class='editlink' href='javascript:edit(" + barang.id + ");'>"+bag[barang.id] + "</a>"));
				row.appendChild(createCell(25, "Rp. " + harga));
				
				cart.appendChild(row);
			}
			
			hrow = createRow();
			hrow.appendChild(createCell(50, "Total Harga"));
			hrow.appendChild(createCell(25, " "));
			hrow.appendChild(createCell(25, "Rp. " + total));
			
			cart.appendChild(document.createElement("hr"));
			cart.appendChild(hrow);
			
		}else{
			cart.innerHTML = "error " + response.details;
		}
	};
	
	var request = {"action" : "cart", "ids" : list};
	
	sendAjax(request, "cart.php", callback);
}

function edit(id){

}

function createRow(){
	var row = document.createElement("div");
	row.classList.add("row");
	
	return row;
}

function createCell(size, content){
	var cell = document.createElement("div");
	cell.classList.add("cell"+size);
	if (content != null){
		cell.innerHTML = content;
	}
	
	return cell;
}

function loadCartPage(){
	//cek login dulu
	
	refreshCart();
}