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

    <div id="wrapper" class="row">
      <?php
        include 'php/dashboard_nav.php';
      ?>
      <div id="displayPane" class="col-9 panes">
      <?php
        if ($_GET['msg'] == "User Successfully Added To Product Supply Chain") {
          echo '
            <div class="msg offset-md-2 col-md-8">
                <img class="statusCheck" src="assets/check.png" alt="check"/>
                <br />
                <p class="msgText text-center">'.$_GET['msg'].'</p>
            </div>
          ';
        }else {
          echo '
            <div class="msg offset-md-2 col-md-8">
                <img class="statusCheck" src="assets/wrong.png" alt="wrong"/>
                <br />
                <p class="msgText text-center">'.$_GET['msg'].'</p>
            </div>
          ';
        }
      ?>
      </div>
    </div>
    <?php include_once 'php/footer.php'; ?>
  </body>
</html>
