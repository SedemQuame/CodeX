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
          Add new actors to the supply chain.
        </p>

        <form id="addItem" action="php/addUser.php" method="post" enctype="multipart/form-data">
          <div class="">
            <label for="">User Bin</label>
            <input class="form-control" type="text" =name="userBin" required>
          </div>

          <div class="">
            <label for="">Role</label>
            <select class="custom-select" id="" name="item_type" required>
              <option selected>Open this select menu</option>
              <option value="Grower">Grower</option>
              <option value="Produce Packer/Re-packer">Produce Packer/Re-packer</option>
              <option value="Distributor/Trader">Distributor/Trader</option>
              <option value="Manufacturer/Processor">Manufacturer/Processor</option>
              <option value="Retail Store">Retail Store</option>
              <option value="Food Service Operator">Food Service Operator</option>
            </select>
          </div>

          <br>
          <div class="">
            <input class="btn btn-outline-secondary btn-block" type="submit" name="submit" value="Add User">
          </div>
        </form>
      </div>
    </div>

    <?php include_once 'php/footer.php'; ?>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
