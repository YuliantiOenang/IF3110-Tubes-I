<?php
	include("header.php"); 
	include("connect-mysql.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
        <title>Search Result</title>
    </head>
    <body>
		<?php
			$search = $_GET['search'];
		
			if ($search == "") { 
				echo "<p>Insert a search string first.</p>"; 
				exit; 
			}
			
			$search = strtoupper($search);
			$search = strip_tags($search);
			$search = trim($search);
			
			$data = mysql_query("SELECT * FROM product WHERE UPPER(name) LIKE '%$search%'");
			
			if(mysql_num_rows($data) === 0) {
				$data = mysql_query("SELECT * FROM product WHERE UPPER(category) LIKE '%$search%'");
				if(mysql_num_rows($data) === 0) {
					$data = mysql_query("SELECT * FROM product WHERE price = '$search'");
					if(mysql_num_rows($data) === 0) {
						echo "<h2>Result not found : '$search'</h2>";
					} else {
						echo "<h2>Result:</h2>";
						echo "<ol>";
						while($row = mysql_fetch_array($data)) {
							echo '<li> <h3> <a href=detail_product.php?product_id='.$row['id'].'>';
							echo $row['name'];
							echo '</a> </h3> <br/>';
							echo "<img src='" .$row["picture"]. "'/> </li>";
						}
						echo "</ol>";
					}
				} else {
					echo "<h2>Result:</h2>";
					echo "<ol>";
					while($row = mysql_fetch_array($data)) {
						echo '<li> <h3> <a href=detail_product.php?product_id='.$row['id'].'>';
						echo $row['name'];
						echo '</a> </h3> <br/>';
						echo "<img src='" .$row["picture"]. "'/> </li>";
					}
					echo "</ol>";
				}
			} else {
				echo "<h2>Result:</h2>";
				echo "<ol>";
				while($row = mysql_fetch_array($data)) {
					echo '<li> <h3> <a href=detail_product.php?product_id='.$row['id'].'>';
					echo $row['name'];
					echo '</a> </h3> <br/>';
					echo "<img src='" .$row["picture"]. "'/> </li>";
				}
				echo "</ol>";
			}
		?>
    </body>
</html>
