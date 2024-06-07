<?php
$Host = "localhost";
$db = "db_name";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$Host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
        
}
?>
