<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
  <link rel="stylesheet" href="css/enquirer.css">
</head>

<body>
  <?php include_once 'php/navbar.php'; ?>

<div id="wrapper">
  <p class="text-center">
    Query Supply Chain Information By
    <br>
    Using Provided Special String
    <br>
    OR
    <br>
    Scanning the provided QR Code.
  </p>

  <div id="query-with-text">
    <form class="searchForm row" action="../enquirer.php" method="post">
      <label for="get-user-email">
        <input class="form-control index-form-elements " name="emailAddress" type="text" id="get-user-email" placeholder="Special String" required>
      </label>
      <input class="textSearch btn btn-success" name="submit" type="submit" value="Submit">
    </form>
  </div>

  <hr>

  <div id="query-with-qr-code">
    <a class="btn btn-primary btn-success qrCodeSearch btn-block" href="#" role="button">Scan QR Code</a>
  </div>

</div>

  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
