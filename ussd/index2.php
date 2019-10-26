<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$level = explode("*", $text);

if(isset($text)){
  if($text == ""){
    // This is the first request. Note how we start the response with CON
    $response  = "CON Codex Traceability System. \n";
    $response .= "1. Sign up, as a part of the supply chain \n";
    $response .= "2. Query database, for information ";
  } else if ($text == "1") {
      // Business logic for first level response
      $response = "CON Please enter your fullname \n";
  } else if ($text == "2") {
      // Business logic for first level response
      // This is a terminal request. Note how we start the response with END
      $response = "CON Please enter the special string ";
  }elseif (isset($level[1]) && $level[1]!="") {
      $response = "END Please you entered ".$level[1];
  }
}
?>
