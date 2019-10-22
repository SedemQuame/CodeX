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
      <div id="NavPane" class="col-2 panes">
        <div class="">
          <p>User information</p>
          <ul>
            <?php // TODO: Add user image if possible ?>
            <li class="text-left">User name</li>
            <li class="text-left">User Role</li>
            <li class="text-left">Email</li>
            <li class="text-left">Phone Number</li>
          </ul>
        </div>


        <ul class="list-group">
          <li class="list-group-item">
            <a href="dashboard.php">Home</a>
          </li>
          <li class="list-group-item">
            <a href="#">Connections</a>
          </li>
          <li class="list-group-item">
            <a href="#">Products</a>
          </li>
        </ul>
      </div>

      <div id="displayPane" class="col-10 panes">
        <p class="text-center sub-header">
          Add new items here.
        </p>

        <div class="">
          <img id="img_element" src="holder.js/300x200" alt="">
        </div>

        <form id="addItem" action="" method="post" enctype="multipart/form-data">
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
              <option value="tops">Vegetables</option>
              <option value="shoes">Fruit</option>
              <option value="bags">Grain, Beans and Nut</option>
              <option value="accessories">Meat and Poultry</option>
              <option value="accessories">Fish and Seafood</option>
              <option value="accessories">Diary Food</option>
              <option value="accessories">Processed Food</option>
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
