<?php include 'vars.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
    <body>
      <div id="wrapper" class="container">
        <?php include 'templates/header.html'; ?>
        <div id="middle-wrapper">
          <?php include 'templates/sidebar_left.html'; ?>
          <?php include $content_page; ?>
          <?php include 'templates/sidebar_right.html'; ?>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>