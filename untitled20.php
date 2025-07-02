<?php
$servername = "localhost";
$username = "rezuanulfahim";
$password = "mypass";
$db_name = "learnphp";

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=$db_name",
        $username,
        $password,
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully<br/>";

    $sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(60),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);
    echo "MyGuests table created successfully<br/>";
} catch (PDOException $e) {
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;
?>