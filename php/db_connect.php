<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="traceability";

try{
  $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $output = 'Database connection successful.';
}catch(PDOException $e){
  /* NOTE: $e isn't a string but rather an object.*/
  $error = $e->getMessage();
  $output = 'Database connection failed. \nError mEssage: '. $error;
}

// echo $output;

?>
