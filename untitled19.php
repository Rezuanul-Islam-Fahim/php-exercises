<?php
$servername = "localhost";
$username = "rezuanulfahim";
$password = "mypass";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE learnphp";
    $conn->exec($sql);
    echo "Database created successfully";
} catch (PDOException $e) {
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;
?>