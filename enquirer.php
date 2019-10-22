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
  <p class="text-center header">
    Query Supply Chain Information By
  </p>
  <p class="text-center sub-header">
    Using Provided Special String
  </p>

  <div id="query-with-text">
    <form class="searchForm row" action="php/query_with_text.php" method="post">
      <label for="qr_text_field">
        <input class="form-control index-form-elements " name="qr_text" type="text" id="qr_text_field" placeholder="Special String" required>
      </label>
      <input class="textSearch btn btn-success" name="submit" type="submit" value="Submit">
    </form>
  </div>

  <p class="text-center">OR</p>
  <hr>

  <p class="text-center header">
    Query Supply Chain Information By
  </p>
  <p class="text-center sub-header">
    Scanning A QR Code
  </p>

  <div id="query-with-qr-code">
    <form enctype="multipart/form-data" action="php/qr_script.php" method="POST">
      <label for="">Choose QR code image to read/scan:</label>
      <br>
      <input name="file" type="file" />
      <br>
      <input class="btn btn-primary btn-success qrCodeSearch btn-block" name="submit" type="submit" value="Scan QR Code">
    </form>
  </div>

</div>

  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
