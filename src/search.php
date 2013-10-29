<?php
if (isset($_GET['sortby'])&&isset($_GET['sorttype'])){
	$sb=$_GET['sortby'];
	$st=$_GET['sorttype'];
	$sql="";
	$response="";
	$con=mysqli_connect("localhost","root","","test");
	if (mysqli_connect_errno($con)){
	  $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 else{
		if (isset($_GET['category'])){
			$id = $_GET['category'];
			$id = "%".$id."%";
			$sql = "SELECT * FROM barang WHERE Category LIKE '$id' ORDER BY '$sb' '$st'";
		}
		else if(isset($_GET['name'])){
			$id = $_GET['name'];
			$id = "%".$id."%";
			$sql = "SELECT * FROM barang WHERE Nama LIKE '$id' ORDER BY '$sb' '$st'";
		}
		else if(isset($_GET['price'])){
			$id = $_GET['price'];
			$id = "%".$id."%";
			$sql = "SELECT * FROM barang WHERE Harga LIKE '$id' ORDER BY '$sb'  '$st'";
		}
		// else if(isset($_GET['search'])){
			// $id = $_GET['search'];
			// $id = "%".$id."%";
			// $sql = "SELECT * FROM barang WHERE Nama LIKE '$id'";
		// }
		
		$query = mysqli_query($con,$sql);
		$data ="";
		while($row = mysqli_fetch_array($query))
		  {
		  $data=$data . $row['Barang_ID'].",";
		  $data=$data . $row['Nama'].",";
		  $data=$data . $row['Harga'].",";
		  $data=$data .$row['stock'].",";
		  $data=$data . $row["image_path"].",";
		}
		$response = $data;
	
	}
	echo $response;
}
else if (isset($_GET['category'])) { //redirect dari klik tombol  search by category
  $id = $_GET['category'];
	$con=mysqli_connect("localhost","root","","test");

	// Check connection
	if (mysqli_connect_errno($con)){
	  $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 else{
		//baca mysql, cari apa ada yang id nya  $id trus pass nya $
		$sql = "SELECT * FROM barang WHERE Category = '$id'";
		$query = mysqli_query($con,$sql);
		$data ="";
		while($row = mysqli_fetch_array($query))
		  {
		  $data=$data . $row['Barang_ID'].",";
		  $data=$data . $row['Nama'].",";
		  $data=$data . $row['Harga'].",";
		  $data=$data .$row['stock'].",";
		  $data=$data . $row["image_path"].",";
		}
		$response = $data;
	}
	echo $response;
	mysqli_close($con);
}
else if(isset($_GET['name'])){ // redirect dari tombol search by name
	$id = $_GET['name'];
	$con=mysqli_connect("localhost","root","","test");

	// Check connection
	if (mysqli_connect_errno($con)){
	  $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 else{
		$id = "%".$id."%";
		//baca mysql, cari apa ada yang id nya  $id trus pass nya $
		$sql = "SELECT * FROM barang WHERE Nama LIKE '$id'";
		$query = mysqli_query($con,$sql);
		$data ="";
		while($row = mysqli_fetch_array($query))
		  {
		  $data=$data . $row['Barang_ID'].",";
		  $data=$data . $row['Nama'].",";
		  $data=$data .$row['Harga'].",";
		  $data=$data .$row['stock'].",";
		  $data=$data . $row["image_path"].",";
		  }
		$response = $data;
	}
	echo $response;
	mysqli_close($con);  
}
else if(isset($_GET['price'])){ // redirect dari tombol search by name
	$id = $_GET['price'];
	$con=mysqli_connect("localhost","root","setsunaeseiei","test");

	// Check connection
	if (mysqli_connect_errno($con)){
	  $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 else{
		$id = "%".$id."%";
		//baca mysql, cari apa ada yang id nya  $id trus pass nya $
		$sql = "SELECT * FROM barang WHERE Harga LIKE '$id'";
		$query = mysqli_query($con,$sql);
		$data ="";
		while($row = mysqli_fetch_array($query))
		  {
		  $data=$data . $row['Barang_ID'].",";
		  $data=$data . $row['Nama'].",";
		  $data=$data .$row['Harga'].",";
		  $data=$data .$row['stock'].",";
		  $data=$data . $row["image_path"].",";
		  }
		$response = $data;
	}
	echo $response;
	mysqli_close($con);  
  
}
// else if(isset($_GET['search'])){ // redirect dari tombol search by name
	// $id = $_GET['search'];
	// $con=mysqli_connect("localhost","root","setsunaeseiei","test");

	// // Check connection
	// if (mysqli_connect_errno($con)){
	  // $response = (string)"Failed to connect to MySQL: " . mysqli_connect_error();
	 // }
	 // else{
		// $id = "%".$id."%";
		// //baca mysql, cari apa ada yang id nya  $id trus pass nya $
		// $sql = "SELECT * FROM barang WHERE Nama LIKE '$id'";
		// $query = mysqli_query($con,$sql);
		// $data ="";
		// while($row = mysqli_fetch_array($query))
		  // {
		  // $data=$data . $row['Barang_ID'].",";
		  // $data=$data . $row['Nama'].",";
		  // $data=$data .$row['Harga'].",";
		  // $data=$data .$row['stock'].",";
		  // $data=$data . $row["image_path"].",";
		  // }
		// $response = $data;
	// }
	// echo $response;
	// mysqli_close($con);  
  
// }
?>
