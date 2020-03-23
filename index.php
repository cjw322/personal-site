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
      <h3 class="home-h3">sophomore at Cornell University</h3><br>

      <button class="home-button" onclick="window.location.href='media/resume.pdf'">Resumé</button>
      <button class="home-button" onclick="window.location.href='https://github.com/cjw322'">GitHub</button>
      <!-- <a href="coding/coding.html"> -->
      <button class="home-button" onclick="window.location.href='https://www.behance.net/corawu'">Bēhance</button>
      <button class="home-button" onclick="window.location.href='https://www.linkedin.com/in/cora-wu-774a7016b/'">LinkedIn</button>

    </div>
    <p id="artwork-msg">original artwork by me</p>
  </div>

  <div class="home-middle-div">

    <img src="media/photos/me.jpg" alt="Cora's photo" class="about-pic-1">
    <!-- Source: https://pixabay.com/photos/palm-trees-upward-tropical-blue-sky-1209185/ -->
    <a href="https://pixabay.com/photos/palm-trees-upward-tropical-blue-sky-1209185/" class="src-link" id="palm-src">img src</a>
    <img src="media/photos/palm-trees.jpg" alt="descanso" class="about-pic-2">

    <div class="about-box" id="abt-box">
      <h3 class="about-box-title">Hello! I'm Cora.</h3>
      <p class="about-txt">I'm a designer, developer, and artist from sunny California.
        Now, however, I'm across the United States studying Information Science and
        Computer Science at Cornell University in New York. Apart from coding and
        drawing, I like writing and watching cooking videos.
      </p>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>
</body>

</html>