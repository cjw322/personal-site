<?php
include("includes/init.php");
$curr_pg = "coding";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include("includes/head.php"); ?>

<body>
  <?php include("includes/navbar.php"); ?>
  <!-- MAIN (Center website) -->

  <div class="pf-main">

    <h1 class="pf-title">Coding</h1><br>

    <h3 class="code-subtitle">Press any of the project boxes to open their GitHub repo!</h3>

    <div class="content-main">
      <div class="apf-col">
        <a href="https://github.com/jek343/StanfordMedical">
          <div class="code-box">
            <h3 class="code-title">Cornell-Stanford Medical Research</h3>
            <h6 class="code-date">2019-Current</h6>
            <p class="code-description">
              Currently working with a teammate from Cornell Data Science to conduct
              research under Professor David Scheinker at Stanford University. Using
              different machine learning algorithms such as linear & logistic regression
              and CNNs, we are analyzing the relationship between factors in
              County Health Rankings records and mortality rates in US counties.
            </p>
          </div>
        </a>

        <a href="https://github.com/cjw322/CornellCreatives">
          <div class="code-box">
            <h3 class="code-title">Cornell Creatives iOS Application</h3>
            <h6 class="code-date">2018</h6>
            <p class="code-description">
              For the final project of Introduction to iOS App Development, I worked
              with a team of 4 people (1 other iOS developer, 1 backend developer,
              and 1 designer) to code a mobile application in Swift. This app would
              allow students requiring services such as photography, designing, and
              coding to connect with student freelancers also in Cornell.
            </p>
          </div>
        </a>

        <a href="https://github.com/cjw322/personal-site">
          <div class="code-box">
            <h3 class="code-title">Personal Website</h3>
            <h6 class="code-date">2018-Current</h6>
            <p class="code-description">
              This personal website is coded with HTML, CSS, and PHP. Although the
              current dynamic version was created in 2020, I'd created earlier
              static versions of the website back through 2018 (two of which
              have their own GitHub repositories). This website is currently the
              most advanced version, with PHP partials and an in-progress mySQL
              database for storing portfolio information.
            </p>
          </div>
        </a>

      </div>


      <div class="apf-col">
        <a href="https://github.coecis.cornell.edu/al2248/3110-project">
          <div class="code-box">
            <h3 class="code-title">Command Line Text Editor</h3>
            <h6 class="code-date">2019</h6>
            <p class="code-description">
              For the final project in CS 3110 (Functional Programming & Data Structures),
              I worked with a team of 3 other members to develop a text editor that
              runs on the command line, similar to GNU nano. The program was written
              entirely in OCaml and shell scripts. Besides opening, writing, and
              saving text files, other features of our text editor included:
              word, line, and character count; searching and replacing of text; opening
              multiple windows; and splitting the current window into several frames,
              allowing users to edit multiple files simultaneously. When working on
              the same file in two frames, edits would be updated in real time.
              (GitHub repo linked, but it's private.)
            </p>
          </div>
        </a>

        <a href="https://github.com/CornellDataScience/IntSys-Seedling">
          <div class="code-box">
            <h3 class="code-title">Seedlings Classifier</h3>
            <h6 class="code-date">2018</h6>
            <p class="code-description">
              Worked with a team with 5 other teammates from Cornell Data Science
              to develop a seedlings classification model that could be run and trained
              on a mobile device. To accomplish this, one of our main goals was to
              create a model that was computationally inexpensive, so that users could
              take photos of seedlings and further train our pre-existing classifier
              on these new images with only the computational power of their
              mobile device.
            </p>
          </div>
        </a>

      </div>
    </div>

  </div>

  <div class="pf-space"></div>

  <?php include("includes/footer.php"); ?>
</body>

</html>