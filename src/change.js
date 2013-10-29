var name;
var telephone;
var address;
var city;
var province;
var postal;

function setVar(nama, tel, add, cit, prov, posta) {
	alert("test");
	name = nama;
	telephone = tel;
	address = add;
	city = cit;
	province = prov;
	postal = posta;
}

function isChanged(nama, tel, add, cit, prov, posta) {
	alert(name, telephone, address, city, province, postal);
	if (nama == name && tel == telephone && add == address && cit == city && prov == province && posta == postal) {
		var r = confirm("Tidak ada perubahan dilakukan, lanjutkan?");
		return r;
	}
	return true;
}