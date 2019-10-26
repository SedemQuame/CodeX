<?php
// Connecting to the database string.
include '../php/db_connect.php';

// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

// $level = explode("*", $text);

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Codex Traceability System\n";
    $response .= "1. Query database, with special string. \n";
    $response .= "2. Sign up, as a part of the supply chain (*Service Unavailable)";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Please select the category of the product \n";
    $response .= "1. Vegetable \n";
    $response .= "2. Fruit \n";
    $response .= "3. Grain, Beans and Nuts \n";
    $response .= "4. Meat and Poultry \n";
    $response .= "5. Fish and Seafood \n";
    $response .= "6. Diary Products \n";
    $response .= "7. Processed Foods \n";
} else if ($text == "2") {
    $response = "END Serivce currently, unavailable please try again later ";

} else if($text == "1*1") {
    $response = "CON Registered Vegetable Items \n";
    // $results = queryDB("Vegetables");
} else if($text == "1*2") {
    $response = "CON Registered Fruits Items \n";
    $response .= "1. Apples (8f700d8b89cf6ae6df18c4859135a8b2e01d6217)\n";
    $response .= "2. Orange_orange (ca4c46bb93b06799239a95b849c7f9d097b30822)\n";

    // printResults("Fruits");
} else if($text == "1*3") {
    $response = "CON Registered  Grain, Beans and Nuts Items \n";
    $response .= "1. \n";
    $response .= "2. \n";
    $response .= "3. \n";

    // printResults("Grain, Beans and Nuts");
} else if($text == "1*4") {
    $response = "CON Registered Meat and Poultry Items \n";
    $response .= "1. \n";
    $response .= "2. \n";
    // printResults("Meat and Poultry");
} else if($text == "1*5") {
    $response = "CON Registered Fish and Seafood Items \n";
    $response .= "1. \n";
    $response .= "2. \n";
    $response .= "3. \n";
  } else if($text == "1*6") {
    $response = "CON Registered Diary Product Items \n";
    // printResults("Diary Products");
    $response .= "1. \n";
    $response .= "2. \n";
    $response .= "3. \n";
} else if($text == "1*7") {
    $response = "CON Registered Processed Foods Items ";
    // printResults("Processed Food");    $response .= "1. \n";
    $response .= "2. \n";
    $response .= "3. \n";
}


// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

// function queryDB($type){
//   $sql = "SELECT product_name, private_key FROM traceability.product
//           WHERE product_type = ':type';"
//
//   $stmt = $pdo->prepare($sql);
//
//   $stmt->execute(array(':type' => $type));
//
//   $results = array();
//
//   while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
//      $results = [
//       'name' => $row['product_name'],
//       'key' => $row['private_key']
//     ];
//    }
//
//   return $results;
// }
//
// function printResults($item){
//   $results = queryDB($item);
//   if(isset($results)){
//     for ($i=0; $i <count($results); $i++) {
//       $response .= ($i+1).". ".$results[$i]." \n";
//     }
//   }
// }
?>
