<?php
session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "Aeqdwcrfv0106";
$DB_name = "pool_php_rush";

try {
    $connection = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>
