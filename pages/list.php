<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class = "page_container">

		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>

		<div class = "container">
			<?php
				function getFormalName($name){
					if($name == "baking")
						return "Baking";
					elseif($name == "beverages")
						return "Beverages";
					elseif($name == "cansoups")
						return "Canned Goods & Soups";
					elseif($name == "fresh")
						return "Fresh Food";
					elseif($name == "household")
						return "Household Essentials";
				}
				
				echo '<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>';
				
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				// Check connection
				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				//check data posted
				
				$category = $_GET['cat'];	
				echo "<h2>Category: " . getFormalName($category)."</h2><br/>";
				
				echo "Perhatikan saat user membeli sebuah barang maka jumlah barang dalam basis data dikurangi. Ketika barang ada didalam shopping bag dan belum dibeli maka jumlah barang dalam basis data tidak dikurangi. <br/><br/>";
				
							
				$result = mysqli_query($con,"SELECT * FROM kategori NATURAL JOIN inventori WHERE nama_kategori = '".$category."'");
				
				$start = (!isset($_GET['start']) ? 0 : $_GET['start']);
				$num_items = 10;
				$cur_idx = 0;
				$cur_count = 0;
				while($row = mysqli_fetch_array($result)){
					if($cur_idx < $start){
						$cur_idx++;
						continue;
					} else {
						if($cur_count < $num_items){
							$cur_count++;
						} else {
							break;
						}
					}
						
					echo "<img src='../". $row['gambar'] ."'> <br/>";
					echo "Nama: <a href='detail.php?gid=". $row['id_inventori'] ."'>". $row['nama_inventori'] . " </a><br/>";
					echo "Harga: Rp10000 <br/>";
					echo '<form name="input" action="beli.php?id='. $row['id_inventori'] .'&cat='.$category.'" method="post">
						Jumlah: <input type="text" name="jumlah" value="0">
						<input type="submit" value="Beli">
						</form>';
				}
				
				//PAGINASI
				echo "<br/>";
				$resultSize = mysqli_num_rows($result);
				for($i=1;$i<=ceil($resultSize/10);$i++){
					echo '<a href="list.php?cat='. $category . '&start='. ($i - 1)*10 .'">'.$i. "</a> ";
				}
				
				
				if($resultSize == 0){
					echo "No result found.";
				}
				mysqli_close($con);

			?>
		</div>
		
	</div>
		<?php include ("../templates/footer.php");?>
</html>

<script>
function showResult(str)
{
	if (str.length==0)
	{ 
	  document.getElementById("livesearch").innerHTML="";
	  document.getElementById("livesearch").style.border="0px";
	  return;
	}
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
		document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
		document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	  }
	}
	xmlhttp.open("GET","livesearch.php?q="+str,true);
	xmlhttp.send();
}
</script>
