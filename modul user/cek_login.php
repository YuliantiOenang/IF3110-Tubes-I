<?php  

session_start();  

require_once("database.php");   //memanggil file database.php  

connect_db();       // memanggil fungsi connect_db yang ada di file database.php  

    $username =$_POST["username"];  
    $password =$_POST["password"];  
  
    $query="SELECT * FROM user where username='$username' and password='$password'";   
    $result=mysql_query($query);  
  
    if(mysql_num_rows($result)>0)  
    {  
        
        $_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$Expire = time() +60*60*24*30;
        setcookie('username', $username, $Expire);
		
		echo $username;
		
    }  
    else  
    {  
        echo '100';  
	
    }    
	
 
?> 