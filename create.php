<?php
$con = mysqli_connect("localhost","root","");
if (!$con) {
  echo 'Not Connected';
}
mysqli_select_db($con,'sidenote');

if(isset($_POST['done_submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sql="INSERT INTO create_new(title,description) VALUES('$title','$description')";
    if(mysqli_query($con,$sql)){
        
        header('location:/josh/create_new/index.php');

    }
    else{
        echo "failed to register";
    }
}
    
?>
