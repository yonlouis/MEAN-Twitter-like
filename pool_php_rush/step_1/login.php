<?php


session_start();
$host = "localhost";
$username = "root";
$password = "Aeqdwcrfv0106";
$database = "pool_php_rush";
$message = "";

try
{
     $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["login"]))
     {
          if(empty($_POST["username"]) || empty($_POST["password"]))
          {
               $message = '<label>All fields are required</label>';
          }
          else
          {
               $query = "SELECT * FROM users WHERE username = :username AND password = :password";
               $statement = $connect->prepare($query);
               $statement->execute(
                    array(
                         'username'     =>     $_POST["username"],
                         'password'     =>     $_POST["password"]
                    )
               );
               $count = $statement->rowCount();
               if($count > 0)
               {
                    $_SESSION["username"] = $_POST["username"];
                    header("location:index.php");
               }
               else
               {
                    $message = '<label>T\'as fais une erreur ...</label>';
               }
          }
     }
}
catch(PDOException $error)
{
     $message = $error->getMessage();
}

if($_SESSION['admin'] != 1) {
    header('Location: index.php');
}
    $db = new PDO('mysql:host=localhost;dbname=pool_php_rush', 'root', 'Aeqdwcrfv0106');
    $msg = $db->prepare('SELECT id FROM users');
    $msg->execute();
    $count = $msg->rowCount();
    $query = $db->prepare('DELETE FROM users WHERE email = ? AND admin = 0');
    $query->execute(array($_POST['remove']));
    $error = $db->prepare('SELECT id FROM users');
    $error->execute();
    $number = $error->rowCount();
    if ($number == $count) {
        $_SESSION['error'] = true;
    }
    else {
        $_SESSION['error'] = false;
    }
    header('Location: admin.php');

?>
<!DOCTYPE html>
<html>
     <head>
          <!-- <title>Webslesson Tutorial | PHP Login Script using PDO</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
     </head>
     <body>
          <br />
          <div class="container" style="width:500px;">
               <?php
               if(isset($message))
               {
                    echo '<label class="text-danger">'.$message.'</label>';
               }
               ?>
               <h3 align="">LOGIN</h3><br />
               <form method="post">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" />
                    <br />
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" />
                    <br />
                    <input type="submit" name="login" class="btn btn-info" value="Login" />
               </form>
          </div>
          <br />
     </body>
</html>
