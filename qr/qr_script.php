<?php
  require 'unirest-php/src/Unirest.php';
  // $file = $_FILES['file']['name'];

  // $default = 'qr_images/'.$file;
  $default = 'qr_images/qr4.png';
  $headers = array('Accept' => 'application/json');
  $data = array('MAX_FILE_SIZE' => '1048576');
  $files = array('file' => $default);

  $body = Unirest\Request\Body::multipart($data, $files);
  $response = Unirest\Request::post('http://api.qrserver.com/v1/read-qr-code/', $headers, $body);

  print_r($response);
  print_r($response->body[0]->symbol[0]->data);
  $retrievedData = $response->body[0]->symbol[0]->data;

  // Redirecting to another page.
  // header("location: index.php?specialKey=".$retrievedData);
?>
