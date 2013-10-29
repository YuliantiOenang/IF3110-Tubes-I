function checkEdit(fullname, password, cpassword, alamat, kota_kab, provinsi, kode_pos, no_hp) {
		if ((fullname.length==0) && (password.length==0) &&  (cpassword.length==0) &&
		(alamat.length==0) && (kota_kab.length==0) &&  (provinsi.length==0) &&
		(kode_pos.length==0) && (no_hp.length==0))
		{
			  alert("Tidak ada atribut profile yang diubah!");
			  return false;
		} 
		if (password == cpassword) {
			return true;
		} else {
			return false;
		}
	}

function checkCPass(cpass, pass){
	if(cpass.length==0){
		document.getElementById('v_cpass').innerHTML='';
		document.edit_form.submit.disabled =false;
		return true;	
	} else {
		if(cpass == pass){
			document.getElementById('v_cpass').innerHTML='<font color="green">Benar</font>';
			document.edit_form.submit.disabled =false;
			return true;					
		}else{
			document.getElementById('v_cpass').innerHTML='<font color="red">Salah</font>';
			document.edit_form.submit.disabled =true;
			return false;
		}
	}
}			

function checkPass(pass, uname, email){
	if(pass.length==0) {
		document.getElementById('v_pass').innerHTML='';
		document.edit_form.submit.disabled =false;
		return true;
	} else {
		if((pass != uname) && (pass != email)){
			document.getElementById('v_pass').innerHTML='<font color="green">Benar</font>';
			document.edit_form.submit.disabled =false;
			return true;					
		}else if(pass == uname){
			document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan username</font>'; 
			document.edit_form.submit.disabled =true;
			return false;
		}
		else if(pass == email){
			document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan email</font>'; 
			document.edit_form.submit.disabled =true;
			return false;
		}
		else{
			document.getElementById('v_pass').innerHTML='<font color="red">Password tidak boleh sama dengan username/email</font>'; 
			document.edit_form.submit.disabled =true;
			return false;
		}
	}
}

function validateFullName(nama) {
	if (nama.length==0) {
		document.getElementById('v_nama').innerHTML='';
		document.edit_form.submit.disabled =false;
		return true;	
	} else {
		var str = nama;
		var idx = str.indexOf(' ');
		if (idx > 0 && idx < str.length - 1) {
			var chr1 = str.charAt(idx - 1);
			var chr2 = str.charAt(idx + 1);
			if (chr1 != ' ' && chr2 != ' ') {
				document.getElementById('v_nama').innerHTML='<font color="green">Benar</font>';
				document.edit_form.submit.disabled =false;
				return true;	
			} else {
				document.getElementById('v_nama').innerHTML='<font color="red">Nama lengkap minimal 2 kata dipisahkan 1 spasi</font>'; 
				document.edit_form.submit.disabled =true;
				return false;
			}
		} else {
			document.getElementById('v_nama').innerHTML='<font color="red">Nama lengkap minimal 2 kata dipisahkan 1 spasi</font>'; 
			document.edit_form.submit.disabled =true;
			return false;
		}
	}
}