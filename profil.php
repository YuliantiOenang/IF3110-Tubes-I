<?php 
				include('conn.php');
				//where username='".$_SESSION['userid']."'"
				if(isset($_SESSION['userid'])){
?>				
<article class="lifted_content_box">
		<h1>Profil </h1>
		<div id="itemcontent">
			<p>
<?php
				$query = mysql_query("SELECT * FROM anggota where userid = 'dinah'");
				$row = mysql_fetch_array($query);
				echo "<table border=0>";
					echo "<tr><td>Username</td><td>: ".$row['userid']."</td></tr>";
					echo "<tr><td>Nama Lengkap</td><td>: ". $row['fullname']."</td></tr>";
					echo "<tr><td>Nomor Handphone</td><td>: ".$row['nohp']."</td></tr>";
					echo "<tr><td>Alamat</td><td>: ".$row['alamat']."</td></tr>";
					echo "<tr><td>Provinsi</td><td>: ".$row['provinsi']."</td></tr>";
					echo "<tr><td>Kabupaten/Kota</td><td>: ".$row['kabupaten']."</td></tr>";
					echo "<tr><td>Kode Pos</td><td>: ".$row['kodepos']."</td></tr>";
					echo "<tr><td>E-mail</td><td>: ".$row['email']."</td></tr>";
				echo "</table>";
				
					//Close specified connection
					mysql_close($conn);
				?>
			</p>
		</div>
</article>
<?php
				}else{
					include("inputdaftar.php");
				}
?>