<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $sub = $_POST['sub'];
  $rating = $_POST['rating'];
  
  //DB Connection
  $conn = new mysqli('localhost','root','','miniproject');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into contactpage(firstname, lastname, email, country, sub, rating)
            values(?,?,?,?,?,?)");
      $stmt->bind_param("sssssi",$firstname, $lastname, $email, $country, $sub, $rating);
      $stmt->execute();
      $stmt->close();
      $conn->close();
  }    
 
header( "refresh:1; url=Index.html" );
echo 'Contact saved successfully. We will get back to you soon!';
?>