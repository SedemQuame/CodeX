<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'php/header.php'; ?>
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>
    <?php include_once 'php/navbar.php'; ?>
    <!-- Prototype of the user's page. -->

    <div class="row">
      <?php include 'php/dashboard_nav.php'; ?>

      <div id="displayPane" class="col-10 panes">
        <p class="text-center sub-header">
          Add new items here.
        </p>

        <?php
          if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if($msg = "User Successfully Added To Product Supply Chain"){
              echo $msg;
            }else{
              echo $msg;
            }
          }
        ?>

      </div>
  </body>
</html>
