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
      <?php include 'php/dashboard_nav.php'; ?>

      <div id="displayPane" class="col-9 panes">
        Display all product here, with a view button
        <br>
        to view the given information, about a product.
      </div>

      <?php include_once 'php/footer.php'; ?>
      <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
