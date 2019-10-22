<?php
// Getting data from input field.
$key = htmlspecialchars($_POST['qr_text']);

// Including connection script.
include 'db_connect.php';

$sql = "SELECT * FROM traceability.product
        WHERE private_key = :key;";

$stmt = $pdo->prepare($sql);

$stmt->execute(array(':key' => $key));

$results = [];

while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
   $results = [
    'id' => $row['product_id'],
    'name' => $row['product_name'],
    'url' => $row['product_url'],
    'chain' => $row['supply_chain'],
    'date' => $row['date_added'],
    'qr_url' => $row['qr_code_url'],
    'description' => $row['product_description'],
    'type' => $row['product_type'],
    'product_price' => $row['product_price'],
    'private_key' => $row['private_key']
  ];
 }

 print_r($results);


?>
