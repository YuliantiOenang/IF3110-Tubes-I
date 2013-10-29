// Inisialisasi isi awal form, nanti ini diambil pake AJAX dari Database
var a, b, c, d, e, f, g, h, i, j;
var username, fullname, hp, email, alamat, provinsi, kota, kodepos, password, confirm;

// Inisialisasi variabel isi form
a = document.getElementById("username");
b = document.registration.fullname;
c = document.registration.hp;
d = document.getElementById("email");
e = document.registration.alamat;
f = document.registration.provinsi;
g = document.registration.kota;
h = document.registration.kodepos;
i = document.registration.password;
j = document.registration.confirm;
		
if(localStorage.IsLogin){
	if(localStorage.IsLogin==0){
		var raw = localStorage.data;
		var data = raw.split(',')//urutan nya full_name,alamat,provinsi,kota/kabupaten,kodepos,nomor_handphone,email,password		
		username = localStorage.id;
		fullname = data[0];
		hp = data[5];
		email = data[6];
		alamat = data[1];
		provinsi = data[2];
		kota = data[3];
		kodepos =data[4];
		password = data[7];
		confirm = data[7];
		

		// isi
		a.innerHTML = "Username: " + username;
		b.value = fullname;
		c.value = hp;
		d.innerHTML = "Email: " + email;
		e.value = alamat;
		f.value = provinsi;
		g.value = kota;
		h.value = kodepos;
		i.value = password;
		j.value = confirm;
		
	}
	else{//belum login
		window.location.assign("Login.html");
	}
}
else{
	//gak ada isLogin
	window.location.assign("Login.html");
}

// Variabel global
passwordflag, fullnameflag, confirmflag = true;

// Fungsi cek apakah tidak berubah, jika tidak alert, jika ya success
function checkchange(){
	if (b.value == fullname && c.value == hp && e.value == alamat && f.value == provinsi && g.value == kota && h.value == kodepos && i.value == password && j.value == confirm){
		alert('You did not change any value');
	}
	else{
		window.location.href = "#";
	}
}

// Fungsi validasi format input di form
function validate(type){
	if(type == "password"){ // Password
		var pattern = /........+/; // Regex
		var x = document.forms["registration"]["password"].value; // Ambil Value
		var y = document.getElementById("password"); // Ambil elemen tulisan di sebelah form
		
		// Cek value dengan regex
		if(!pattern.test(x)){
			y.innerHTML=" *password minimal 8 karakter";
			passwordflag = false;
		}else{
			y.innerHTML="";
			passwordflag = true;
			
			// Cek kesamaan dengan password
			if(username == x){
				y.innerHTML=" *password tidak boleh sama dengan username";
				passwordflag = false;
			}else{
				y.innerHTML="";
				passwordflag = true;
		
				// Cek kesamaan dengan email
				if(email == x){
					y.innerHTML=" *password tidak boleh sama dengan email";
					passwordflag = false;
				}else{
					y.innerHTML="";
					passwordflag = true;
				}
			}
		}	
	}else if(type == "confirm"){ // Confirm password
		var password = document.forms["registration"]["password"].value; // Ambil Value form Password
		var x = document.forms["registration"]["confirm"].value; // Ambil Value form Confirm
		var y = document.getElementById("confirm"); // Ambil elemen tulisan di sebelah form
		
		// Cek kesamaan dengan password
		if(password == x){
			y.innerHTML="";
			confirmflag = true;
		}else{
			y.innerHTML=" *konfirmasi password salah";
			confirmflag = false;
		}
	}else if(type == "fullname"){ // Full name
		var pattern = /.+ .+/; // Regex
		var x = document.forms["registration"]["fullname"].value; // Ambil Value
		var y = document.getElementById("fullname"); // Ambil elemen tulisan di sebelah form
		
		// Cek value dengan regex
		if(!pattern.test(x)){
			y.innerHTML=" *nama minimal 2 kata dipisahkan spasi";
			fullnameflag = false;
		}else{
			y.innerHTML="";
			fullnameflag = true;
		}
	}
}

// Fungsi disable/enable confirm button
function enablebutton(){
	var button = document.getElementById("submitbutton");
	if (passwordflag && fullnameflag && confirmflag){
		button.disabled=false;
	}else
		button.disabled=true;
}