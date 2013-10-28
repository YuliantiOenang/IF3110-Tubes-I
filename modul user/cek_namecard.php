<?php  

session_start();  

require_once("database.php");   //memanggil file database.php  

connect_db();       // memanggil fungsi connect_db yang ada di file database.php  

	$cardnumber=$_POST["cardnumber"];
    $namecard =$_POST["namecard"];
	//document.write("AJEENG");
	
    $query="SELECT * FROM creditcard WHERE number=$cardnumber AND name='$namecard'";   
    $result=mysql_query($query) or die("EROR");  
  
    if(mysql_num_rows($result)>0)  
    {  
		echo true;
    }  
    else  
    {  
        echo false;  
    }    
	
 
?> 