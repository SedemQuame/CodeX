<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
  <link rel="stylesheet" href="css/slforms.css">
</head>

<body>
  <?php include_once 'php/navbar.php'; ?>

  <div id="wrapper">

    <p class="text-center header">
      Are you, food concious?
    </p>

    <p class="text-center sub-header">
      Sign Up To Get Data Concerning The Food You Eat.
    </p>
      <div class="row">
        <form  class="col-8 col-md-6 col-lg-5" action="php/signUpScript.php" method="post" enctype="">

          <div>
            <!-- Personal Information -->
              <p class="form-sub-section">Personal Information</p>
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

          </div>

          <div>
            <!-- Business Information -->
            <br>
            <p class="form-sub-section">Business Information</p>
            <hr>
            <div>
                <label for="business_bin">B.I.N</label>
                <br>
                <input class="form-control" name="business_bin" type="text" id="business_bin" class="" placeholder="B.I.N" required>
            </div>

            <div>
                <label for="supply_chain_role">Role</label>
                <br>
                <select class="form-control" name="supply_chain_role" type="text" id="supply_chain_role" class="" placeholder="Supply Chain Role" value="Ghana" required>
                  <option selected>Select Your Role</option>
                  <option value="Customer">Customer</option>
                  <option value="Grower">Grower</option>
                  <option value="Produce Packer">Produce Packer</option>
                  <option value="Distributor/Trader">Distributor/Trader</option>
                  <option value="Manufacturer/Processor">Manufacturer/Processor</option>
                  <option value="Retail Store">Retail Store</option>
                  <option value="Food Service Operator">Food Service Operator</option>
                </select>
            </div>

            <div>
                <label for="users_country">Country</label>
                <br>
                <input class="form-control" name="users_country" type="text" id="users_country" class="" placeholder="Country" required>
            </div>

            <div>
                <label for="users_region">Region</label>
                <br>
                <select class="form-control" name="users_region" type="text" id="users_region" class="" placeholder="region" required>
                  <option selected>Select Your Region</option>
                  <option value="Oti">Oti Region</option>
                  <option value="Bono East">Bono East Region</option>
                  <option value="Ahafo">Ahafo Region</option>
                  <option value="Bono">Bono Region</option>
                  <option value="North East">North East Region</option>
                  <option value="Savannah">Savannah Region</option>
                  <option value="North West">Western North Region</option>
                  <option value="Western">Western Region</option>
                  <option value="Volta">Volta Region</option>
                  <option value="Greater Accra">Greater Accra Region</option>
                  <option value="Eastern">Eastern Region</option>
                  <option value="Ashanti">Ashanti Region</option>
                  <option value="Central">Central Region</option>
                  <option value="Northern Accra">Northen Accra Region</option>
                  <option value="Upper East">Upper East Region</option>
                  <option value="=Upper West">Upper West Region</option>
                </select>
            </div>

            <div>
                <label for="digital_address">Digital Address</label>
                <br>
                <input class="form-control" name="digital_address" type="text" id="digital_address" class="" placeholder="digital address" required>
            </div>

          </div>

          <div>
            <!-- Account Credentials  -->
            <br>
            <p class="form-sub-section">Account Credentials</p>
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
          </div>

          <hr>

          <p class="text-center">
            Already a registered user?
            <br>
            <a href="login.php">Log In</a>
          </p>

        </form>
  </div>

  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
