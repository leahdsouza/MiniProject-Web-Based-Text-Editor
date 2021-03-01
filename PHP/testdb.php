<?php
  $feedback = $_POST['feedback'];
  $rating = $_POST['rating'];
  
  //DB Connection
  $conn = new mysqli('localhost','root','','miniproject');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into feedback(feedback, rating)
            values(?,?)");
      $stmt->bind_param("si",$feedback,$rating);
      $stmt->execute();
      $stmt->close();
      $conn->close();
  }    
 
header( "refresh:1; url=Index.html" );
echo 'Thank you for the feedback!';
?>