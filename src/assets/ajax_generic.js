/*
 * Prosedur mengirim data melalui bahasa AJAX
 * @param {String} data 
 *        Data yang akan dikirim. Ingat, data harus dalam format POST
 *        Tidak boleh "null"
 * @param {String} target
 *        Alamat yang akan mengeksekusi pengiriman data "<Base URL/> + target"
 *        Tidak boleh "null"
 * @param {function} callback_f 
 *        Fungsi yang akan di eksekusi setelah mendapatkan respon dari OK
          dari server.
 *        Jika input null, maka tidak akan ada fungsi yang dipanggil.
 *        Jika ada, fungsi harus punya paramater input bertipe string untuk
          menerima response dari server.
 */
function send(data, target, callback_f) {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(callback_f != null) callback_f(xmlhttp.responseText);
		}
	}
	
	xmlhttp.open("POST",target,true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(data);
}

function myOutput(data) {
	var result = JSON.parse(data);
	alert(result.nama);
}

function testA() {
	var form = document.getElementById("my_id");
	var bucket = {"nama":form.elements[0].value};
	send("data=" + JSON.stringify(bucket), "proses/", myOutput);
}