<?php
$username = $_GET['username'];

// Create connection
$con=mysqli_connect("localhost","root","","ruserba");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	$result = mysqli_query($con,"SELECT * FROM user_table");
	$flag = "0";	
	
	echo $username;
	while ($row = mysqli_fetch_array($result))
	{
		echo $row['username'];
		if ($row['username'] == $username)
			$flag = "1";
	}	
	
	echo $flag;	
	mysqli_close($con);
}

?>