<?php
include("includes/init.php");
$curr_pg = "home";
?>

<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body>
  <div class="home-top-div">
    <?php include("includes/navbar.php"); ?>
    <div class="home-center">

      <h1 class="home-h1">Cora Wu</h1><br>
      <h3 class="home-h3">senior at Cornell University</h3><br>

      <button class="home-button" onclick="window.open('media/resume.pdf','_blank')">Resumé</button>
      <button class="home-button" onclick="window.open('https://github.com/cjw322','_blank')">GitHub</button>
      <!-- <a href="coding/coding.html"> -->
      <button class="home-button" onclick="window.open('https://www.behance.net/corawu','_blank')">Bēhance</button>
      <button class="home-button" onclick="window.open('https://www.linkedin.com/in/cora-wu-774a7016b/','_blank')">LinkedIn</button>

    </div>
    <p id="artwork-msg">original artwork by me</p>
  </div>

  <div class="home-middle-div">

    <img src="media/photos/me.jpg" alt="Cora's photo" class="about-pic-1">
    <!-- Source: https://pixabay.com/photos/palm-trees-upward-tropical-blue-sky-1209185/ -->
    <a href="https://pixabay.com/photos/palm-trees-upward-tropical-blue-sky-1209185/" class="src-link" id="palm-src">img src</a>
    <img src="media/photos/palm-trees.jpg" alt="palm-trees" class="about-pic-2">

    <div class="about-box" id="abt-box">
      <h3 class="about-box-title">Hello! I'm Cora.</h3>
      <p class="about-txt">I'm currently a senior at Cornell University studying
        Computing and Information Sciences. My background is in software and data
        engineering, but I also enjoy design and art as well. <br> <br>
        Take a look around this site to see some of my work!
      </p>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>
</body>

</html>