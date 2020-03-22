<?php
include("includes/init.php");
session_start();

$curr_pg = "home";
$show_form = TRUE;
$show_first_name_feedback = FALSE;
$show_last_name_feedback = FALSE;
$show_email_feedback = FALSE;
$show_type_feedback = FALSE;
$show_description_feedback = FALSE;


$order_first_name = '';
$order_last_name = '';
$order_email = '';
$order_type = null;
$order_description = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $is_order_valid = TRUE;

  $order_first_name = trim(filter_input(INPUT_POST, "order_first_name", FILTER_SANITIZE_STRING));
  $order_last_name = trim(filter_input(INPUT_POST, "order_last_name", FILTER_SANITIZE_STRING));
  $order_email_unchecked = trim(filter_input(INPUT_POST, "order_email", FILTER_SANITIZE_STRING));
  $order_email = trim(filter_input(INPUT_POST, "order_email", FILTER_VALIDATE_EMAIL));
  $order_type = trim(filter_input(INPUT_POST, "order_type", FILTER_SANITIZE_STRING));
  $order_description = trim(filter_input(INPUT_POST, "order_description", FILTER_SANITIZE_STRING));

  if (empty($order_first_name)) {
    $is_order_valid = FALSE;
    $show_first_name_feedback = TRUE;
  }
  if (empty($order_last_name)) {
    $is_order_valid = FALSE;
    $show_last_name_feedback = TRUE;
  }
  if (empty($order_email)) {
    $is_order_valid = FALSE;
    $show_email_feedback = TRUE;
    $order_email = $order_email_unchecked;
  }
  if (empty($order_type) || $order_type == null) {
    $is_order_valid = FALSE;
    $show_type_feedback = TRUE;
  } else if (
    $order_type != "graphic design" && $order_type != "illustration" &&
    $order_type != "UI/UX design"
  ) {
    $is_order_valid = FALSE;
    $show_type_feedback = TRUE;
  }
  if (empty($order_description)) {
    $is_order_valid = FALSE;
    $show_description_feedback = TRUE;
  }
  $show_form = !$is_order_valid;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cora Wu</title>
  <link rel="stylesheet" href="styles/main-style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="media/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="media/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="media/icons/favicon-16x16.png">
</head>

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
