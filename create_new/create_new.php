

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
    <div class="e88_270"></div><span class="e88_271">Compose</span>
    <div class=e88_287>
      <!-- <img src="/josh/TEST/images/Vector.svg" alt=""> -->
    </div>
    <div class="e88_272">
      <img src="/josh/TEST/images/Divider lowe.svg" alt="">
    </div>
    <div class="e79_253"></div><a href="/josh/TEST/dashboard.php"><span class="e79_254">SideNotes</span></a>
    <a href="/josh/index.php"><span class="logout">Log out</span></a>
    <div class=bookmark_icon>
      <img src="images/bookmark.svg" alt="">
      <!-- <div class="e93_506"></div> -->
    </div>
    <!-- <div class=e88_255>
      <div class="search_input">
        <input type="search" placeholder="Search"> 
      </div>
    </div>
    <div class=e88_261>
      <div class="search_button">
        <img src="/TEST/images/search.svg" alt="">
      </div> -->
      <!-- <div class="e88_262"></div>
      <div class="e88_263"></div> -->
    </div>
    <!-- <div class="Paragraphy"></div> -->
    <form action="/josh/create.php" method="POST">
    <div class="green_button">
      <input type="submit" value="Done" name="done_submit">
    </div>
    <!-- <span class="e93_588">Done</span> -->
    <!-- <span class="create_new_note_">Create new note...</span> -->
    <div class="typo">
      <div class="header">
        <textarea name="title" id="header" cols="30" rows="1" placeholder="Type the header..." style="font-family: inter";></textarea>
      </div>
      <textarea name="description" id="" cols="30" rows="10" placeholder="Type content..." style="font-family: inter";></textarea>
        
      
     
    </div>
    </form>
    <?php
            $con = mysqli_connect("localhost","root","","sidenote");
            $sql= mysqli_query($con,"SELECT * FROM create_new");
            while($fet=mysqli_fetch_assoc($sql)){?>
               
                 <a href="index.php?id=<?php echo $fet['id']; ?>" style="text-decoration:none;font-family:Inter; color:rgba(0, 0, 0, 1); font-weight:700;"><?php echo $fet['title'].'<br>'; ?></a>
            
          <?php } ?>
  </div>
</body>

</html>