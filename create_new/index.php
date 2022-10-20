<?php
$con = mysqli_connect("localhost", "root", "", "sidenote");
if (isset($_POST['done_submit'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $sql = "UPDATE `create_new` SET `title` = '$title ', `description`= '$description' WHERE `create_new`.`id` = $id;";
  if (mysqli_query($con, $sql)) {
    // echo "<script> alert('Done')</script>";
  } else {
    echo "failed to update";
  }
}

?>


<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Create new note</title>
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arial+Rounded MT Bold&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">

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
  <div class=e79_247>
    <div class="e79_248"></div>
    <div class="e88_264"></div><span class="notes">Notes</span>
    <div class="e88_266">
      <img src="/josh/TEST/images/Divider upper.svg" alt="">
    </div>
    <div class="e88_268"></div>
    <!-- <div class="e88_270"></div><span class="e88_271">Compose</span> -->
    <div class=e88_287>
      <!-- <img src="/josh/TEST/images/Vector.svg" alt=""> -->
    </div>
    <div class="e88_272">
      <!-- <img src="/josh/TEST/images/Divider lowe.svg" alt=""> -->
    </div>
    <div class="e79_253"></div><a href="/josh/TEST/dashboard.php"><span class="e79_254">SideNotes</span></a>
    <a href="/josh/index.php"><span class="logout">Log out</span></a>
    <div class=bookmark_icon>
      <img src="images/bookmark.svg" alt="">
      <!-- <div class="e93_506"></div> -->
    </div>
    <!-- <div class=e88_255> -->
      <div class="search_input">
        <!-- <input type="search" placeholder="Search"> -->
      </div>
    </div>
    <div class=e88_261>
      <div class="search_button">
        <!-- <img src="/TEST/images/search.svg" alt=""> -->
      </div>
      <!-- <div class="e88_262"></div>
      <div class="e88_263"></div> -->
    </div>
    <!-- <div class="Paragraphy"></div> -->
    <form action="" method="POST">
      <div class="green_button">
        <input type="submit" value="Done" name="done_submit">
      </div>
      <div class="">
        <input type="submit" value="UPDATE" name="update">
      </div>
      <!-- <span class="e93_588">Done</span> -->
      <!-- <span class="create_new_note_">Create new note...</span> -->

      <?php
      if ($_GET) {
        $id = $_GET['id'];
        $con = mysqli_connect("localhost", "root", "", "sidenote");
        $sql = mysqli_query($con, "SELECT * FROM create_new where id='$id' ");
        while ($fet = mysqli_fetch_assoc($sql)) { ?>

          <div class="typo">
            <div class="header">
              <textarea id="header" name="title" style="font-family: inter";><?php echo $fet['title']; ?></textarea>
            </div>
            <textarea id="" name="description" style="font-family: inter";><?php echo $fet['description']; ?></textarea>
            <textarea id="" name="id" style="display:none"><?php echo $fet['id']; ?></textarea>




          </div>
    </form>
<?php  }
      } ?>

<div class=e90_401 style="background-color: #ececec;padding:15px; border-radius:5px; height:fit-content;width:max-content;">
  <?php
  $con = mysqli_connect("localhost", "root", "", "sidenote");
  $sql = mysqli_query($con, "SELECT * FROM create_new");
  while ($fet = mysqli_fetch_assoc($sql)) { ?>

    <a href="index.php?id=<?php echo $fet['id']; ?>" style="text-decoration:none;font-family:Inter; color:rgba(0, 0, 0, 1); font-weight:700;"><?php echo $fet['title'] . '<br>'; ?></a>

  <?php } ?>

  <!-- <div class=e90_378><a href="/josh/create_new/sample_1.php"><span class="sample_1">Weekly playlist</span></a></div>
      <div class=e90_379><a href="/josh/create_new/sample_2.php"><span class="sample_2">Iminsi yose</span></a></div>
     <div class=e90_383><a href="/josh/create_new/sample_3.php"><span class="sample_3">Thursday plan</span></a></div><span
        class="e90_384">14/07/2022</span>
    </div> -->
</div>
</body>

</html>