<?php  

session_start();  

require_once("database.php");   //memanggil file database.php  

connect_db();       // memanggil fungsi connect_db yang ada di file database.php  

    $username =$_POST["username"];
	
    $query="SELECT * FROM user where username='$username'";   
    $result=mysql_query($query);  
  
    if(mysql_num_rows($result)>0)  
    {  
		echo false;
    }  
    else  
    {  
        echo true;  
    }    
	
 
?> 