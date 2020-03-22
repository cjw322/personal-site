<?php
$all_btns = ["home", "coding", "design", "art"];
$display_btns = [];

$btn_shade = "light";
$curr_shade = "dark";
if ($curr_pg == "home" || $curr_pg == "resume") {
  $btn_shade = "dark";
  $curr_shade = "light";
}

// foreach ($all_btns as $btn) {
//   if ($btn != $curr_pg) {
//     $display_btns[] = $btn;
//   }
// }
// var_dump($display_btns)
?>

<div class="navbar">
  <?php
  foreach ($all_btns as $btn) {
    if ($btn == "home") {
      $btn_name = "HOME";
      $link = "index.php";
    } else if ($btn == "coding") {
      $btn_name = "Coding";
      $link = "coding.php";
    } else if ($btn == "design") {
      $btn_name = "Design";
      $link = "design.php";
    } else if ($btn == "art") {
      $btn_name = "Art";
      $link = "art.php";
    }
    // else if ($btn == "resume") {
    //   $btn_name = "Resume";
    //   $link = "resume.php";
    // }
    if ($btn != $curr_pg) {
      echo "<button onclick=\"window.location.href= '../" . $link . "'\"
      class=\"nav-btn nav-btn-" . $btn_shade . "\">" . $btn_name . "</button>\r\n";
    } else {
      echo "<button class=\"nav-btn curr-btn-" . $curr_shade . "\">" . $btn_name . "</button>\r\n";
    }
    // echo "</a>";
  }
  ?>
</div>