<?php
  // Script for generating qr codes using the goqr.me servers.
  $img = '<img src="https://api.qrserver.com/v1/create-qr-code/?data='.$_POST['qr_text'].'&amp;size=600x600" alt="QR_TEXT"/>';
  header("location: layout_generate_qr.php?img=".$img);

?>
