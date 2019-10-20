<?php
  // Gathering the necessary information.
  // Personal Information.
  $customerName = htmlspecialchars($_POST['first_name']). ', ' .htmlspecialchars($_POST['last_name']);
  $customerContactInfo = htmlspecialchars($_POST['email_address']). ', '.htmlspecialchars($_POST['phone_number']);

  // Business Information.
  $BIN = htmlspecialchars($_POST['business_bin']);
  $role = htmlspecialchars($_POST['supply_chain_role']);

  // Business Location Information.
  $country = htmlspecialchars($_POST['users_country']);
  $region = htmlspecialchars($_POST['users_region']);
  $estimatedUserlocation = htmlspecialchars($_POST['users_country']).', '.htmlspecialchars($_POST['users_region']);
  $digitalAddress = htmlspecialchars($_POST['digital_address']);
  $date = date('Y-m-d');
  $password = null;

  // Account Credentials.
  if( htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['confirm_password']) ){
    $password = htmlspecialchars($_POST['password']);

    // Require database connection.
    include 'db_connect.php';

    // Registering new users, onto the database.
    $sql = "INSERT INTO `traceability`.`user` (username, user_contact_info, BIN, role, estimated_location, digital_address, registration_date, password)
            VALUES
            (:username, :user_contact_info, :BIN, :role, :estimated_location, :digital_address, :registration_date, :password);";

    $date = date("Y/m/d");
    // echo $date;
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':username' => $customerName, ':user_contact_info' => $customerContactInfo, ':BIN' => $BIN,
                         ':role' => $role , ':estimated_location' => $estimatedUserlocation, ':digital_address'=> $digitalAddress,
                         ':registration_date'=> $date':password'=> $password));

    // Get user id and store id into cookies.
    $sql = "SELECT user_id FROM traceability.user WHERE BIN=:BIN";
    $stmt = $pdo->prepare($sql, array(array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)));
    $stmt->execute(array(':BIN'=> $BIN));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $id = $result['user_id'];

    // Storing user id in cookies.
    session_start();
    $_SESSION['user_id'] = $id;

    $msg = "Registration Complete.";
  }else{
    $msg = "Try again, in a while.";
  }


  // Redirect user to new page.
  header('location: ../enquirer.php?msg='.$msg);
?>
