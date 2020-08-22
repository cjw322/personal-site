<?php
include("includes/init.php");
$curr_pg = "design";

$design_content = "graphic";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (filter_input(INPUT_GET, 'graphic', FILTER_VALIDATE_BOOLEAN) && $design_content != "graphic") {
    $design_content = "graphic";
  }
  if (filter_input(INPUT_GET, 'uiux', FILTER_VALIDATE_BOOLEAN) && $design_content == "graphic") {
    $design_content = "uiux";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include("includes/head.php"); ?>

<body>
  <?php
  include("includes/navbar.php");
  include("includes/top-btn.php");
  ?>
  <!-- MAIN (Center website) -->

  <div class="pf-main">

    <h1 class="pf-title">Design</h1><br>
    <div class="pf-button-div">

      <form id="gd-btn" method="get" class="pf-form">
        <input type="hidden" value="TRUE" name="graphic">
        <button class="
    <?php echo "pf-btn pf-btn-" . (($design_content == "graphic") ? "selected" : "deselected"); ?>
                    ">Graphic Design</button>
      </form>

      <form id="uiux-btn" method="get" class="pf-form">
        <input type="hidden" value="TRUE" name="uiux">
        <button class="
    <?php echo "pf-btn pf-btn-" . (($design_content != "graphic") ? "selected" : "deselected"); ?>
                    ">UI/UX</button>
      </form>
    </div>

    <hr class="pf-space">

    <div class="content-main">
      <?php if ($design_content == "graphic") { ?>
        <!-- Graphic =================================================== -->
        <div class="pf-col">
          <div class="pf-content">
            <a href="https://www.behance.net/gallery/83038983/BUILTBYGIRLS-Phone-Case-Design-Competition">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/designs/bbg2.png" alt="Phone Case">
              <h3 class="content-title">#BUILTBYGIRLS Phone Case Contest Submission 2</h3>
            </a></div>

          <hr class="pf-divider">

          <div class="pf-content">
            <a href="https://www.behance.net/gallery/85111617/Miscellaneous-Icons">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img scale" src="media/designs/kdphi.png" alt="aKDPhi Icon">
              <h3 class="content-title">Cornell aKDPhi Website Favicon</h3>
            </a></div>

        </div>

        <div class="pf-col">

          <div class="pf-content">
            <a href="https://www.behance.net/gallery/82228321/Alison-Cosmetics-(LogoCore-30-Day-Logo-Challenge-Day-1)">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/designs/cosmetic.png" alt="Alison Cosmetics Logo">
              <h3 class="content-title">Alison Cosmetics Logo (30 Day Logo Challenge, Day 1)</h3>
            </a></div>

          <hr class="pf-divider">

          <div class="pf-content">
            <a href="https://www.behance.net/gallery/85111617/Miscellaneous-Icons">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img scale" src="media/designs/mail.png" alt="Email Icon">
              <h3 class="content-title">Miscellaneous Icons</h3>
            </a></div>

        </div>

        <div class="pf-col">

          <div class="pf-content">
            <a href="https://www.behance.net/gallery/83038983/BUILTBYGIRLS-Phone-Case-Design-Competition">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/designs/bbg1.png" alt="Phone Case">
              <h3 class="content-title">#BUILTBYGIRLS Phone Case Contest Submission 1</h3>
            </a>
          </div>


        </div>
      <?php } else { ?>
        <!-- UI/UX----------------------------------------------------------- -->
        <div class="pf-col">
          <div class="pf-content">
            <a href="https://www.behance.net/gallery/83041577/Daily-UI-01-Sign-up-Page">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/designs/brh.png" alt="BRH Login">
              <h3 class="content-title">Daily UI #01: Sign-up Page (BigRed//Hacks)</h3>
            </a></div>
        </div>

        <div class="pf-col">
          <div class="pf-content">
            <a href="https://www.behance.net/gallery/83081741/Daily-UI-04-Calculator">
              <!-- Source: (original work) Cora Wu -->
              <img class="content-img" src="media/designs/calculator.png" alt="Calculator">
              <h3 class="content-title">Daily UI #04: Calculator</h3>
            </a></div>

        </div>

        <div class="pf-col"></div>
    </div>
  <?php } ?>
  </div>

  <div class="pf-space"></div>

  <!-- END MAIN -->
  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>