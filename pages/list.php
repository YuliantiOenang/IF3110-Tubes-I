<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />
<script type="text/javascript" src="../js/check_item_available.js"></script>
<script type="text/javascript" src="../js/add_cart.js"></script>
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
					if($name == "roti")
						return "Roti";
					elseif($name == "minuman")
						return "Minuman";
					elseif($name == "kalengan")
						return "Makanan Kalengan";
					elseif($name == "segar")
						return "Makanan Segar";
					elseif($name == "peralatan")
						return "Peralatan Rumah";
				}
				
				//SEARCH BAR
				?>
				<form action="search.php" method="get">
					<div class='sbox'>
						<h3 class='sb_name'>Pencarian</h3>
						<div class='sb_name'>Nama:</div><div class='sb_value'><input type="text" name="query_name" size="30" onkeyup="showResult(this.value)"></div>
						<div id="livesearch"></div>
						<div class='sb_name'>Harga:</div><div class='sb_value'><input type="text" name="query_price" size="30"></div>
						<div class='sb_name'>Kategori:</div><div class='sb_value'><select name="query_category">
						  <option value="roti">Roti</option>
						  <option value="minuman">Minuman</option>
						  <option value="kalengan">Makanan Kalengan</option>
						  <option value="segar">Makanan Segar</option>
						  <option value="peralatan">Peralatan Rumah</option>
						</select></div>
						<input type="submit" value="Submit">
					</div>
				</form>
				
				<?php
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				// Check connection
				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				//check data posted
				
				$category = $_GET['cat'];
				echo "<div class='category'>";
				echo "<h2>" . getFormalName($category)."</h2><br/>";
				echo "</div>";
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
					echo "<div class='goods'>"	;
						echo "<img width = 170px src='../img/". $row['gambar']. "'> <br/>";
						echo "<a href='details.php?gid=". $row['id_inventori'] ."'>". $row['nama_inventori'] . " </a><br/>";
						echo "Rp ".$row['harga'].",00 <br/>";
						?>
							<input type='text' onkeydown="" value='0' size=7 ></input>
							<div id='item_status<?php echo $row['id_inventori']; ?>'></div>
							<div id='cart'><a><img src="../img/addtocart.png" height=25px onclick='checkItem(this.value, <?php echo $row['id_inventori']; ?>)'></img></a></div>
						<?php
					echo "</div>";
				}
				
				//PAGINASI
				echo "<div class='pagination'>";
				$resultSize = mysqli_num_rows($result);
				echo "Go to Page ";
				for($i=1;$i<=ceil($resultSize/10);$i++){
					echo '<a href="list.php?cat='. $category . '&start='. ($i - 1)*10 .'">'.$i. "</a> ";
				}
				echo "</div>";
				
				
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
