//validasi input setiap field pada form
function CheckField(field)
{
	var val_username  = document.forms ["regform"] ["username"].value;
	var val_namalengkap = document.forms ["regform"] ["namalengkap"].value;
	var val_email = document.forms ["regform"] ["email"].value;
	var val_password  = document.forms ["regform"] ["password"].value;
	var val_cpassword  = document.forms ["regform"] ["cpassword"].value;
	var err_username  = document.getElementById("err_username");
	var err_namalengkap  = document.getElementById("err_namalengkap");
	var err_email  = document.getElementById("err_email");
	var err_password  = document.getElementById("err_password");
	var err_cpassword  = document.getElementById("err_cpassword");
	
	switch(field)
	{
		case 'username' :
			//pengecekan whitespace pada username
			var valid = /\s/;
			if (valid.test(val_username) == true)
			{
				err_username.innerHTML = "Username tidak boleh mengandung spasi";
			}
			else if ((val_username.length > 0) && (val_username.length < 5))
			{
				err_username.innerHTML = "Username minimal terdiri 5 karakter"; 
			}
			else if ((val_username.length != 0) && (val_username == val_password))
			{
				err_username.innerHTML = "Username tidak boleh sama dengan password";
			}
			else
			{
				//pengecekan username ke db
				if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						err_username.innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET","validasi_username_email.php?q="+val_username,true);
				xmlhttp.send();
			}
			break;
		case 'namalengkap' :
			//validasi dengan regex
			var valid = /. ./i;
			if ((val_namalengkap.length != 0) && (valid.test(val_namalengkap) == false))
			{
				err_namalengkap.innerHTML = "Nama Lengkap harus mempunyai minimal dua kata yang dipisahkan oleh spasi";
			}
			else
			{
				err_namalengkap.innerHTML = "";
			}
			break;
		case 'email' :
			var atpos=val_email.indexOf("@");
			var dotpos=val_email.lastIndexOf(".");
			var whitespace=val_email.indexOf(" ");
			if ((val_email.length != 0) && (atpos<1 || dotpos<atpos+2 || dotpos+2>=val_email.length || whitespace != -1))
			{
				err_email.innerHTML = "Format email tidak valid";
			}
			else
			{
				//pengecekan email ke db
				if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						err_email.innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET","validasi_username_email.php?q="+val_email,true);
				xmlhttp.send();
			}
			break;
		case 'password' :
			if ((val_password.length > 0) && (val_password.length < 8))
			{
				err_password.innerHTML = "Password harus mempunyai panjang minimal 8 karakter";
			}
			else if ((val_password.length != 0) && (val_password == val_username))
			{
				err_password.innerHTML = "Password tidak boleh sama dengan Username";
			}
			else if ((val_password.length != 0) && (val_password == val_email))
			{
				err_password.innerHTML = "Password tidak boleh sama dengan Email";
			}
			else
			{
				err_password.innerHTML = "";
			}
			break;
		case 'cpassword' :
			if ((val_cpassword.length != 0) && (val_password.length != 0) && (val_cpassword != val_password))
			{
				err_cpassword.innerHTML = "Harus sama dengan Password";
			}
			else
			{
				err_cpassword.innerHTML = "";
			}
			break;
	}
}

//enable button Register pada form Register
function CheckForm()
{
	//field pada form
	var lgt_username  = document.forms ["regform"] ["username"].value.length;
	var lgt_namalengkap = document.forms ["regform"] ["namalengkap"].value.length;
	var lgt_email = document.forms ["regform"] ["email"].value.length;
	var lgt_password  = document.forms ["regform"] ["password"].value.length;
	var lgt_cpassword  = document.forms ["regform"] ["cpassword"].value.length;
	var lgt_nomorhp  = document.forms ["regform"] ["nomor_hp"].value.length;
	var lgt_alamat  = document.forms ["regform"] ["alamat"].value.length;
	var lgt_kotakabupaten  = document.forms ["regform"] ["kota_kabupaten"].value.length;
	var lgt_provinsi  = document.forms ["regform"] ["provinsi"].value.length;
	var lgt_kodepos  = document.forms ["regform"] ["kodepos"].value.length;
	//error message
	var err_username  = document.getElementById("err_username");
	var err_namalengkap  = document.getElementById("err_namalengkap");
	var err_email  = document.getElementById("err_email");
	var err_password  = document.getElementById("err_password");
	var err_cpassword  = document.getElementById("err_cpassword");
	//button Register
	var button_submit = document.forms ["regform"] ["btn_submit"];
	
	//jika semua field sudah terisi
	if((lgt_username!=0 )&& (lgt_namalengkap!=0) && (lgt_email!=0) && (lgt_password!=0) && (lgt_cpassword!=0) && (lgt_nomorhp!=0) && (lgt_alamat!=0) && (lgt_kotakabupaten!=0) && (lgt_provinsi!=0) && (lgt_kodepos!=0))
	{
		//jika field error semuanya kosong
		if((err_username.innerHTML=="") && (err_namalengkap.innerHTML=="") && (err_email.innerHTML=="") && (err_password.innerHTML=="") && (err_cpassword.innerHTML==""))
		{
			//enable button Register
			button_submit.disabled = false;
		}
	}
}

//menampilkan form untuk di-edit pada form Profile
function EnableEditProfile()
{
	//menampilkan form edit profile
	document.getElementById("fieldset_profile").style.display = "block";
	//menyembunyikan profil yang awalnya ditampilkan
	document.getElementById("view_profile").style.display = "none";
	//menampilkan nilai pada profil awal
	document.forms ["regform"] ["username"].value = document.getElementById("prof_username").innerHTML;
	document.forms ["regform"] ["namalengkap"].value = document.getElementById("prof_namalengkap").innerHTML;
	document.forms ["regform"] ["nomor_hp"].value = document.getElementById("prof_nomor_hp").innerHTML;
	document.forms ["regform"] ["alamat"].value = document.getElementById("prof_alamat").innerHTML;
	document.forms ["regform"] ["kota_kabupaten"].value = document.getElementById("prof_kota_kabupaten").innerHTML;
	document.forms ["regform"] ["provinsi"].value = document.getElementById("prof_provinsi").innerHTML;
	document.forms ["regform"] ["kodepos"].value = document.getElementById("prof_kodepos").innerHTML;
	document.forms ["regform"] ["email"].value = document.getElementById("prof_email").innerHTML;
	document.forms ["regform"] ["password"].value = document.getElementById("prof_password").innerHTML;
	document.forms ["regform"] ["cpassword"].value = document.getElementById("prof_password").innerHTML;
	
	//update pengecekan form
	CheckForm();
}

//mengembalikan informasi sebuah user sesuai field yang diminta
//khusus untuk halaman profil
function ShowProfile()
{
	var val_profil;
	//mengambil username dari localStorage
	var val_username = localStorage.getItem(0);
	
	//pengecekan username dan password ke db
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				//responseText dalam tag HTML
				val_profil=xmlhttp.responseText;
				document.getElementById("view_profile").innerHTML = val_profil;
			}
		}
		xmlhttp.open("GET","get_profile.php?username="+val_username,true);
		xmlhttp.send();
}