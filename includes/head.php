<head>
  <meta charset="utf-8">

  <?php
  if ($curr_pg == "home") {
    echo "<title>Cora Wu</title>";
  } else {
    echo "<title>Cora Wu - " . ucfirst($curr_pg) . "</title>";
  }
  ?>
  <link rel="stylesheet" href="../styles/main-style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../media/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../media/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../media/icons/favicon-16x16.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>