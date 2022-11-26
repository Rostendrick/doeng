<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
try {
    $db = new PDO("mysql:host=$servername; dbname=doeng", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo '<br>' . "COOL";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db = null;
?>