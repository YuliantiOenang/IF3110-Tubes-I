<html>
<head>
<title>Hasil Pencarian</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script>
	function searchWord(){
		var find = document.search.find.value;
		var searching = document.search.searching.value;
		var field = document.search.field.value;
		document.getElementById("hasil_search").innerHTML="Tidak Ada Pencarian";
		if (find.length==0) { 
			  document.getElementById("hasil_search").innerHTML="Tidak Ada Pencarian";
			  return;
		}
		if (window.XMLHttpRequest) {
		  // code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		}
		else {
		  // code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("hasil_search").innerHTML=xmlhttp.responseText;
		  }
		  
		}
		
		xmlhttp.open("GET","functionsearch.php?find="+find+"&searching="+searching+"&field="+field,true);
		xmlhttp.send();
	}
</script>
<script>
	function searchWords1(pagenum){
	var find = document.search.find.value;
	var searching = document.search.searching.value;
	var field = document.search.field.value;
	var xmlhttp;
	document.getElementById("task1").innerHTML="";
	if (find.length==0) { 
		  document.getElementById("task1").innerHTML="";
		  return;
	}
	if (window.XMLHttpRequest) {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {
	  // code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("task1").innerHTML=xmlhttp.responseText;
	  }
	  
	}
	
	xmlhttp.open("GET","functionsearch.php?pagenum="+pagenum+"&find="+find+"&searching="+searching+"&field="+field,true);
	xmlhttp.send();
}
</script>
</head>

<body>
	<div id="container">
		<div id="tab_tengah"> 
			<div class = "menu" id = "search" action="search.php">
                <form name="search" method="post">
                        Search for: <input type="text" onkeyup= "searchWord();" name="find" value = "<?php
			if(isset($_POST['find'])){
			  $name = $_POST['find'];
			}
			else{
			  $name = '';
			}
		?>"/> in 
				<Select NAME="field" onchange= "searchWord();">
					<Option VALUE="nama"
					<?php
						if(isset($_POST['field']) && ($_POST['field']) == 'nama'){
						  echo 'selected';
						}
					?>
					>Nama Barang</option>
					<Option VALUE="kategori"
					<?php
						if(isset($_POST['field']) && ($_POST['field']) == 'kategori'){
						  echo 'selected';
						}
					?>
					>Kategori</option>
					<Option VALUE="harga"
					<?php
						if(isset($_POST['field']) && ($_POST['field']) == 'harga'){
						  echo 'selected';
						}
					?>
					>Harga</option>
				</Select>
				<input type="hidden" name="searching" value="yes" />
				</form>
             </div>
			<div id="hasil_search">
			</div>
		</div>
	</div>
</body>
</html>
