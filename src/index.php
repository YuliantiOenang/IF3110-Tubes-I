<?php

	if (isset($_POST["ajax"])){
		header("Content-type: text/plain");
		
		$json = array("status" => "a");
		
		exit(json_encode($json));
	}
	
?>

<!DOCTYPE html />
<html>
<head>
<script src="js/ajax.js"></script>
<script>
	function send(data){
		sendAjax({"action":"add", "id_barang":0, "jumlah":1}, "transaksi.php", callback_send);
	}

	function callback_send(response){
		alert(JSON.stringify(response));
	}
	
	function test(){
		if (localStorage.getItem("test") === null){
			localStorage.test = 0;
			document.write(0);
		}else if(localStorage.test < 5){
			localStorage.test++;
			document.write(localStorage.test);
		}else{
			localStorage.removeItem("test");
			document.write("resetted");
		}
	}
</script>
</head>

<body onload="test()">
</body>
</html>
