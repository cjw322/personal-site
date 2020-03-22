<?php
include("includes/init.php");
$curr_pg = "art";

$art_content = "digital";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (filter_input(INPUT_GET, 'digital', FILTER_VALIDATE_BOOLEAN) && $design_content != "digital") {
    $art_content = "digital";
  }
  if (filter_input(INPUT_GET, 'watercolor', FILTER_VALIDATE_BOOLEAN) && $design_content != "watercolor") {
    $art_content = "watercolor";
  }
  if (filter_input(INPUT_GET, 'acrylic', FILTER_VALIDATE_BOOLEAN) && $design_content != "acrylic") {
    $art_content = "acrylic";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Cora Wu</title>
  <link rel="stylesheet" href="../styles/main-style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../media/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../media/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../media/icons/favicon-16x16.png">
</head>

<body>
  <?php include("includes/navbar.php"); ?>
  <!-- MAIN (Center website) -->

  <div class="pf-main">

    <h1 class="pf-title">Art</h1><br>
    <div class="pf-button-div">

      <form id="dg-btn" method="get" class="apf-form">
        <input type="hidden" value="TRUE" name="digital">
        <button class="
    <?php echo "pf-btn pf-btn-" . (($art_content == "digital") ? "selected" : "deselected"); ?>
                    ">Digital</button>
      </form>

      <form id="wc-btn" method="get" class="apf-form">
        <input type="hidden" value="TRUE" name="watercolor">
        <button class="
    <?php echo "pf-btn pf-btn-" . (($art_content == "watercolor") ? "selected" : "deselected"); ?>
                    ">Watercolor</button>
      </form>

      <form id="ac-btn" method="get" class="apf-form">
        <input type="hidden" value="TRUE" name="acrylic">
        <button class="
    <?php echo "pf-btn pf-btn-" . (($art_content == "acrylic") ? "selected" : "deselected"); ?>
                    ">Acrylic</button>
      </form>
    </div>

    <hr class="pf-space">

    <div class="content-main">
      <?php if ($art_content == "digital") { ?>
        <!-- DIGITAL====================================================== -->
        <div class="apf-col">
          <div class="pf-content">
            <a href="https://www.behance.net/gallery/83036845/City-Illustrations">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/art/digital/jpn.jpg" alt="jpn">
              <img class="content-img" src="media/art/digital/jpn1.png" alt="jpn1">
              <img class="content-img" src="media/art/digital/jpn2.png" alt="jpn2">
              <h3 class="content-title">Japan (Nakameguro Station)</h3>
            </a></div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/lucas1.png" alt="lucas1">
            <img class="content-img" src="media/art/digital/lucas2.png" alt="lucas2">
            <h3 class="content-title">Lucas Portrait</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/old-city.jpg" alt="old-city">
            <h3 class="content-title">City Drawing</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/env.jpg" alt="env">
            <h3 class="content-title">By the Bow Seat Ocean Awareness Competition
              Submission
            </h3>
          </div>


        </div>

        <div class="apf-col">
          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/wendy.jpg" alt="wendy">
            <img class="content-img" src="media/art/digital/wendy2.png" alt="wendy2">
            <h3 class="content-title">Wendy Portrait</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/comic.jpg" alt="comic">
            <h3 class="content-title">Art IP Comic</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/digital/ynwa.gif" alt="ynwa">
            <h3 class="content-title">You Never Walk Alone GIF
            </h3>
          </div>

        </div>

      <?php } else if ($art_content == "watercolor") { ?>
        <!-- WATERCOLOR----------------------------------------------------------- -->
        <div class="apf-col">
          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/town.jpg" alt="town">
            <h3 class="content-title">Town in Japan</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/joon1.png" alt="joon1">
            <img class="content-img" src="media/art/watercolor/joon2.png" alt="joon2">
            <img class="content-img" src="media/art/watercolor/joon3.png" alt="joon3">
            <h3 class="content-title">Library</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/wwx.jpg" alt="wwx">
            <h3 class="content-title">WWX Sketch
            </h3>
          </div>


        </div>

        <div class="apf-col">
          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/warmsky.jpg" alt="warmsky">
            <img class="content-img" src="media/art/watercolor/coolsky.jpg" alt="coolsky">
            <h3 class="content-title">Night Skies</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/bt.jpg" alt="bt">
            <h3 class="content-title">Clothing Practice</h3>
          </div>

          <hr class="pf-divider">

          <div class="pf-content">
            <!-- Source: (original work) Cora Wu -->
            <img class="content-img" src="media/art/watercolor/Beach.jpg" alt="beach">
            <h3 class="content-title">Beach
            </h3>
          </div>

        </div>

    </div>
  <?php } else if ($art_content == "acrylic") { ?>
    <!-- WATERCOLOR----------------------------------------------------------- -->
    <div class="apf-col">
      <div class="pf-content">
        <!-- Source: (original work) Cora Wu -->
        <img class="content-img" src="media/art/acrylic/shanghai.jpg" alt="shanghai">
        <h3 class="content-title">Shanghai on Wood</h3>
      </div>

      <hr class="pf-divider">

      <div class="pf-content">
        <!-- Source: (original work) Cora Wu -->
        <img class="content-img" src="media/art/acrylic/reflections.jpg" alt="reflections">
        <h3 class="content-title">CAPTA Reflections Contest Submission</h3>
      </div>

      <hr class="pf-divider">

      <div class="pf-content">
        <!-- Source: (original work) Cora Wu -->
        <img class="content-img" src="media/art/acrylic/forest1.jpg" alt="forest1">
        <h3 class="content-title">Misty Forest</h3>
      </div>


    </div>

    <div class="apf-col">
      <div class="pf-content">
        <!-- Source: (original work) Cora Wu -->
        <img class="content-img" src="media/art/acrylic/forest2.jpg" alt="forest2">
        <h3 class="content-title">Forest Sketch w Gouache</h3>
      </div>

      <hr class="pf-divider">

      <div class="pf-content">
        <!-- Source: (original work) Cora Wu -->
        <img class="content-img" src="media/art/acrylic/spring.jpg" alt="spring">
        <h3 class="content-title">Spring Day</h3>
      </div>


    </div>

  </div>
<?php } ?>
</div>

<div class="pf-space"></div>

<!-- END MAIN -->
</div>
<?php include("includes/footer.php"); ?>
</body>

</html>
