
<?php
 
 include 'conn.php';
   
 session_start();
   
 $user_id=$_SESSION['adminid'];
 $user_username=$_SESSION['adminusername'];
 $user_email=$_SESSION['adminemail'];

 $sel=$con->query("SELECT * FROM signup where username='$user_username'");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email'];
 }

  if ($user_username=='') {
  echo "<script>window.location.replace('signout.php')</script>";
  }

 ?>