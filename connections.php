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
        <p class="text-center sub-header">
          Add new actors to the supply chain.
        </p>

        <form id="addItem" action="php/addUser.php" method="post" enctype="multipart/form-data">
          <div class="">
            <label for="">User Bin</label>
            <input class="form-control" type="text" name="userBin" placeholder="DE50670B - 345677 - 60" required>
          </div>

          <div class="">
            <label for="">Product</label>
            <input class="form-control" type="text" name="product" placeholder="ca4c46bb93b06799239a95b849c7f9d097b30822" required>
          </div>
          <br>
          <div class="">
            <input class="btn btn-outline-secondary btn-block" type="submit"
             name="submit" value="Add User To The Supply Chain">
          </div>
        </form>
      </div>
    </div>

    <?php include_once 'php/footer.php'; ?>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
