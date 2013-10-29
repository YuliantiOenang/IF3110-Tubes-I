<?php
/* These are our valid username and passwords */
$dbhost  = 'localhost';
$dbname  = 'progin';
$dbuser  = 'root';
$dbpass  = ''; 

$con = mysql_connect($dbhost, $dbuser, $dbpass);

if($con == FALSE)
{
    echo 'Cannot connect to database' . mysql_error();
}
else
{
    echo 'Connected to database <br>';
}

mysql_select_db($dbname, $con);

$result = mysql_query("SELECT Username,Password FROM user;",$con);

if($result === FALSE) {
die(mysql_error()); // TODO: better error handling
}

$valid = false;

while(($row = mysql_fetch_array($result)) && ($valid == false))
{
	if (($_POST['username'] == $row['Username']) && ($_POST['password'] == $row['Password'])) {
		$valid = true;
		break;	
	}
}


if (($_POST['username'] == "") || ($_POST['password'] == "")) {
	$valid = false;
}


mysql_close($con);

if (isset($_POST['username']) && isset($_POST['password'])) {
    
	if ($valid == true) {    
     
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/');
			echo  "<script type='text/javascript'>";
			echo "parent.window.opener.location='HomeB.php';";
			echo "window.close();";
			echo "</script>";
        
    } else {
        echo 'Username/Password Invalid <br>';
		echo '<a href=login.php>Back</a>';	
    }
    
} else {
    echo 'You must supply a username and password.';
}
?>