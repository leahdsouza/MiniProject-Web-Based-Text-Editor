<?php      
    $host = "localhost";  
    $username = "root";  
    $password = '';  
    $db_name = "miniproject";  
      
    $con = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  