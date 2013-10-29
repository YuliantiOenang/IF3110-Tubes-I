<?php
    include("header.php");
?>

<!doctype html>
<html>
    <body>
        <div id="content">
            <!-- Main content area -->
            <div id="mainContent">  
                
                <section>  
                    <!-- Blog post --> 
                    <article class="blogPost">
                        <header> 
                            <h2> Most Bought Items </h2>
                        </header>
                        <?php
                            include('connect-mysql.php');
                            $sql = "SELECT DISTINCT category FROM product";
                            $result = mysql_query($sql,$connect);
                            if (!$result) {
                                die("Error : " . mysql_error());
                            }
                            echo '<ul>';
                            while($row = mysql_fetch_array($result)) {
                                //foreach($row as $key=>$value) {
                                    echo '<li> <h3> <a href=products.php?category="',$row['category'],'">', $row['category'], '</a> </h3> </li>';
                                    $sql = "SELECT id, name, picture FROM product WHERE category = '" .$row['category']. "' ORDER BY sold DESC";
                                    $result2 = mysql_query($sql,$connect);
                                    if (!$result2) {
                                        die("Error : " . mysql_error());
                                    }
                                    echo '<ul>';
                                    $i = 1;
                                    while($row2 = mysql_fetch_array($result2)) {
                                            if($i<=3) {
                                                echo '<li> <a href=detail_product.php?product_id=',$row2['id'],'>',$row2['name'],'</a> </li>';
                                                echo '<img src="'.$row2['picture'].'"> </li>';   
                                            }
                                            $i++;
                                    }
                                    echo '</ul>';
                                //}
                            }
                        echo '</ul>';
                        ?>
                    </article>
                </section>
            </div>  
        
            <!-- Sidebar -->
            <aside>

            </aside>
        </div>

        <!-- Footer -->
        <footer>
            <div>
                <section id="about">
                    <p> Kelompok TripleA : Arief Rahman 13511020 Azalea Fisitania 13511028 Akbar Syam 13511048 </p>
                </section>
            </div>
        </footer> 
    </body>  
</html>  