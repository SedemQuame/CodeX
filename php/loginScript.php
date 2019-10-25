<?php
 $emailAddress = htmlspecialchars($_POST['emailAddress']);
 $password = htmlspecialchars($_POST['password']);

 // Including connection script.
 include 'db_connect.php';

$sql = "SELECT user_id, password, user_contact_info FROM
          `traceability`.`user` WHERE user_contact_info LIKE '%".$emailAddress."%'";

 $stmt = $pdo->prepare($sql);

 $stmt->execute();

 $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

 if(htmlspecialchars($_POST['password']) == $result[0]['password']){
   session_start();
   if(!isset($_SESSION['user_id'])){
     $_SESSION['user_id'] = $result[0]['user_id'];
     $_SESSION['online'] = 1;
   }
   $msg = "Login Successful";
   header('location: ../enquirer.php?msg='.$msg);
 } else {
   $msg = "Login Unsuccessful";
   header('location: ../login.php?msg='.$msg);
 }
?>
