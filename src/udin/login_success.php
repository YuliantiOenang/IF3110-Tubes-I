// Check if session is not registered, redirect back to main page. 
<br>
// Put this code in first line of web page. 
<br>
<?php
	session_start();
	if(!isset($_SESSION['myusername'])){
		echo "<html> 
				<body>
					Login Successful
				</body>
			  </html>";
	//header("location:index.php");
	}
?>

