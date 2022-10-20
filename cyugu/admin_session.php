
<?php
 
 include 'connection.php';
   
 session_start();
   
 $user_id=$_SESSION['adminid'];
 $user_username=$_SESSION['adminusername'];
 $user_email=$_SESSION['adminemail'];
 $user_phone=$_SESSION['adminphone'];
 $user_password=$_SESSION['adminpassword'];

 $sel=$conn->query("SELECT * FROM users where email='$user_email'");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email'];
 }

  if ($user_email=='') {
  echo "<script>window.location.replace('signout.php')</script>";
  }

 ?>