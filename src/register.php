<?php
	session_start();
	ob_start();
	$isLogin = false;
	
	if (isset($_SESSION['userid'])) {
		header("Location: index.php");
	}
	
	$link = mysql_connect("localhost","root","") or die("Can't connect to database. Contact Your Administrator.");	
	mysql_select_db("ruserba") or die("Cannot select DB. Contact your web administrator.");
	
?>
<html>
	<head>
		<title>RuSerBa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="formprofil.js"> </script>
	</head>
	<body>
		<?php
			include 'header.php';
			
			if (isset($_POST['register'])) {
				$sql="INSERT INTO user (username ,password ,nama_lengkap , email , alamat, provinsi,kota,kodepos,nohp)
					VALUES
					('$_POST[username]',SHA1('$_POST[password]'),'$_POST[nama]','$_POST[email]','$_POST[alamat]','$_POST[provinsi]','$_POST[kota]','$_POST[kodepos]','$_POST[handphone]')";
				
				$result = mysql_query($sql, $link);
				if($result) {
					$_SESSION["userid"] = $_POST["username"];
					$_SESSION["username"] = $_POST["username"];
					$key = $row['username']."".date("Y/m/d");
					$key = SHA1($key);
					
					$query = "INSERT INTO login_cache VALUES ('$key','$username',DATE_ADD(NOW(),INTERVAL 30 DAY))";
					
					mysql_query($query, $link);
					
					header("Location: index.php");
				} else {
					echo mysql_error($con);
				}
			}
		?>
		
		<div id="content_body"> 
                    <form id= "registerform" name="register" action="register.php"  method="post" accept-charset="utf-8">  
                        <label>Username</label>
                        <input id="username" type="text" onchange="validation()" name="username" placeholder="username" required />  <span id="validHint"></span>
                        
                        <br />
                        <label>Password</label>
                        <input id="password" type="password" name="password" placeholder="password" onchange="validation()" required /> 
                        <span id="validPaswordHint"></span>
						
						<br />
                        <label>Confirm Password</label>  
                        <input type="password" id="confimrpassword" name="confimrpassword" placeholder="password" onchange="validation()" required />
                        <span id="validConfirmPasswordHint"></span>
						
                        <br >
                        <label>Email</label>
                        <input id="email" type="email" name="email" placeholder="email" onchange="validation()"required />  
                        <span id="validEmailHint"></span>
                        
                        <br /> 
                        <label>Nama Lengkap</label>
                        <input id="nama" type="text" name="nama" placeholder="Nama anda" onchange="validation()" required /> 
                        <span id="validNameHint"></span>
                        
                        <br /> 
                        <label>Alamat</label>
                        <textarea name="alamat" placeholder="Alamat anda" ></textarea>
                        
                        <br /> 
                        <label>Provinsi</label>
                        <input type="text" name="provinsi" placeholder="Alamat anda" required />
                        
                        <br /> 
                        <label>Kota/Kabupaten</label>
                        <input type="text" name="kota" placeholder="Kota/Kabupaten" required />
                        
                        <br /> 
                        <label for="kodepos">Kode Pos</label>
                        <input type="number" name="kodepos" placeholder="Kode Pos" required />
                        
                        <br /> 
                        <label for="handphone">Nomor Handphone</label>
                        <input type="number" name="handphone" placeholder="Tanpa +62" required />                      
                        <br />
                        <input name="register" id="button" type="submit" value="register" class="button" />  
                    </form> 
		</div>
	</body>
</html>