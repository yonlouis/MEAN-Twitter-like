<?php
session_start();
?> <!--
<!DOCTYPE html>
<html>
  <head>
    <title>Hello guys!</title>
    <meta content="text/html"; charset="UTF-8">
  </head>
  <body>
    <a href="login.php">Login Page</a>
    <a href="inscription.php">Registration Page</a><br><br><br>
  </body>
</html> -->

<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="bonus.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

   <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <nav class="nav-extended">
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="login.php">Logout</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a class="active" href="index.php">Home</a></li>
            <?php
/*
            if($_SESSION['admin'] == 1) {
              echo "<a href='admin.php'>ADMIN</a>";
            }
            else {
              echo "";
            }
*/
            ?>
        <div class="nav-wrapper">
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="admin.php">ADMIN</a></li>
          </ul>
        </div>
      </div>
      </nav>

  </body>
</html>
<body>

</body>
</html>
