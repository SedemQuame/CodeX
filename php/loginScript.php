<?php
 $emailAddress = htmlspecialchars('emailAddress');
 $password = htmlspecialchars('password');

 // Including connection script.
 include 'db_connect.php';

 $sql =  "SELECT user_id, password, user_contact_info FROM
          `traceability`.`user` WHERE user_contact_info LIKE '$emailAddress'";

 $stmt = $pdo->prepare($sql);

 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

 if($password = $result['password']){
   // Store user id, in sessions.
   session_start();
   if(!isset($_SESSION['user_id'])){
     $_SESSION['user_id'] = $result['user_id'];
   }
   $msg = "Login Successful";
   header('location: ../enquirer.php?msg='.$msg);
 } else {
   $msg = "Login Unsuccessful";
   header('location: login.php?msg='.$msg);
 }
?>
