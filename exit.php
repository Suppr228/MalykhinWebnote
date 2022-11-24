<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Form</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
  <?php
setcookie('user', $user['name'], time() - 3600, "/");
header('Location: index2.php');
?>
  </body>
</html>
