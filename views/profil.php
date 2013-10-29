<?php include 'header.php';?>
	
<div id="page" class="container">
	

	<div id="warning">
	</div>
	<!-- <form action="actions/registrasi-submit.php" method="POST"> -->
	<form action='http://localhost/waserda/index.php?profil&action="updatedata"' method="POST">
	  username : <br> <input type="text" name="no_kartu" onchange="validator();"><br>
	  nama lengkap : <br> <input type="text" name="no_kartu" onchange="validator();"><br>
	  no handphone : <br> <input type="text" name="no_hp" onchange="validator();"><br>
	  alamat : <br> <textarea name="alamat"></textarea><br>
	  provinsi ; <br> <input type="text" name="provinsi" onchange="validator();"><br>
	  kabupaten / kota : <br> <input type="text" name="kota" onchange="validator();"><br>
	  kodepos : <br> <input type="text" name="kodepos" onchange="validator();"><br>
	  email : <br> <input type="text" name="email" onchange="validator();"><br>
	  <!-- Nama Lengkap : <br> <input type="text" name="nama_lengkap"><br>
	  Nomor Handphone :<br> <input type="text" name="no_handphone"><br>
	  Alamat :<br> <input type="text" name="alamat"><br>
	  Provinsi: <input type="text" name="provinsi"><br>
	  Last name: <input type="text" name="kabupaten_kota"><br> -->
	  <input id="submit_button" type="submit" value="Update">
	</form> 
</div>

<script src="assets/js/registrasi.js"></script>

<?php include 'footer.php'; ?>