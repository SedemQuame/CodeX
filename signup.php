<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
  <link rel="stylesheet" href="css/slforms.css">
</head>

<body>
  <?php include_once 'php/navbar.php'; ?>

  <p class="text-center">
    Get up to the minute, information
    <br>
    on the food supply chain.
  </p>
    <div class="row">
      <form action="" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
        <!-- Personal Information -->
        <br>
          <p>Personal Information</p>
          <hr>
          <div>
              <label for="first_name">First Name</label>
              <br>
              <input class="form-control" name="first_name" type="text" id="first_name" class="" placeholder="First Name" required>
          </div>

          <div>
              <label for="last_name">Last Name</label>
              <br>
              <input class="form-control" name="last_name" type="text" id="last_name" class="" placeholder="Last name" required>
          </div>

          <div>
              <label for="email_address">Email Address</label>
              <br>
              <input class="form-control" name="email_address" type="text" id="email_address" class="" placeholder="Email Address" required>
          </div>

          <div>
              <label for="phone_number">Phone number</label>
              <br>
              <input class="form-control" name="phone_number" type="tel" id="phone_number" class="" placeholder="Phone Number" required>
          </div>

          <!-- Business Information -->
          <br>
          <p>Business Information</p>
          <hr>
          <div>
              <label for="business_bin">B.I.N</label>
              <br>
              <input class="form-control" name="business_bin" type="text" id="business_bin" class="" placeholder="B.I.N" required>
          </div>

          <div>
              <label for="users_country">Country</label>
              <br>
              <input class="form-control" name="users_country" type="text" id="users_country" class="" placeholder="Country" required>
          </div>

          <div>
              <label for="users_region">Region</label>
              <br>
              <input class="form-control" name="users_region" type="text" id="users_region" class="" placeholder="region" required>
          </div>

          <!-- Account Credentials  -->
          <br>
          <p>Account Credentials</p>
          <hr>
          <div>
              <label for="user_password">Password</label>
              <br>
              <input class="form-control" name="password" type="password" id="user_password" class="" placeholder="Password" required>
          </div>

          <div>
              <label for="user_password_confirmation">Confirm Password</label>
              <br>
              <input class="form-control" name="confirm_password" type="password" id="user_password_confirmation" class="" placeholder="Confirm Password" required>
          </div>

          <div>
              <input id="form-submit-btn" class="btn btn-block" name="submit" type="submit" id="submit_btn" class="" value="Submit">
          </div>

          <hr>

          <p class="text-center">
            Already a registered user?
            <br>
            <a href="login.php">Log In</a>
          </p>

      </form>

  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
