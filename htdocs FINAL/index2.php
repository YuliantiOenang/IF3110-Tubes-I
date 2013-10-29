<?php

require_once('tokohijau.php');
session_start();

// Open connection

$db=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");


$loginmessage = NULL;
$is_loginattempt = $_SERVER["REQUEST_METHOD"] == "POST";
$is_signedin = isset($_SESSION["username"]);

function login_userpass() {
	global $db;
	
	// Query to database
	$clean_username = stripslashes(htmlspecialchars(trim($_POST["username"])));
	$clean_password = stripslashes(htmlspecialchars(trim($_POST["password"])));
	$username_query = mysqli_real_escape_string($db, $clean_username);
	$password_query = md5(mysqli_real_escape_string($db, $clean_password));
	$sqlquery = "SELECT * FROM authentication WHERE username='".$username_query."' AND password='".$password_query."'";
	$sqlresult = mysqli_query($db, $sqlquery);
	
	// Return TRUE if matched exactly 1 username-password
	if (mysqli_num_rows($sqlresult) == 1) {
		$_SESSION["username"] = mysqli_fetch_array($sqlresult)["username"];
		return TRUE;
	} else {
		return FALSE;
	}
}

function login_cookie() {
	global $db;
	
	if (!isset($_COOKIE["username"]) || !isset($_COOKIE["cookie_id"])) {
		return FALSE;
	}
	
	$cookie_id = $_COOKIE["cookie_id"];
	$sqlquery = "SELECT * FROM authentication WHERE cookie_id='".$cookie_id."'";
	$sqlresult = mysqli_query($db, $sqlquery);
	
	// Return TRUE if matched exactly 1 user-id + cookie has not expired yet
	$userentry = mysqli_fetch_array($sqlresult);
	if ((mysqli_num_rows($sqlresult) == 1) && (time() < $userentry["cookie_expire"])) {
		$_SESSION["username"] = $userentry["username"];
		return TRUE;
	} else {
		return FALSE;
	}
}

function update_cookie($username) {
	global $db;
	
	$cookie_id = uniqid(md5($username), TRUE);
	$cookie_expire = time() + (60*60*24*30);
	setcookie("cookie_id", $cookie_id, $cookie_expire);
	$sqlquery = "UPDATE authentication SET cookie_id='".$cookie_id."' , cookie_expire='".$cookie_expire."' WHERE username='".$username."'";
	$sqlresult = mysqli_query($db, $sqlquery);
}

if (!$is_signedin) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Try to login with username and password from POST
		// Failure means wrong username-password
		$is_signedin = login_userpass();
		if (!$is_signedin) {
			$loginmessage = "Could not login with username and password. Please try again.";
		}
	} else {
		// Try to login with cookies
		// Failure means no attempted login
		$is_signedin = login_cookie();
	}
}

if ($is_signedin) {
	update_cookie($_SESSION["username"]);
}

// Close connection
mysqli_close($db);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Tokohijau</title>
<script language="javascript">

function hideLoginForm() {
	document.getElementById("page-wrapper").style.display = "none";
}

function showLoginForm() {
	document.getElementById("page-wrapper").style.display = "block";
}

var searchName = document.forms["search"]["name"];
var searchCategory = document.forms["search"]["category"];

function validateSearch() {
}

</script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php require("header.php"); ?>
<!--
<?php if ($loginmessage != NULL) : ?>
	<div id="loginmessage">
		<?php echo $loginmessage; ?>
	</div>
<?php endif; ?>
<?php if (!$is_signedin) : ?>
	<div id="loginform" style="<?php if (!$is_loginattempt) echo "display:none;"; ?>">
		<form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			Username: <input type="text" name="username"/><br/>
			Password: <input type="password" name="password"/><br/>
			<input type="submit" value="Login"/>
		</form>
		<a href="#" onclick="hideLoginForm()">Close</a>
	</div>
<?php endif; ?>
<div id="logincontrol">
	<?php if ($is_signedin) : ?>
		<div id="control-login">
			Welcome &nbsp;, &nbsp; <a href="#"><span id="username"><?php echo $_SESSION["username"]; ?></span></a><br/>
			<a href="logout.php">Sign Out</a>
			<a href="#">Shopping Bag</a>
		</div>
	<?php else : ?>
		<div id="control-nologin">
			<a href="#" onclick="showLoginForm()">Sign In</a><br/>
			<a href="#">Sign Up</a>
		</div>
	<?php endif ?>
</div>
<div id="categories">
	<ul>
		<?php
			foreach ($categories as $key => $name) {
				echo "<li>".$name."</li>\n";
			}
		?>
	</ul>
</div>
-->
<?php require("footer.php"); ?>
</body>
</html>