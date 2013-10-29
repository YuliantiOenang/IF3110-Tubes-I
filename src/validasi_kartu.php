<?php
$number = $_GET['number'];
$name = $_GET['name'];

// Create connection
$con=mysqli_connect("localhost","root","","ruserba");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	$result = mysqli_query($con,"SELECT * FROM credit_table");
	$flag = "0";	
	while ($row = mysqli_fetch_array($result))
	{
		if (($row['number'] == $number) && ($row['name'] == $name))
		{
			$flag = "1";
		}
	}	
	echo $flag;
}

mysqli_close($con);

 
?>