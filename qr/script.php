<?php
  // if($_SERVER['REQUEST_METHOD'] != "POST"){
  //   header("location: index.php");
  //   die();
  // }

  require 'vendor/autoload.php';

  // $fileName = ;
  // $filePath = 'qr_images/'.$fileName;
  // $default = 'qr_images/qr1.png';

  $qrcode = new QrReader($_FILES['file']['tmp_name']);
  $text = $qrcode->text(); //return decoded text from QR Code
  var_dump($text);
?>
