<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="qr_script.php" method="POST">
      <!-- MAX_FILE_SIZE (maximum file size in bytes) must precede the file input field used to upload the QR code image -->
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <!-- The "name" of the input field has to be "file" as it is the name of the POST parameter -->
      <div class="">
        <label for="">Choose QR code image to read/scan:</label>
        <br>
        <input name="file" type="file" />
      </div>
      <br>
      <div class="">
        <input type="submit" value="Read QR code" />
      </div>
    </form>
  </body>
</html>
