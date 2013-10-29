

<!DOCTYPE html>
<html>
<?php

include 'db.php';
include 'macro/header.php';

?>

<body>
	<?php	
		if (isset($_SESSION['user_id'])) {
			if ($result = mysqli_query($link, "SELECT * FROM user WHERE id='".$_SESSION['user_id']."'")) {
				$row = mysqli_fetch_array($result);
				echo "<form method=\"post\" action=\"edit.php\" onsubmit=\"return validatePassword(password.value, password2.value, '".$row['username']."', '".$row['email']."', 'valpasswords')\" name=\"regform\">";
				echo "<input id=\"password\" name=\"password\" placeholder=\"password\" type=\"password\" onkeypress=\"if(this.value != '') validatePassword(this.value, password2.value, '".$row['username']."', '".$row['email']."', 'valpasswords');\" /><div id=\"valpassword\"></div><br />";
				echo "<input id=\"password2\" name=\"password2\" placeholder=\"password lagi\" type=\"password\" onkeypress=\"if(this.value != '') validatePassword(password.value, this.value, '".$row['username']."', '".$row['email']."', 'valpasswords');\" /><div id=\"valpasswords\"></div><br />";
			}			
		} else {
			header("Location: register.php");
		}
		?>
		<input type="submit" /><br />
	</form>
</body>

</html>

