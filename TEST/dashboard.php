<?php
include '../conn.php';
include '../user_session.php';

?>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arial+Rounded MT Bold&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles017.css">

  <style>
    /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
              */
    body {
      background: #E5E5E5;
    }
  </style>

</head>

<body>
  <div class=container>
    <!-- <div class="main"></div><span class="notes">Notes</span>
    <div class="e93_485">
      <img src="images/Divider upper.svg" alt="">
    </div>
    <a href="/josh/create_new/create_new.php">
      <span class="compose">Compose</span></a>
    <div class=e93_489>
      <div class="compose_icon">
        <img src="images/Vector.svg" alt="">
      </div>
    </div> -->
    <!-- <div class="e93_495">
      <img src="images/Divider lowe.svg" alt="">
    </div> -->
    <div class="e93_496"></div><a href="#"><span class="e93_497">SideNotes</span></a><a href="../signout.php"><span class="logout">Log out</span></a>
    <!-- <div class=bookmark_icon>
      <img src="images/bookmark.svg" alt="">
      <!-- <div class="e93_506"></div> -->
    </div> -->
    <!-- <div class=e93_507>
      <div class="search_input">
        <input type="search" placeholder="Search">
      </div> -->
    </div>
    <div class=e93_513>
      <!-- <div class="search_button">
        <img src="images/search.svg" alt="">
      </div> -->
      <div class="e93_515"></div>
    </div>
    <!-- <div class="e93_516"></div> -->
    <div class="slogan"></div><span class="take_note_eff">TAKE NOTES EFFICIENTLY
      BE BOLD, WRITE YOUR IDEAS!</span>
    <div class="create_new_box">
      <a href="/josh/create_new/create_new.php">
        <input type="submit" value="Create a note">
      </a>
    </div>
    <!-- <div class="e93_519">

      <?php
      $con = mysqli_connect("localhost", "root", "", "sidenote");
      $sql = mysqli_query($con, "SELECT * FROM create_new");
      while ($fet = mysqli_fetch_assoc($sql)) { ?>

        <a href="" style="text-decoration:none;color:rgba(0, 0, 0, 1);
	width:119px;
	height:19px;

	left:0px;
	top:0px;
	font-family:Inter;
	text-align:left;
	font-size:16px;
	letter-spacing:0;
	font-weight: 700;
	text-decoration: none;
}"><?php echo $fet['title'] . '<br>'; ?></a>

      <?php } ?> -->

      <!-- <div class=e93_520><a href="/josh/create_new/sample_1.php"><span class="sample_1">Weekly playlist</span></a></div>
      <div class=e93_521><a href="/josh/create_new/sample_2.php"><span class="sample_2">Iminsi yose</span></a></div>
      <div class=e93_525><a href="/josh/create_new/sample_3.php"><span class="sample_3">Thursday plan</span></a></div><span
        class="e93_526">14/07/2022</span> -->
    </div>
    <!-- <span class="e93_530">Create a note</span> -->
    <div class="edit_new_box">
    <a href="/josh/create_new/index.php">
      <input type="submit" value="Edit a note">
    </div>
    <!-- <span class="e93_545">Edit a note</span> -->
  </div>
</body>

</html>