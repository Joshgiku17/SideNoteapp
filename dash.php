<?php
$user_name=$_POST['uname'];
$password = $_POST['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Username: <?php echo $user_name ?></h1>
    <h1>Password: <?php echo $password ?></h1>
</body>
</html>