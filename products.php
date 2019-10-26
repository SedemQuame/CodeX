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
        <p class="text-center">
          Display all product here, with a view button
          <br>
          to view the given information, about a product.
        </p>
        <div class="row">
          <?php
          $sql = "SELECT product_url, product_name FROM traceability.product
                  WHERE supply_chain LIKE '%6%';";

          $stmt = $pdo->prepare($sql);

          // $stmt->execute(array(':id' => $_SESSION['user_id']));
          $stmt->execute();

          $results = [];
          while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
             $results = [
              'url' => $row['product_url'],
              'name' => $row['product_name'],
            ];

          }

          print_r($results);

            $page = "";
            for ($i=0; $i < count($results); $i++) {
              $page .= '
              <div class="card" style="width: 18rem;">
                <img src="'.$results['url'].'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">'.$results['name'].'</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              ';
            }
            echo $page;
          ?>

      </div>

      </div>

      <?php include_once 'php/footer.php'; ?>
      <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
