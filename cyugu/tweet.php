<?php
include 'connection.php'; 
include 'admin_session.php'; 

if (isset($_POST['tweet'])){
       
    $target="images/".basename($_FILES['image']['name']);

    $image=$_FILES['image']['name'];
    $caption=$_POST['caption'];

        $sql=mysqli_query($conn,"INSERT INTO tweets(caption,image,userid,likes) VALUES ('$caption','$image','$user_id',0)");
        if ($sql) {
            move_uploaded_file($_FILES['image']['tmp_name'],$target);
            header("location:welcome.php");
        }
        else {
            $errormessage .='Tweets failed!';	    
        }  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Twitter - tweets</title>
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
  <link  href="tailwindcss.css" rel="stylesheet" >

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
      <div class="row" style="background-color: black;">
        <div class="col-xl-3 col-lg-3">
            <ul class="nav flex-column" style="padding-left: 50px; padding-top: 20px;">
                <li class="nav-item">
                   <h2><a href="welcome.php"><i style="color: white;" class="bx bxl-twitter"></i></a></h2>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Home</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Explore</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Notification</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Messages</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Bookmarks</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">List</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">Profile</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><h3 style="font-size: 22px; color:white;">More</h3><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                   <a href="tweet.php" class="btn-get-started2 scrollto" style="width: 200px;"><h3 style="font-size: 22px; color:white;">Tweet</h3></a>
                </li>
                <br><br><br><br><br><br>
                <li class="nav-item">
                   <a href="signout.php" class="btn-get-started1 scrollto" style="width: 200px;"><h3 style="font-size: 22px; color:white;"><?php echo $user_username; ?></h3></a>
                </li>
            </ul>
        </div>
        <div class="col-xl-5 col-lg-5">
            <br><br>
            <div class="class row">
                <div class="class col-xl-2 col-lg-2">

                 <img src="assets/img/hero-img.png" style="height: 50px; width: 50px; border-radius: 360px; float: right;"  alt="">
                </div>
                <div class="class col-xl-7 col-lg-7">
                
                <span style="font-size: 21px; font-weight: 15px; color: white;">To</span>  @<span>Everyone</span>
                <br>
                <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
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
                    <textarea name="caption" placeholder="What's Happen?" style="
                            font-weight: 500;
                            font-size: 16px;
                            cursor: pointer;
                            display: inline-block;
                            padding: 5px 28px;
                            width: 350px;
                            transition: 0.5s;
                            margin-top: 30px;
                            background-color: black;
                            color: rgb(255, 255, 255);
                            border: 2px solid black;
                    "
                     id="" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12">
                  <input type="file" name="image" style="
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
                            border: 2px solid black;
                    " id="name"  required>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="Tweet" name="tweet" va class="btn-get-started2 scrollto" style="width: 200px;"  required>
                </div>
              </div>
            </form>
                </div>
                <div class="class col-xl-3 col-lg-3">
                    <span style="font-size: 20px; color: white;">...</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
                <div class="col-md-12">
                  <input type="text" name="phone" style="
                            font-weight: 500;
                            font-size: 16px;
                            cursor: pointer;
                            display: inline-block;
                            padding: 5px 28px;
                            border-radius: 80px;
                            width: 350px;
                            transition: 0.5s;
                            margin-top: 30px;
                            background-color: gray;
                            color: rgb(255, 255, 255);
                            border: 2px solid gray;
                    " id="name" placeholder="Search tweet" required>
                </div>
                <div class="col-md-12 bg-gray">
                    <br><br><br>
          <img src="assets/img/hero-img.png" style="height: 50%; width:50%;" class="animated" alt="">
                </div>
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