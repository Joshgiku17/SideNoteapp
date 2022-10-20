<?php

include 'connection.php';

if (isset($_POST['login'])) {
   
    session_start();

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($conn,$email);
	$password=mysqli_real_escape_string($conn,$password);
    
	if (empty($email) || empty($password)) {
		header("location:index.php?empty=Email and Password are requied");
	}
	else {
		$select=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password' ") or die(mysqli_error($conn)) ;
		
        if (mysqli_num_rows($select)>0) {

	        session_regenerate_id();
	        $verfied=mysqli_fetch_assoc($select); 

	        $_SESSION['adminid']=$verfied['userid'] ;
	        $_SESSION['adminusername']=$verfied['username'] ;
	        $_SESSION['adminemail']=$verfied['email'] ;
	        $_SESSION['adminphone']=$verfied['phone'] ;
	        $_SESSION['adminpassword']=$verfied['password'] ;
	        session_write_close();
                header("location:welcome.php");
		}
		else {
            $errormessage .='You do not have account';			
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>twitter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.9.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->

    <div id="hero" data-aos="fade-up">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <img src="assets/img/background.png" style="height: 100vh; width:100%;" class="" alt="">
        </div>
        <div class="col-xl-6 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <br><br><h2><a href="index.php"><i style="color: white;" class="bx bxl-twitter"></i></a></h2><br><br>
          <h1>Sign In</h1>
          <br>
          <div class="container">
          <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                <?php
                    if ( isset($errormessage)) {
                        echo '

                    <div class="alert alert-danger" role="alert">'.$errormessage.'
                    </div>
                        ';
                    }
                ?>
                </div>
                <div class="col-md-12">
                  <input type="text" name="email" style="
                            font-weight: 500;
                            font-size: 16px;
                            cursor: pointer;
                            display: inline-block;
                            padding: 5px 28px;
                            border-radius: 80px;
                            width: 350px;
                            transition: 0.5s;
                            margin-top: 30px;
                            background-color: black;
                            color: rgb(255, 255, 255);
                            border: 2px solid white;
                    " id="name" placeholder="Email" required>
                </div>
                <div class="col-md-12">
                  <input type="password" name="password" style="
                            font-weight: 500;
                            font-size: 16px;
                            cursor: pointer;
                            display: inline-block;
                            padding: 5px 28px;
                            border-radius: 80px;
                            width: 350px;
                            transition: 0.5s;
                            margin-top: 30px;
                            background-color: black;
                            color: rgb(255, 255, 255);
                            border: 2px solid white;
                    " id="name" placeholder="Password" required>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="Log In" name="login" va class="btn-get-started2 scrollto" placeholder="Phone number" required>
                </div>
              </div>
            </form>
          </div>
          <br>
          <p>I don't Have an account <a href="signup.php" style="color: white;">Sign up</a> </p>
         
        </div>
      </div>
    </div>

  

  <main id="main">
    
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>