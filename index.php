<?php

include 'conn.php';

if (isset($_POST['login_submit'])) {
   
    session_start();

	$email=$_POST['uname'];
	$password=$_POST['password'];
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);
    
    $select=mysqli_query($con,"SELECT * FROM signup WHERE username='$email' AND pass_word='$password' ") or die(mysqli_error($con)) ;
    
    if (mysqli_num_rows($select)>0) {

        session_regenerate_id();
        $verfied=mysqli_fetch_assoc($select); 

        $_SESSION['adminid']=$verfied['user_id'] ;
        $_SESSION['adminemail']=$verfied['email'] ;
        $_SESSION['adminusername']=$verfied['username'] ;
        session_write_close();
        header("location:test/dashboard.php");
    }
    else {
        echo mysqli_error($con);			
    }
}


if(isset($_POST['signsubmit'])){
    $email=$_POST['signemail'];
    $username=$_POST['signname'];
    $password=$_POST['signpass'];
    $sql="INSERT INTO signup(email,username,pass_word) VALUES('$email','$username','$password')";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Registered successfully');
    </script>";
    }
    else{
        echo 'failed to register'. mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <!-- <link href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css?family=Arial+Rounded+MT+Bold&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="og.css">

</head>

<body>
    <div class="container">
        <div class="menu">
            <a href><span class="logo">SideNotes</span></a>
            <a href="#log"><span class="login_link_menu">Log in</span></a>
        </div>
        <div class="right-photo">
            <img class="round" src="og.png">
        </div>
        <span class="slogan">TAKE NOTES EFFICIENTLY
            BE BOLD, WRITE YOUR IDEAS!</span>

        <div class="cta_btn"><a href="#log">
                <input type="submit" value></a>
        </div><a href="#log"><span class="cta_btn-txt">Try SideNotes</span></a>
        <div class="name"></div><a href="#sign_in"><span class="pointer-to-signup">Don’t have an account ? Sign up</span> </a>


        <div id="log" class="login-page">
            <div class="login_pagy"></div>
            <!-- <div class="name"></div>
            <div class="name"></div> -->

            <div class="form-group">
                <div class="left-picture">
                    <img src="two.png" class="left-pi">
                </div>
            </div>
            <h1 class="slogan-2">TAKE NOTES EFFICIENTLY<br />
                BE BOLD, <span>WRITE YOUR IDEAS!</span></h1>
            <div class="form-group-rightwise">
                <form action="" method="POST">
                    <div class="cta_login_dont_have_an_account"><a href="#sign_in"><span class="dont_have_an_account">Don’t have an
                                account ? Sign up</span></a>
                        <div class="green_login">
                            <input type="submit" name="login_submit" value="Login">
                        </div>
                        <!--<span class="login_text">Login</span> -->
                    </div>
                    <div class="unput-uname">
                        <input type="text"  name="uname" required style="font-family: inter"; >
                        <img src="user@2x.svg" class="user--svg"><span class="Username_label">Username</span><span class="Password_label">Password</span>
                    </div>
                    <div class="password_input">
                        <input type="password" name="password" required>
                    </div>
                    <div class="key_svg">
                        <img src="key@2x.svg" alt>
                </form>
            </div>
            <!-- <img src="user@2x.svg" alt class="usersvg"> -->


        </div>
    </div>

    </div>
    <div id="sign_in" class="Signup_pagy">


        <div class="left-picture2">
            <img src="two.png" alt class="left-pi22">
        </div>
        <h1 class="slogan-22">TAKE NOTES EFFICIENTLY<br />
            BE BOLD, <span>WRITE YOUR IDEAS!</span></h1>



        <!-- SIGNUP IHERA HANO WA KINTU WEEE         -->
        <div class="signup_form">
            <!-- <form action="test/dashboard.php" method="POST"> -->
            <form action="" method="POST">
                <div class="signup_cta-group"><a href="#log"><span class="Already_have_an">Already have an account ? Login
                            up</span></a>
                    <div class="Sign_up_green_btn">
                        <input type="submit" value="Sign up" name="signsubmit">
                    </div>
                    <!-- <a href="#log"> -->
                    <!-- <span class="Sign_up_green_txt">Sign up</span></a> -->
                </div>
                <div class="signup_cta_group-rightwise">
                <div class="email_input">
                        <input type="email" name="signemail" required style="font-family: inter";>
                    </div>
                    <div class="at_svg">
                        <img src="at-sign@2x.svg">
                        <!-- <div class="v141_376"></div>
                        <div class="v141_377"></div> -->
                    </div><span class="Email_labele">Email</span>
                    <input type="password" name="signpass" required>
                </div><span class="pass_label_sign_up">Password</span>
                <div class="v141_366">
                    <div class="svg_passss">
                        <div class="v141_368">
                            <img src="key@2x.svg">
                        </div>
                    </div>
                    <div class="username_input">
                        <input type="text" name="signname" required style="font-family: inter";>
                    </div>
                    <div class="user_svg">
                        <img src="user@2x.svg">
                        <!-- <div class="v141_371"></div>
                        <div class="v141_372"></div> -->
                    </div><span class="user_label">Username</span>
                    
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html> <br /><br />