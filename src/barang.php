
<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registrasi Profil</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        
                
       </head>
    <body>
        
 <?php
 		$con=mysqli_connect("127.0.0.1","root","","ruserba");
		if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
 		$query.= "SELECT * FROM barang";
       	$result = mysql_query($query);
 		$rows = array();
 		if($result)
 		{
      		while($row=mysql_fetch_assoc($result)){
           	$rows[] = $row;
      		}
 		}
		
		
 ?>
        
           	<table height= "600" width="800">
			<tr style="vertical-align: top; text-align:top display:inline-block">
			<thead>   
      			<tr>
      				<td>Nama</td>
      				<td> Harga</td>
      				<td>Kategori</td>
      				<td>Stok</td>
      				<td>foto</td>
        
     			 </tr>
  			</thead> 
  <?php foreach ($rows as $row){?>
  <tr>
      <td><?php echo $row['nama_barang']?></td>
      <td><?php echo $row['harga']?></td>
      <td><?php echo $row['kategori']?></td>  
      <td><?php echo $row['stok']?></td>  
      <td><?php echo $row['url_gambar']?></td>  
      
      
  </tr>
  <?php }?>
</tr> 
            <footer>
            <br>
            About us
            </footer>    
    </body>
</html>
