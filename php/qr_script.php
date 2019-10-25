<?php
  // require 'unirest-php/src/Unirest.php';
  // // $file = $_FILES['file']['name'];
  //
  // // $default = 'qr_images/'.$file;
  // $default = 'qr_images/qr4.png';
  // $headers = array('Accept' => 'application/json');
  // $data = array('MAX_FILE_SIZE' => '1048576');
  // $files = array('file' => $default);
  //
  // $body = Unirest\Request\Body::multipart($data, $files);
  // $response = Unirest\Request::post('http://api.qrserver.com/v1/read-qr-code/', $headers, $body);
  //
  //
  // // echo ($decoded->body[0]->symbol[0]->data);
  // header("location: ../info.php");

  if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: index.php");
    die();
  }

  require "../vendor/autoload.php";

  $qrcode = new QrReader($_FILES['qrimage']['tmp_name']);
  $text = $qrcode->text();
  echo $text;

  header("location: ../info.php?qr_img=".$text);

?>
