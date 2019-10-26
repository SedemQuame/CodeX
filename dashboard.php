<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'php/header.php'; ?>
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>
    <?php include_once 'php/navbar.php' ?>
    <!-- Prototype of the user's page. -->

    <div id="wrapper" class="row">
      <?php
        include 'php/dashboard_nav.php';
      ?>

      <div id="displayPane" class="col-9 panes">
        <p class="text-center sub-header">
          Add new items here.
        </p>

        <div class="">
          <img id="img_element" src="holder.js/300x200" alt="">
        </div>

        <form id="addItem" action="php/addEntry.php" method="post" enctype="multipart/form-data">
          <div class="">
            <label for="">Item Name </label>
            <input class="form-control" type="text" id="" name="item_name" required>
          </div>

          <div class="">
            <label for="">Item Price </label>
            <input class="form-control" type="text" id="" name="item_price" required>
          </div>

          <div class="">
            <label for="">Item Type </label>
            <select class="custom-select" id="" name="item_type" required>
              <option selected>Open this select menu</option>
              <option value="Vegetables">Vegetables</option>
              <option value="Fruit">Fruit</option>
              <option value="Grain, Beans and Nuts">Grain, Beans and Nut</option>
              <option value="Meat and Poultry">Meat and Poultry</option>
              <option value="Fish and Seafood">Fish and Seafood</option>
              <option value="Diary Food">Diary Food</option>
              <option value="Processed Food">Processed Food</option>
            </select>
          </div>

          <div class="">
            <br>
            <label for="">Image Uploads </label>
            <br>
            <input class="" id="image_upload" type="file" name="myfile" required>
          </div>

          <div class="">
            <br>
            <label for="">Item Description </label>
            <textarea class="form-control" type="text" id="" name="item_description" required rows="6" cols="80"></textarea>
          </div>
          <br>

          <div class="">
            <input class="btn btn-outline-secondary btn-block" type="submit" name="submit" value="Add Item">
          </div>
        </form>
      </div>
      </div>
    </div>

    <?php include_once 'php/footer.php'; ?>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
