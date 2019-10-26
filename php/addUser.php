<?php
  $product = htmlspecialchars($_POST['product']);
  $bin = htmlspecialchars($_POST['userBin']);
  // $role = htmlspecialchars($_POST['userRole']);

  $user_id = 0;

  // PSEUDO_CODE.
  /* 1. Check if user with existing bin, exist in the database.
  * If user present, send email to user to confirm, addition to the
  * supply chain and then print success on the next page.
  *
  * If user is not present, print error on the next page.
  */
  // 2. Add user, to the chain, in the products table.

  include 'db_connect.php';

  $sql = "SELECT Count(*), user_id FROM traceability.user WHERE BIN = :bin;";

  $stmt = $pdo->prepare($sql);

  $stmt->execute(array(':bin' => $bin));

  $count = $stmt->fetch();

  $user_id = $count['user_id'];

  $msg = "";
  if ($count[0] == 1) {
    // echo "match exists.";
    $sql = "SELECT supply_chain FROM traceability.product WHERE product_id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(':id' => 3));

    $arrayOfUsers = null;
    $arrayOfUsers = json_decode($stmt->fetch()[0]);

    echo "<br />";

    print_r($arrayOfUsers);

    array_push($arrayOfUsers, (int)$user_id);

    // Updating array.
    $sql = "UPDATE traceability.product SET supply_chain = :chain WHERE product_id = :id;";

    echo json_encode($arrayOfUsers);

    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(':chain' => json_encode($arrayOfUsers), ':id' => 3));

    $msg = "User Successfully Added To Product Supply Chain";
    header("location: ../chainStatus.php?msg=".$msg);
  }else {
    $msg = "Failed To Add User To Supply Chain.";
    header("location: ../chainStatus.php?msg=".$msg);
  }
?>
