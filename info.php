<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
  <link rel="stylesheet" href="css/info.css">
</head>

<body>
  <?php
    include_once 'php/navbar.php';

    // Getting data from input field.
    $key = htmlspecialchars($_POST['qr_text']);

    // Including connection script.
    include 'php/db_connect.php';

    $sql = "SELECT * FROM traceability.product
            WHERE private_key = :key;";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(':key' => $key));

    $results = [];

    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
       $results = [
        'id' => $row['product_id'],
        'name' => $row['product_name'],
        'url' => $row['product_url'],
        'chain' => $row['supply_chain'],
        'date' => $row['date_added'],
        'qr_url' => $row['qr_code_url'],
        'description' => $row['product_description'],
        'type' => $row['product_type'],
        'price' => $row['product_price'],
        'key' => $row['private_key']
      ];
     }
  ?>


  <div id="wrapper" class="container">
    <div class="row">
      <div id="productInfo" class="col-12 col-md-6">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">
            <p class="text-center">Product Image</p>
            <img class="imageStyle" src="<?php echo $results['url']; ?>" alt="Product Image Url">
          </div>

          <div class="col-12 col-md-6 offset-md-3">
            <p class="text-center">Product Qr Image</p>
            <img class="imageStyle" src="<?php echo $results['qr_url']; ?>" alt="Product QR Image Url">
          </div>

          <div class="col-12 col-md-6 offset-md-3">
            <p class="text-center">Extra Information</p>
            <ul>
              <li class="text-left">Special Text: <?php echo $results['key'] ?></li>
              <li class="text-left">Product Name: <?php echo $results['name'] ?></li>
              <li class="text-left">Product Type: <?php echo $results['type'] ?></li>
              <li class="text-left">Product Description: <?php echo $results['description'] ?></li>
              <li class="text-left">Product Price: <?php echo $results['price'] ?></li>
              <li class="text-left">Date Added: <?php echo $results['date'] ?></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="supplyChain" class="col-12 col-md-6">
        <p>Supply Chain Goes Here</p>
      </div>
      <form class="" action="index.html" method="post">
        <input class="" type="submit" name="" value="Print PDF">
      </form>
    </div>
  </div>


  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
