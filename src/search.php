<?php

$pageTitle = "Search Result";
$section = "search";




include('header.php'); ?>

<div class="section page">
			<div class="wrapper">
				
				<hr />
				<u>Results:</u>&nbsp

				<?php

				if(isset($_GET['keyword'])) {

					$search = $_GET['keyword'];
					$terms = explode(" ", $search);
					$query = "SELECT * FROM produk WHERE ";
					
					$i=0;
					foreach($terms as $each){		
						$i++;
						if($i==1){
							$query .= "concat_ws('',nama) LIKE '%$each%' ";
						}else{
							$query .= "OR concat_ws('',nama) LIKE '%$each%' ";
						}
					}
					
					mysql_connect("localhost", "root", "");
					mysql_select_db("ruserba");
					
					$query = mysql_query($query);
					$num = mysql_num_rows($query);
					
					if($num > 0 && $search!=""){
					
						echo "$num result(s) found for <b>$search</b>!";
						echo "<ul>";
						while($row = mysql_fetch_assoc($query)){
						
							$id = $row['id'];
							$name = $row['nama'];
							$keterangan = $row['keterangan'];
							
							$output = "";				
							$output = $output . "<li> Produk : ";
				            $output = $output . '<a href="product.php?id=' . $id . '">';
				            $output = $output . $name;
				            $output = $output . "</a>";
				            $output = $output . "</li>";
				            echo $output;
						
						}
						echo "</ul>";
					
					} else {
					
						echo "No results found!";
					
					}

					mysql_close();

				} else {

					echo "Please type any word...";

				}

				

				?>
			</div>
		</div>

<?php
include('footer.php');
?>