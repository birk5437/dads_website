<?php
  session_start();
  include("private/check.php");
  check_logged();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
    <body>
      <div id="wrapper" class="container">
        <?php include 'private/header.html'; ?>
        <div id="middle-wrapper">
          <?php include 'private/sidebar_left.html'; ?>
          <div id="content">
            <?php include $content_page; ?>
          </div>
          <?php include 'private/sidebar_right.html'; ?>
          <?php include 'private/footer.html'; ?>
      </div>
    </div>
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>