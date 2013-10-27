var loginformhtml = "<div id=\"loginbox\" class=\"overlay\"><form class=\"popup\" method=\"post\" onSubmit=\"return submitlogin(this)\">" +
            "<h2>Login</h2>" +
            "<p><input name=\"nama_pengguna\" type=\"text\" placeholder=\"Nama Pengguna\">" +
            "<input name=\"kata_sandi\" type=\"password\" placeholder=\"Kata Sandi\">" +
            "<input name=\"submit\" type=\"submit\" value=\"Login\"></p>" +
            "<p>Atau <a href=\"" + BASE_URL + "pendaftaran/\">Daftar baru</a></p>" +
            "<a class=\"close\" href=\"#close\"></a>" +
        "</form></div>";
var identitas_pelanggan = null;

function myOutput(data) {
	var result = JSON.parse(data);
	alert(result.data);
}
function testA() {
	var form = document.getElementById("wbd_search");
	var bucket = {"todo":"searching", "data":form.elements[0].value};
	sendJSONType(bucket, myOutput);
	return false;
}
function showSubmenu() {
	var child = document.getElementById('kategorilist');
	if(child != null) child.parentNode.removeChild(child);
	var bucket = {"todo":"subkategori", "data":"kategorilist"};
	sendJSONType(bucket,showSubmenuAfterAjax);
}
function showSubmenuAfterAjax(data) {
	var result = JSON.parse(data);

	if(result.status == "success") {
		var submenu = document.createElement("nav");
		submenu.id = "kategorilist";
		var kontainer = document.createElement("div");
		kontainer.className = "container";
		submenu.appendChild(kontainer);
		for(var i = 0; i < result.data.length; i++) {
			var kategori = document.createElement("a");
			kategori.href = BASE_URL + "kat/" + (i + 1);
			kategori.innerHTML = result.data[i];
			kontainer.appendChild(kategori);
		}
		var parent = document.getElementsByTagName("header");
		parent[0].appendChild(submenu);
	} else {
		alert(result.data);
	}
}
function submitPendaftaran(field) {
	var bucket = {"todo":"submitPendaftaran", "data":[
			{"nama_pengguna":field.nama_pengguna.value, "kata_sandi":field.katasandi_1.value, "nama_lengkap":field.nama_lengkap.value, "email":field.email.value}
		]};
	sendJSONType(bucket, submitPendaftaranAfter);
	return false;	
}
function submitPendaftaranAfter(data) {
	var result = JSON.parse(data);
	if(result.status == "success") {
		// Add to local storage
		var new_data = result.data;
		var date = new Date();
		new_data.login_time = date.getTime();
		if(saveToLocalStorage != null) {
			saveToLocalStorage("userData", new_data);
		}
		window.location.href = BASE_URL + "pendaftaran/kartu";
	} else {
		alert(result.data);
	}
}
function submitlogin(field) {
	var bucket = {"todo":"login", "data":[
			{"nama_pengguna":field.nama_pengguna.value, "kata_sandi":field.kata_sandi.value}
		]};
	sendJSONType(bucket, loginAfter);
	return false;
}
function loginAfter(data) {
	var result = JSON.parse(data);
	if(result.status == "success") {
		// Add to local storage
		var new_data = result.data;
		var date = new Date();
		new_data.login_time = date.getTime();
		if(saveToLocalStorage != null) {
			saveToLocalStorage("userData", new_data);
		}

		// Change element on login node
		var changeelement = document.getElementById('login');
		changeelement.innerHTML = "Welcome, <a href=\"" + BASE_URL + "profil/\">" + getItemLocalStorage("userData").nama_lengkap + "</a> - ";
		changeelement.innerHTML += "<a onClick=\"logout()\" href=\"#\">Logout</a>";
		// Remove loginbox node
		var child = document.getElementById('loginbox');
		if(child != null) child.parentNode.removeChild(child);

		// set keranjang_belanja node to visible with inline-block display
		document.getElementById('keranjang_belanja').style.display = "inline-block";
	} else if(result.status == "failed") {
		alert("Data username atau password salah.\nSilahkan coba lagi.");
	}
}
function logout() {
	if(removeLocalStorage != null) {
		removeLocalStorage("userData");
	}

	// change innerHTML on login node
	var changeelement = document.getElementById('login');
	changeelement.innerHTML = "<a href=\"#loginbox\">Masuk</a>";
	
	// Add loginbox node
	var parent = changeelement.parentNode;
	parent.innerHTML += loginformhtml;

	// set keranjang_belanja node to invisible with none display
	document.getElementById('keranjang_belanja').style.display = "none";
	window.location.href = BASE_URL;
}
function getMoreIdentity() {
	if(getItemLocalStorage("userData") != null) {
		var bucket = {"todo":"getIdentity", "data":[
				{"user_id":getItemLocalStorage("userData").user_id}
			]};
		sendJSONType(bucket, getMoreIdentityAfter);
	} else {
		alert("Anda belum login.");
		window.location.href = BASE_URL + "#loginbox";
	}
}
function getMoreIdentityAfter(data) {
	var result = JSON.parse(data);
	if(result.status == "success") {
		var identity = result.data;
		var parent = document.getElementById('identitas');
		parent.innerHTML = "<p><span>Nama Lengkap</span>: " + getItemLocalStorage("userData").nama_lengkap + "</p>";
		parent.innerHTML += "<p><span>Alamat</span>: " + identity.alamat + "</p>";
		parent.innerHTML += "<p><span>Provinsi</span>: " + identity.provinsi + "</p>";
		parent.innerHTML += "<p><span>Kabupaten</span>: " + identity.kabupaten + "</p>";
		parent.innerHTML += "<p><span>Kode POS</span>: " + identity.kodepos + "</p>";
		parent.innerHTML += "<p><span>Nomor Handphone</span>: " + identity.user_phone + "</p>";
		parent.innerHTML += "<p><span>&nbsp;</span>&nbsp; <input type=\"button\" name=\"edit_profile\" value=\"Ganti Identitas\" onClick=\"buttonEditIdentity()\"></p>";
		identitas_pelanggan = identity;
	} else {
		var parent = document.getElementById('identitas');
		parent.innerHTML = "<p><span>Nama Lengkap</span>: " + getItemLocalStorage("userData").nama_lengkap + "</p>";
		parent.innerHTML += "<p><span>Alamat</span>: <i>Kosong</i></p>";
		parent.innerHTML += "<p><span>Provinsi</span>: <i>Kosong</i></p>";
		parent.innerHTML += "<p><span>Kabupaten</span>: <i>Kosong</i></p>";
		parent.innerHTML += "<p><span>Kode POS</span>: <i>Kosong</i></p>";
		parent.innerHTML += "<p><span>Nomor Handphone</span>: <i>Kosong</i></p>";
		parent.innerHTML += "<p><span>&nbsp;</span>&nbsp; <input type=\"button\" name=\"edit_profile\" value=\"Ganti Identitas\" onClick=\"buttonEditIdentity()\"></p>";
	}
}
function buttonEditIdentity() {
	var parent = document.getElementById('identitas');
	if(identitas_pelanggan == null) {
		parent.innerHTML = "<form method=\"post\" onSubmit=\"return submitEditIdentity(this)\">"
		                 + "<p><span>Nama Lengkap</span>: <input type=\"text\" name=\"nama_lengkap\" value=\"" + getItemLocalStorage("userData").nama_lengkap + "\" onKeyUp=\"editProfilFullName(this)\"></p>"
						 + "<p><span>Password</span>: <input type=\"password\" name=\"kata_kunci1\" onKeyUp=\"editProfilPassword(this)\"></p>"
						 + "<p><span>Konfirmasi Password</span>: <input type=\"password\" name=\"kata_kunci2\" onKeyUp=\"editProfilConfirmPassword(this)\"></p>"
						 + "<p><span>Alamat</span>: <input type=\"text\" name=\"alamat\" onKeyUp=\"editProfilAlamat(this)\"></p>"
						 + "<p><span>Provinsi</span>: <input type=\"text\" name=\"provinsi\" onKeyUp=\"editProfilProvinsi(this)\"></p>"
						 + "<p><span>Kota/Kabupaten</span>: <input type=\"text\" name=\"kabupaten\" onKeyUp=\"editProfilKabupaten(this)\"></p>"
						 + "<p><span>Kode POS</span>: <input type=\"text\" name=\"kodepos\" onKeyUp=\"editProfilKodePOS(this)\"></p>"
						 + "<p><span>Nomor Handphone</span>: <input type=\"text\" name=\"no_hp\" onKeyUp=\"editProfilNoHP(this)\"></p>"
						 + "<p><span>&nbsp;</span>&nbsp; <input type=\"submit\" name=\"edit_profile\" value=\"Ganti Identitas\" disabled=\"disabled\"></p>"
						 + "</form>";
	} else {
		parent.innerHTML = "<form method=\"post\" onSubmit=\"return submitEditIdentity(this)\">"
						 + "<p><span>Nama Lengkap</span>: <input type=\"text\" name=\"nama_lengkap\" value=\"" + getItemLocalStorage("userData").nama_lengkap + "\" onKeyUp=\"editProfilFullName(this)\"></p>"
						 + "<p><span>Password</span>: <input type=\"password\" name=\"kata_kunci1\" onKeyUp=\"editProfilPassword(this)\"></p>"
						 + "<p><span>Konfirmasi Password</span>: <input type=\"password\" name=\"kata_kunci2\" onKeyUp=\"editProfilConfirmPassword(this)\"></p>"
						 + "<p><span>Alamat</span>: <input type=\"text\" name=\"alamat\" value=\"" + identitas_pelanggan.alamat +"\" onKeyUp=\"editProfilAlamat(this)\"></p>"
						 + "<p><span>Provinsi</span>: <input type=\"text\" name=\"provinsi\" value=\"" + identitas_pelanggan.provinsi +"\" onKeyUp=\"editProfilProvinsi(this)\"></p>"
						 + "<p><span>Kota/Kabupaten</span>: <input type=\"text\" name=\"kabupaten\" value=\"" + identitas_pelanggan.kabupaten +"\" onKeyUp=\"editProfilKabupaten(this)\"></p>"
						 + "<p><span>Kode POS</span>: <input type=\"text\" name=\"kodepos\" value=\"" + identitas_pelanggan.kodepos +"\" onKeyUp=\"editProfilKodePOS(this)\"></p>"
						 + "<p><span>Nomor Handphone</span>: <input type=\"text\" name=\"no_hp\" value=\"" + identitas_pelanggan.user_phone +"\" onKeyUp=\"editProfilNoHP(this)\"></p>"
						 + "<p><span>&nbsp;</span>&nbsp; <input type=\"submit\" name=\"edit_profile\" value=\"Ganti Identitas\" disabled=\"disabled\"></p>"
						 + "</form>";
		editProfilSubmit(3, true);
		editProfilSubmit(4, true);
		editProfilSubmit(5, true);
		editProfilSubmit(6, true);
		editProfilSubmit(7, true);
	}
}
function submitEditIdentity(forms) {
	if(identitas_pelanggan != null) { // cek apakah terdapat perubahan nilai pada form
		var ariCheckSame = true;
		ariCheckSame = (ariCheckSame && getItemLocalStorage("userData").nama_lengkap == forms.nama_lengkap.value);
		ariCheckSame = (ariCheckSame && forms.kata_kunci1.value == "");
		ariCheckSame = (ariCheckSame && identitas_pelanggan.alamat == forms.alamat.value);
		ariCheckSame = (ariCheckSame && identitas_pelanggan.provinsi == forms.provinsi.value);
		ariCheckSame = (ariCheckSame && identitas_pelanggan.kabupaten == forms.kabupaten.value);
		ariCheckSame = (ariCheckSame && identitas_pelanggan.kodepos == forms.kodepos.value);
		ariCheckSame = (ariCheckSame && identitas_pelanggan.user_phone == forms.no_hp.value);
		if(ariCheckSame) {
			var parent = document.getElementById('identitas');
			parent.innerHTML = "<p><span>Nama Lengkap</span>: " + getItemLocalStorage("userData").nama_lengkap + "</p>";
			parent.innerHTML += "<p><span>Alamat</span>: " + identitas_pelanggan.alamat + "</p>";
			parent.innerHTML += "<p><span>Provinsi</span>: " + identitas_pelanggan.provinsi + "</p>";
			parent.innerHTML += "<p><span>Kabupaten</span>: " + identitas_pelanggan.kabupaten + "</p>";
			parent.innerHTML += "<p><span>Kode POS</span>: " + identitas_pelanggan.kodepos + "</p>";
			parent.innerHTML += "<p><span>Nomor Handphone</span>: " + identitas_pelanggan.user_phone + "</p>";
			parent.innerHTML += "<p><span>&nbsp;</span>&nbsp; <input type=\"button\" name=\"edit_profile\" value=\"Ganti Identitas\" onClick=\"buttonEditIdentity()\"></p>";
			alert("Tidak ada perubahan data.");
			return;
		}
	}
	var bucket = {"todo":"changeIdentity", "data":[
		{"user_id":getItemLocalStorage("userData").user_id,
		 "nama_lengkap" : forms.nama_lengkap.value,
		 "kata_sandi" : forms.kata_kunci1.value,
		 "alamat" : forms.alamat.value,
		 "provinsi" : forms.provinsi.value,
		 "kabupaten" : forms.kabupaten.value,
		 "kodepos" : forms.kodepos.value,
		 "no_hp" : forms.no_hp.value,
		}
	]};
	sendJSONType(bucket, getMoreIdentityAfter);
	return false;
}

/* ------------------------------------------------------------------------- */
/*                                LOCAL STORAGE                              */
/* ------------------------------------------------------------------------- */
if(typeof(Storage) !== "undefined") {
	function saveToLocalStorage(key, value) {
		localStorage[key] = JSON.stringify(value);
	}
	function getItemLocalStorage(key) {
		if(localStorage[key] != null)
			return JSON.parse(localStorage[key]);
		else
			return null;
	}
	function removeLocalStorage(key) {
		localStorage.removeItem(key);
	}
	if(getItemLocalStorage("userData") != null) {
		var data = getItemLocalStorage("userData");
		var date = new Date();
		if((data.login_time + (30 * 24 * 60 * 60 * 1000)) >= date.getTime()) {
			// Save new time to local storage
			data.login_time = date.getTime();
			saveToLocalStorage("userData", data);

			// Delete node loginbox
			var child = document.getElementById('loginbox');
			if(child != null) child.parentNode.removeChild(child);
			var changeelement = document.getElementById('login');
			changeelement.innerHTML = "Welcome, <a href=\"" + BASE_URL + "profil/\">" + getItemLocalStorage("userData").nama_lengkap + "</a> - ";
			changeelement.innerHTML += "<a onClick=\"logout()\" href=\"#\">Logout</a>";

			// set node keranjang_belanja to visible with inline-block display
			document.getElementById('keranjang_belanja').style.display = "inline-block";
		} else {
			removeLocalStorage("userData");
			alert("Anda sudah 30 hari tidak pernah menggunakan website ini.\nAnda telah di logout.");
			window.location.href = BASE_URL;
		}
	} else { // Not User Data
		var node = document.getElementById('login');
		node.innerHTML = "<a href=\"#loginbox\">Masuk</a>";
		var parent = node.parentNode;
		parent.innerHTML += loginformhtml;
		// set node keranjang_belanja to invisible with none display
		document.getElementById('keranjang_belanja').style.display = "none";
	}
} else {
	alert("Browser tidak support Local Storage. Mohon ganti ke browser yang mendukung.");
}