<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/link.css">
</head>

<body>
  <?php
    include_once 'php/navbar.php';

    if(isset($_POST['qr_text']) || isset($_GET['qr_img'])){
      // Getting data from input field.
      $key = "";
      if (isset($_POST['qr_text'])) {
        $key = htmlspecialchars($_POST['qr_text']);
      }else {
        $key = htmlspecialchars($_GET['qr_img']);
        // echo gettype($key);
      }
      // Including connection script.
      include 'php/db_connect.php';

      if ($output == "Database connection successful.") {
        $sql = "SELECT * FROM traceability.product
                WHERE private_key = :key;";

        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(':key' => $key));

        $results = [];
        $chain = array();

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
           $results = [
            'id' => $row['product_id'],
            'name' => $row['product_name'],
            'url' => $row['product_url'],
            'date' => $row['date_added'],
            'qr_url' => $row['qr_code_url'],
            'description' => $row['product_description'],
            'type' => $row['product_type'],
            'price' => $row['product_price'],
            'key' => $row['private_key']
          ];

          array_push($chain, $row['supply_chain']);
         }

         $pageInfo = '
           <div class="row">
             <div class="col-12 col-md-6 offset-md-3">
               <p class="text-center">Product Image</p>
               <img class="imageStyle" src="'. $results['url'] .'" alt="Product Image Url">
             </div>

             <div class="col-12 col-md-6 offset-md-3">
               <p class="text-center">Product Qr Image</p>
               <img class="imageStyle" src="'.$results['qr_url'].'" alt="Product QR Image Url">
             </div>

             <div class="col-12 col-md-6 offset-md-3">
               <p class="text-center">Extra Information</p>
               <ul>
                 <li class="text-left">Special Text: '.$results['key'] .'</li>
                 <li class="text-left">Product Name: '.$results['name'] .'</li>
                 <li class="text-left">Product Type: '. $results['type'] .'</li>
                 <li class="text-left">Product Description: '. $results['description'] .'</li>
                 <li class="text-left">Product Price: '. $results['price'] .'</li>
                 <li class="text-left">Date Added: '. $results['date'] .'</li>
               </ul>
             </div>
           </div>
         ';
      }
    } else {
      echo $output;
    }
  ?>


  <div id="wrapper" class="container">
    <div class="row">
      <div id="productInfo" class="col-12 col-md-6">
        <p class="text-center">Product Information</p>

        <?php
          if (isset($_POST['qr_text']) || isset($_GET['qr_img'])) {
            echo $pageInfo;
          }
        ?>
      </div>
      <div id="supplyChain" class="col-12 col-md-6">
        <p class="text-center">Supply Chain Goes Here</p>
        <!-- Querying database for information on the various individuals in the supply chain. -->
        <?php
        $suppliers = [];

        $chain = json_decode($chain[0]);
        // print_r($chain);
          for ($i=0; $i < count($chain); $i++) {
            $sql = "SELECT * FROM traceability.user WHERE user_id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->execute(array(':id' => $chain[$i]));

            $user = [];

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
               $user = [
                'name' => $row['username'],
                'contact' => $row['user_contact_info'],
                'bin' => $row['BIN'],
                'role' => $row['role'],
                'location' => $row['estimated_location'],
                'address' => $row['digital_address'],
                'date' => $row['registration_date'],
              ];
              array_push($suppliers, $user);
             }
          }

          // print_r($suppliers);

          $info = '<div class="accordion" id="accordionExample">';
          for ($i=0; $i < count($suppliers); $i++) {
            $info .= '
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
                    '.$suppliers[$i]['role'].'
                  </button>
                </h2>
              </div>
              <div id="collapse'.$i.'" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  '.$suppliers[$i]['bin'].'
                </div>
              </div>
            </div>

            <img class="link" src="assets/arrow.svg" alt="arrow">

            ';
          }
          $info .= '</div>';
          echo $info;

        ?>
      </div>
      <form class="" action="php/pdfPrint.php" method="post">
        <input type="hidden" name="html" value="<?php $pageInfo; ?>">
        <input class="btn btn-success" type="submit" name="generatePDF" value="Print PDF">
      </form>
    </div>
  </div>


  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
