
<?php 
include_once('Connection.php'); 
$query="select * from contactpage"; 
$query1="select * from feedback";
$result=mysqli_query($con, $query); 
$result1=mysqli_query($con, $query1);
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title>
        <style>
body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

body{
  /* The image used */

background-image: url("candyy.png");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>        
	</head> 
	<body> 
    <div>
	<table align="center" border="1px" style="width:600px; line-height:40px; background-color:white;"> 
	<tr> 
		<th colspan="7"><h2>Database Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> First Name </th> 
              <th> Last Name </th> 
			  <th> Email </th> 
			  <th> Country </th> 
              <th> Query </th> 
              <th> Rating </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['firstname']; ?></td> 
        <td><?php echo $rows['lastname']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['country']; ?></td> 
        <td><?php echo $rows['sub']; ?></td> 
        <td><?php echo $rows['rating']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
    
    <table align="center" border="1px" style="width:600px; line-height:40px; background-color:white;"> 
	<tr> 
		<th colspan="7"><h2>Feedback Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Feedback </th> 
              <th> Rating </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result1)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['feedback']; ?></td> 
        <td><?php echo $rows['rating']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
    </div>
    <div class = "a">
<p style="text-align:center">
<a href="#facebook"><i class="fa fa-facebook"></i></a>
<a href="#instagram"><i class="fa fa-instagram"></i></a>
<a href="#linkedin"><i class="fa fa-linkedin"></i></a>
<a href="#twitter"><i class="fa fa-twitter"></i></a><br>
 <i class="fa fa-copyright"></i> 2020 Copyright: Text Editor</p>
 <p style ="text-align: center">
 <a class="active" href="Index.html">Home </a>
 &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="Editor.html">Editor </a><br>
  <a href="#news">Features </i></a>
  &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="http://localhost/miniproject/Contact.html">Contact </a><br>
  <a href="#about">About </a>
  &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="#help">Help  </a></p>
</div>

 
 
 
    <footer>
   <p> <img src = "android-chrome-512x512.png"  style="width:200px;height:100px;">
</footer>


	</body> 
	</html>