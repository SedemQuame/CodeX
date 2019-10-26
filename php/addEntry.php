<?php
  session_start();
// Getting data from the input fields.
  $itemName = $_POST['item_name'];
  $itemPrice = $_POST['item_price'];
  $itemType = $_POST['item_type'];
  $itemDescription = $_POST['item_description'];

// Getting data from files fields.
// $currentDir = getcwd();
$currentDir = __dir__;
$uploadDirectory = "\\..\\productImages\\";
$imgPath = "productImages\\";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

$fileName = $_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size'];
$fileTmpName  = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];

$fileExtension = explode('.',$fileName);
$fileExtension = strtolower(end($fileExtension));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);
$imgPath .= basename($fileName);

// Using name given to product for now
$private_key = sha1($itemDescription);

// Replace 3 with, user id, stored in the database.
$chain = [(int)$_SESSION['user_id']];
// print_r($chain);

// Getting QR code data.
$qr_code_url = 'https://api.qrserver.com/v1/create-qr-code/?data='.$private_key;


if (isset($_POST['submit'])) {

   if (! in_array($fileExtension,$fileExtensions)) {
       $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
   }

   if ($fileSize > 2000000) {
       $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
   }

   if (empty($errors)) {
      $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

       // Including connection script.
       include 'db_connect.php';

       $sql = "INSERT INTO product(product_name, product_url, supply_chain, date_added, qr_code_url, product_description, product_type, product_price, private_key)
              VALUES (:product_name, :product_url, :supply_chain, :date_added, :qr_code_url, :product_description, :product_type, :product_price, :private_key);";

       $stmt = $pdo->prepare($sql);

       $stmt->execute(array(':product_name' => $itemName, ':product_url' => $imgPath,
                            ':supply_chain' => json_encode($chain), ':date_added' => date('Y-m-d H:i:s'),
                            ':qr_code_url' => $qr_code_url, ':product_description' => $itemDescription,
                            ':product_type' => $itemType, ':product_price' => $itemPrice, ':private_key' => $private_key));

       $msg = "";
       if ($didUpload) {
           $msg .= "The file " . basename($fileName) . " has been uploaded";
           header("location: ../dashboard.php?msg=".$msg);
       } else {
           $msg .= "An error occurred somewhere. Try again";
           header("location:  ../dashboard.php?msg=".$msg);
       }
   } else {
       foreach ($errors as $error) {
           echo $error . "These are the errors" . "\n";
       }
   }
}






?>
