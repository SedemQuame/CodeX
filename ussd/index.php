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
    $response .= "1. Red Peppers (a686deb67a4f7e6483582b74adce7c60b2994f54)\n";
    $response .= "2. Orange Carrot (aa0bf56a97444fba5f85721bef12b2994635447d)\n";
    $response .= "3. Brocolli Veges (263c74af95b6b27b2df2c1ac334adb553b65cb56)\n";
} else if($text == "1*2") {
    $response = "CON Registered Fruits Items \n";
    $response .= "1. Apples (8f700d8b89cf6ae6df18c4859135a8b2e01d6217)\n";
    $response .= "2. Orange_orange (ca4c46bb93b06799239a95b849c7f9d097b30822)\n";

    // printResults("Fruits");
} else if($text == "1*3") {
    $response = "END Registered  Grain, Beans and Nuts Items \n";
    $response .= "1. No results found.\n";

    // printResults("Grain, Beans and Nuts");
} else if($text == "1*4") {
    $response = "CON Registered Meat and Poultry Items \n";
    $response .= "1. Roster Chicken (4cfa2d3f67aecb1f76280dd7aaff537a7c168ff3)\n";

} else if($text == "1*5") {
    $response = "CON Registered Fish and Seafood Items \n";
    $response .= "1. Fish Product (1c100f75133a71356bfe8d7ee6ee121d3c76006b)\n";
    $response .= "2. Fishy Fish 2 (b5d68766561cbc977518f980f6bcf6d0d172df29)\n";
  } else if($text == "1*6") {
    $response = "CON Registered Diary Product Items \n";
    // printResults("Diary Products");
    $response .= "1. Cheese1 (65e8b7529a098e2cd39a45de0a149a161bca6b49)\n";
    $response .= "2. Yellow Milk(65e8b7529a098e2cd39a45de0a149a161bca6b49)\n";
} else if($text == "1*7") {
    $response = "CON Food Value Chain ";
    // printResults("Processed Food");    $response .= "1. \n";
    $response .= "2. \n";
    $response .= "3. \n";
} else if($text == "1*1*1") {
    $response = "END Value Chain Actors \n";
    $response .= "1. Edward, Owusu";
} else if($text == "1*2*1") {
    $response = "END Value Chain Actors \n";
    $response .= "1. Steven, Asomani)\n";}
else if($text == "1*2*2") {
   $response = "END Registered Fruits Items \n";
   $response .= "1. Steven, Asomani -> beatrice, adjei -> Edward, Owusu)\n";
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
