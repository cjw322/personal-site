<?php
include("includes/init.php");
$curr_pg = "coding";
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

    <h1 class="pf-title">Coding</h1><br>

    <h3 class="code-subtitle">Press any of the project boxes to open them or their GitHub repo!</h3>

    <div class="content-main">
      <div class="apf-col">

        <a href="https://clubhub-4300.herokuapp.com/" target="_blank">
          <div class="code-box">
            <h3 class="code-title">ClubHub</h3>
            <h6 class="code-date">2021</h6>
            <p class="code-description">
              For the final project of CS 4300: Language and Information, an Information
              Retrieval course, I worked with a team of 3 other developers to create a website that
              recommends movies based on Cornell clubs. <br>
              To get a recommendation, you don't have to know any Cornell clubs - just start typing
              two letters in the search bar to get auto-populated search options scraped from
              Cornell's CampusGroups page. <br>
              I worked on the cosine similarity scoring, stemming the query terms,
              coding the frontend in React, and creating a k-nearest neighbors model to find
              related clubs from the query to provide additional recommendations! <br>
            </p>
          </div>
        </a>


        <a href="https://github.com/jek343/StanfordMedical">
          <div class="code-box">
            <h3 class="code-title">Cornell-Stanford Medical Research</h3>
            <h6 class="code-date">2019-2020</h6>
            <p class="code-description">
              I conducted research with a Cornell Data Science teammate
              under Stanford professor David Scheinker to find and
              predict trends between yearly county health data and mortality rates
              using ML models (e.g. linear & logistic regression, random forests).
              Throughout the project, we cleaned large amounts of data, reformatted
              them into pandas datasets, ran models on the datasets to
              predict mortality rates for given combinations of county health data,
              and generated visualizations of our results.
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
              static versions of the website back through 2018.
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

      </div>


      <div class="apf-col">

        <a href="https://fairmandering.org/index.html">
          <div class="code-box">
            <h3 class="code-title">Fairmandering</h3>
            <h6 class="code-date">2020</h6>
            <p class="code-description">
              In my sophomore year, I joined the nonpartisan organization Fairmandering,
              which seeks to combat the political malpractice of gerrymandering, where
              voting districts are drawn unfairly to favor one political party
              over another. I built their website from scratch using HTML, CSS,
              and JavaScript.
            </p>
          </div>
        </a>

        <a href="https://github.com/bayoumi17m/oh-online">
          <div class="code-box">
            <h3 class="code-title">Ithaqueue</h3>
            <h6 class="code-date">2020</h6>
            <p class="code-description">
              At the start of the pandemic, I joined a small team of Cornell students
              working on the web app Ithaqueue, which was designed to make virtual
              office hours more manageable by keeping track of waitlists for each class.
              A week in, I was appointed backend development lead. During this project,
              I learned how to use Flask, GraphQL, and SQLAlchemy in order to put
              together the backend of our web application, as well as
              gained experience with deployment tools such as Docker.
            </p>
          </div>
        </a>

        <a href="https://github.coecis.cornell.edu/al2248/3110-project">
          <div class="code-box">
            <h3 class="code-title">Command Line Text Editor</h3>
            <h6 class="code-date">2019</h6>
            <p class="code-description">
              For the final project in CS 3110 (Functional Programming & Data Structures),
              I worked with a team of 3 other members to develop a text editor that
              runs on the command line, similar to GNU nano. The program was written
              entirely in OCaml and shell scripts. Besides opening, writing, and
              saving text files, other features of our text editor included
              word, line, and character count; searching and replacing of text; opening
              multiple windows; and splitting the current window into several frames,
              allowing users to edit multiple files simultaneously. When working on
              the same file in two frames, edits would be updated in real time.
              (GitHub repo linked, but it's private to Cornell GitHub users.)
            </p>
          </div>
        </a>

        <a href="https://github.com/CornellDataScience/IntSys-Seedling">
          <div class="code-box">
            <h3 class="code-title">Seedlings Classifier</h3>
            <h6 class="code-date">2018</h6>
            <p class="code-description">
              I worked with a team with 5 other teammates from Cornell Data Science
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