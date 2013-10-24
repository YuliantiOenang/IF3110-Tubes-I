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
<script src="script.js"></script>
<script>
	function send(data){
		sendAjax({"action":"add", "id_barang":0, "jumlah":1}, "transaksi.php", callback_send);
	}

	function callback_send(response){
		alert(JSON.stringify(response));
	}
</script>
</head>

<body>
<input type="button" onclick="send('a')" value="button"/>
</body>
</html>
