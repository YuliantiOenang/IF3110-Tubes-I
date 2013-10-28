<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />
<head>
	<title>Toko Imba</title>	

</head>
	<div class = "page_container">

		<?php 
			session_start();
			$_SESSION['state'] = 1;
			
			if($_SESSION['state'] == 1){
				include ("../templates/header.php");
				include ("../templates/navigation.php"); 
			}
			else{
				include ("templates/header.php");
				include ("templates/navigation.php"); 
			}?>
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
						
					echo "<img src='../img/". $row['gambar'] ."'> <br/>";
					echo "Nama: <a href='details.php?gid=". $row['id_inventori'] ."'>". $row['nama_inventori'] . " </a><br/>";
					echo "Harga: Rp".$row['harga']." <br/>";
					?>
						<input type='text' value='0' onkeyup='checkItem(this.value, <?php echo $row['id_inventori']; ?>)'></input>
						<div id='item_status<?php echo $row['id_inventori']; ?>'></div>
					<?php
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
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
	</div>
</html>

<script type="text/javascript" src="../js/check_item_available.js"></script>

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
