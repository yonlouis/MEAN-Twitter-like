<!DOCTYPE html>
<html>
  <head>
    <title>Hello guys!</title>
    <meta content="text/html"; charset="UTF-8">
  </head>
  <body>
    <a href="login.php">Login Page</a>
    <a href="inscription.php">Registration Page</a>

  </body>
</html>
<?php
session_start();
echo "<a href=login.php> LOGOUT </a>";
?>
