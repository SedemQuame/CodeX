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
    <form action="php/loginScript.php" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
      <!--This is the login page.-->
      <div>
          <label for="email_address">Email Address</label>
          <br>
          <input class="form-control" name="emailAddress" type="text" id="email_address" placeholder="Email Address" required>
      </div>

      <div>
          <label for="user_password">Password</label>
          <br>
          <input class="form-control" name="password" type="password" id="user_password" placeholder="Password" required>
      </div>

      <div>
          <input id="form-submit-btn"  class="btn btn-block" name="submit" type="submit" value="Submit">
      </div>

      <hr>

      <p class="text-center">
        Haven't got an account?
                <br>
        <a href="signup.php">Sign up</a>
      </p>

      <hr>

      <p class="text-center">
        Reset Password with <a href="#">SMS</a> or <a href="#">Email</a>.
      </p>

    </form>
  </div>

  <?php include_once 'php/footer.php'; ?>
  <script src="js/index.js" charset="utf-8"></script>
</body>

</html>
