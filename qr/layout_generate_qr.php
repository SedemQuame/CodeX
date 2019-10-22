<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_GET['img'])) {
        $img =  $_GET['img'];
        echo $img;
        echo '<br />';
      }
    ?>
    <form action="generate_qr.php" method="post">
      <input type="text" name="qr_text" placeholder="Enter Text To Convert To Qr Code">
      <input type="submit" value="submit">
    </form>
  </body>
</html>
