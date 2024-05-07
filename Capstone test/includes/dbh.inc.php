<?php

//Set ups database location I think
$dsn = "mysql:host=pi.cs.oswego.edu;dbname=FoodDatabase";
$dbusername = "tastacio";
$dbpassword = "Tyson2110";

try {
    //code... the first line connects to the database I think
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //some error handling;
    echo "Connection failed: " . $e->getMessage();
}