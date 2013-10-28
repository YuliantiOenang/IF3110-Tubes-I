function checkStokBarang(jumlah,stok){
	if(jumlah.length==0) {
		alert('jumlah beli tidak boleh kosong');
		return false;
	} else {
		if(jumlah<=0) {
			alert('jumlah beli harus lebih besar dari 0');
			return false;
		} else if(jumlah>stok){
			alert('jumlah beli lebih besar daripada stok. Stok barang adalah '+stok);
			return false;
		} else {
			return true;
		}
	}
}