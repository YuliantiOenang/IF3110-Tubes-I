<?php 
    session_start();
?>

<!doctype html>
<html>
    <head>
        <title>Ruko Serba Ada</title> <!--judul di tab browser-->
        <link type="text/css" rel="stylesheet" href="style.css"/> <!--link ke css-->
    </head>
    
    <header onload="javascript:welcomeuser()">
        <a href="shoppingcart.php"> <img src = "shopping_cart.png"/> </a> <!--link shopping cart-->
        <a href="index.php"> <img src = "ruserba.png"/> </a> <!--logo, link ke home-->
        <img align="right" width = "200" src = "milo_animation.gif"/>
        <div align="right">
            <div id="welcome">
                <script>
                    if (typeof(Storage) !== "undefined") {
                        if(!localStorage.username) {
                                document.getElementById("welcome").innerHTML = "<button onclick='login()'>Login</button> &nbsp; Belum punya akun? &nbsp; <a href='Register.php'>Daftar</a>";
                        } else {
                                document.getElementById("welcome").innerHTML = "Welcome, <a href='profile.php'>"+localStorage.username+"</a>! <button onclick='logout()'>Logout</button>";
                        }
                    }
                </script>
            </div>

            <section id="search">
                <form action="search.php" method="get">
                    Cari barang: 
                    <input type="text" name="search"/>
                    <input type="submit" value="Search"/>
                </form>
            </section>
            <br>
        </div>
    </header>

    <body>
        <!-- Navigation -->
        <nav>
            <ul>
                <li> <a href="#">All Categories</a>
                    <?php
                        include('connect-mysql.php');
                        $sql = "SELECT DISTINCT category FROM product";
                        $result = mysql_query($sql,$connect);
                        if (!$result) {
                            die("Error : " . mysql_error());
                        }
                        echo '<ul>';
                        while($row = mysql_fetch_row($result)) {
                            foreach($row as $key=>$value) {
                                echo '<li> <a href=products.php?category="',$value,'">', $value, '</a> 
                                </li>';    
                            }
                        }
                        echo '</ul>';
                    ?>    
                </li>
            </ul>
        </nav>

        <!-- Introduction -->
        <section id="intro"> 
           
        </section>
    </body>

    <script language="javascript">
        function login() {
            var x;
            var person = prompt("Username : ");
            var password = prompt("Password : ");

            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    var temp = xmlhttp.responseText;
                    if (temp == "OK") {
                        // Kode kalau berhasil Login
                        if (typeof(Storage) !== "undefined") {
                            localStorage.username = person;   
                        }
                        location.reload(true);
                    } else {
                        alert("Login failed");
                    }
                }
            }
            xmlhttp.open("GET","login.php?value="+person+"&value2="+password,true);
            xmlhttp.send();
        }
        function logout() {
            if (typeof(Storage) !== "undefined") {
                localStorage.removeItem("username");
            }
            location.reload(true);
        }
    </script>

</html>