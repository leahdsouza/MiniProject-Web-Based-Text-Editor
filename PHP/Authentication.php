<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 3){  
            echo "<h1><center> Login successful </center></h1>";  
            header( "refresh:1; url=Index.php" );
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            header( "refresh:1; url=Index.html" );
        }     
        
?>  
