<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/add_cart.js"></script>

<head>
	<title>Toko Imba</title>
</head>
<body>
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
		}
	?>
		<div class = "container">
				<form action="search.php" method="get">
					<div class='sbox'>
						<div id='sb_name'>Nama:</div><div id='sb_value'><input type="text" name="query_name" size="20" onkeyup="showResult(this.value)"></div>
						<div id='sb_name'>Harga:</div><div id='sb_value'><input type="text" name="query_price" size="20"></div>
						<div id='sb_name'>Kategori:</div><div id='sb_value'><select name="query_category">
						  <option value="roti">Roti</option>
						  <option value="minuman">Minuman</option>
						  <option value="kalengan">Makanan Kalengan</option>
						  <option value="segar">Makanan Segar</option>
						  <option value="peralatan">Peralatan Rumah</option>
						</select></div>
						<input type="image" src="../img/search.png" width=30px>
					</div>
					<div id="livesearch"></div>
				</form>
		
			<?php
			// Create connection
			$con=mysqli_connect("127.0.0.1","root","","toko_imba");
			//check ada ga gidnya
			$gid = $_GET['gid'];
			if(isset($gid)){
			//cek numeric apa nggak
				if(!is_numeric($gid)){
					$error=true;
					$errormsg=" Goods ID is not numeric value.".$gid."";
				} else {
					$cgID=mysqli_real_escape_string($con,$gid);
				//nyari nama category
					$result = mysqli_query($con,"SELECT * FROM inventori NATURAL JOIN kategori WHERE id_inventori = ".$cgID);
					$row = mysqli_fetch_array($result);
				}
			}
			?>
			<div class = "goodsimagedata"> 
				<div class = "goodsimage">
					<img width=475px src='../img/<?php echo $row['gambar'];?>'> <br/>
				</div>
				<div class = "data">
					<div id="dataname"><?php echo $row['nama_inventori'];?></div><br/>
					<div id="description"><?php echo $row['description'];?></div><br/>
					<form novalidate> Permintaan Khusus : <br/> 
						<textarea id="textinput" class="textinput" type="text" name="tambahan"></textarea>
					</form>
						<div id='numinput'>
						Quantity : 
						<input id="jumlah" value =0 type="number" name="quantity"></div> 
						<div id='cart'><img onclick="addToCart2(document.getElementById('jumlah').value, '<?php echo $_GET['gid']; ?>', document.getElementById('textinput').value)" src="../img/addtocart.png" /></div>
					<?php mysqli_close($con); ?>
				</div>
			</div>
		</div>
		<?php 
		if($_SESSION['state'] == 1){
			include ("../templates/footer.php");
		} else {
			include ("templates/footer.php");
		} 
		?>
	</div>
</div>
</body>
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