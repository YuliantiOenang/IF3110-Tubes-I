<?php
	session_start();
	ob_start();
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
?>
<html>
	<head>
		<title>RuSerBa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
	</head>
	<body>
		<?php
			include 'header.php';
		?>
		<div id="content_body">
            <h3>Profile</h3>
				<form name="registerform" action="formprofil.php"  method="post" accept-charset="utf-8">  
						<br>
                        <label>Username</label>
                        <label for="nama"> $row[''] </label>

						<br>
                        <label>Jumlah Transaksi</label>
                        <label for="nama"> $row['jumlah_transaksi'] </label> 
                        
						<br>
                        <label for="password">Password Baru</label>
                        <input type="password" name="password" placeholder="" required/> 
                        
                        <br>
                        <label for="confirmpassword">Confirm Password Baru</label>  
                        <input type="password" name="password" placeholder="" required/>
                        
                        <br> 
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat Lama" required/>
                        
                        <br> 
                        <label>Provinsi</label>
                        <input type="text" name="provinsi" placeholder="Alamat Lama" required/>
                        
                        <br> 
                        <label>Kota/Kabupaten</label>
                        <input type="text" name="kota" placeholder="Kota/Kabupaten Lama" required/>
                        
                        <br> 
                        <label>Kode Pos</label>
                        <input type="number" name="kota" placeholder="Kode Pos Lama" required/>
                        
                        <br> 
                        <label>Nomor Handphone</label>
                        <input type="number" name="handphone" placeholder="Nomor Handphone Lama" required/>                      
                        
						<br>
                        <input type="submit" value="edit">  
				</form> 
        </div>
	</body>
</html>