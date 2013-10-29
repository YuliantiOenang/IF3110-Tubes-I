<article class="lifted_content_box">
		<h1>Pendaftaran Kartu Kredit </h1>
		<div id="itemcontent">
			<form action="sukseslogin.php" method="POST" id="formdaftarkartukredit" onSubmit="if (this.cardnumber.value == '' || this.name.value == '' || this.date.value == ''  ) {return false;}">
			<table border=0>
			<tr><td>Nomor Kartu</td><td><input type="text" name="cardnumber" id="cardnumber" placeholder="Nomor Kartu"></td></tr>
			<tr><td>Nama pada Kartu</td><td><input type="text" name="name" id="name" placeholder="Nama pada Kartu"></td></tr>
			<tr><td>Tanggal Kadaluwarsa</td><td><input type="text" name="date" id="date" placeholder="Tanggal Kadaluwarsa"></td></tr>
			<tr><td></td><td><input class='submit' type='submit' name='submit' value='Register Kartu'></td></tr>
			</table>
			</form>
		</div>
</article>
    <script>
    $(function(){
        $("#submit").submit(function(e){
          if($("#cardnumber").val()=="" && $("#name").val()=="" && $("#date").val()=="")
          {      
            e.preventDefault();
           }
        });        

    });
    </script>