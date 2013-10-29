
<article class="lifted_content_box">
		<h1>Pendaftaran </h1>
		<div id="itemcontent">
		<!--&& this.nohp.value == '' && this.email.value == '' && this.alamat.value == '' && this.provinsi.value == '' && this.kodepos.value == '' && this.kabupaten.value == '' && this.password.value == '' && this.confirmpassword.value == ''-->
			<form action="sukseslogin.php" method="POST" id="formdaftar" onSubmit="if (this.username.value == '' || this.fullname.value == '' || this.nohp.value == ''  || this.email.value == '' || this.provinsi.value == '' || this.kodepos.value == '' || this.kabupaten.value == '' || this.password.value == '' || this.confirmpassword.value == '' ) {return false;}">
			<table border=0>
			<tr><td>Username</td><td><input type="text" name="userid" id="userid" placeholder="Username"></td></tr>
			<tr><td>Nama Lengkap</td><td><input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap"></td></tr>
			<tr><td>Nomor Handphone</td><td><input type="text" name="nohp" id="nohp" placeholder="Nomor HP"></td></tr>
			<tr><td>Alamat</td><td><textarea  placeholder="Alamat" name="alamat" id="alamat" rows="3" cols="30"> </textarea></td></tr>
			<tr><td>Provinsi</td><td><input type="text" name="provinsi" id="provinsi" placeholder="Provinsi"></td></tr>
			<tr><td>Kabupaten/Kota</td><td><input type="text" name="kabupaten" id="kabupaten" placeholder="Kabupaten/Kota"></td></tr>
			<tr><td>Kode Pos</td><td><input type="text" name="kodepos" id="kodepos" placeholder="Kode Pos"></td></tr>
			<tr><td>E-mail</td><td><input type="text" name="email" id="email" placeholder="E-mail"></td></tr>
			<tr><td>Password</td><td><input type="password" name="password" id="password" placeholder="Password"></td></tr>
			<tr><td>Konfirmasi Password</td><td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="Konfirmasi Password"></td></tr>
			<tr><td></td><td><input class='submit' type='submit' name='submit' value='Register'></td></tr>
			</table>
			</form>
		</div>
</article>
    <script>
	// && $("#email").val()=="" && $("#nohp").val()=="" && $("#alamat").val()=="" && $("#provinsi").val()==""$("#kabupaten").val()=="" && $("#kodepos").val()=="" && $("#password").val()=="" && $("#confirmpassword").val()==""
    $(function(){
        $("#submit").submit(function(e){
          if($("#username").val()=="" && $("#fullname").val()=="" && $("#email").val()=="" && $("#nohp").val()=="" && $("#alamat").val()=="" && $("#provinsi").val()==""$("#kabupaten").val()=="" && $("#kodepos").val()=="" && $("#password").val()=="" && $("#confirmpassword").val()=="")
          {      
            e.preventDefault();
           }
        });        

    });
    </script>